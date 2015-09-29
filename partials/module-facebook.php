<?php
	function fetchUrl($url){
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL, $url);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	 // You may need to add the line below
	 // curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	 $feedData = curl_exec($ch);
	 curl_close($ch);
	 return $feedData;
	}
	$profile_id = "SmoothAmbler";
	//App Info, needed for Auth
	$app_id = "1456031494652359";
	$app_secret = "3e05a8558ef66f95f028d0181b2692b4";
	//Retrieve auth token
	$authToken = fetchUrl("https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&fb_exchange_token=CAAUsQMAFQccBANfAoVpuAyMCVoXgtUMmyNLjD9IVclIVXGSwwP1mRdApwIZALV54pF0XZBdfS4wL2wlaT6hjrD37tmfPSJnr5EjgE6xOsYb6QR2OlZCMrL5GFnZBDtd5j8fk8yzVvYiUsaGMiIF8jn096asldSh9LiiWvf6mBZBUBPa5dyye1f2n5eNNaTsIm4XyX2ljX2GyEQnqPcDCWiJTXvTDMqv8ZD&client_id=$app_id&client_secret=$app_secret");
	$json_object = fetchUrl("https://graph.facebook.com/$profile_id/feed?$authToken");

	$obj = json_decode($json_object);


	$post = $obj->data[0]->message;
	$url =  $obj->data[0]->link;

	echo "<a href='$url'>$post</a>";
?>