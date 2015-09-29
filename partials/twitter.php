 <?php
ini_set('display_errors', 1);
require_once(__DIR__.'/../partials/TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "83915658-9luHDoL9Jtvkn46HLTYehtoQtaCKYiseRyprI6qmO",
    'oauth_access_token_secret' => "NBus2GZxKJ7onUq58q2VHYD1zuWmypKgcg0hRG2VVe46r",
    'consumer_key' => "BZrJakIcIfNofC4nFcTh4D8nu",
    'consumer_secret' => "C2Ouu7mU7nGrJZY9JI7bCLvzJCki42wF0vPG0KM2bAJMVdojLu"
);


$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=SmoothAmbler&count=1';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

            $result = json_decode($response, true);

            echo $result[0]['text'];


// var_dump(json_decode($response));

?>
