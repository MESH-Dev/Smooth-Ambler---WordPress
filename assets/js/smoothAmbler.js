jQuery(document).ready(function($){


  //Let's do something awesome!
  $(".homeslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 1000,            // Integer: Speed of the transition, in milliseconds
  timeout: 8000,          // Integer: Time between slide transitions, in milliseconds

	});

  $( "#online-btn" ).click(function() {
 	  $( "#online-wrap" ).fadeToggle( "slow");

  });

    $("#pac-input").focus();



  //modal
  function modalTrigger(){
  	var d = document.getElementById("modalPop");
  	if(d.className == 'active'){d.className = "";}else{d.className = "active";}
  }
  document.getElementById('modalTrigger').onclick = modalTrigger;
  document.getElementById('modalTriggerClose').onclick = modalTrigger;




    //------FILTER COCKTAILS------

   $('.filter-links li a').click(function() {

    // fetch the class of the clicked item
    //var ourClass = $(this).attr('class');
    var customType = $( this ).data('filter');

    // reset the active class on all the buttons
    $('.filter-links li').removeClass('active');

    // update the active state on our clicked button
    $(this).parent().addClass('active');
    if(customType  == 'all')
    {
      // show all our items
      $('#cocktails').children('div.maker-block').show();
    }
    else
    {
      // hide all elements that don't share ourClass
      $('#cocktails').children('div:not(.' + customType  + ')').hide();

      // show all elements that do share ourClass
      $('#cocktails').children('div.' + customType).show();
    }
    return false;
    });





    // Quick hack to color the taxonomy menu items

    if ((window.location.href.indexOf("makers/") > -1)) {
        $('.menu-item-81 a').css('color', '#e31b23');
    }

    if ((window.location.href.indexOf("cocktails/") > -1)) {
        $('.menu-item-400 a').css('color', '#e31b23');
    }

    // Hide the sub-menu of the responsive mobile menu
    $("#re-nav .sub-menu").hide();

    // Open up the dropdowns in the responsive menu

    $(".menu-arrow").click( function() {
        $(this).next(".sub-menu").slideToggle('fast', function() {

        });
    });

    $('.menu-item').each(function(index, value) {
        if ($(this).find('ul').length == 0) {
            $(this).find('i').hide();
        }
    });


    // Change the hours depending on what day it is

    var d = new Date().getDay();

    if (d == 6) {
        $(".weekday").hide();
        $(".sunday").hide();
        $(".saturday").show();
        $(".tours-friday").hide();
        $(".tours-saturday").show();
        $(".tastings-friday").hide();
        $(".tastings-saturday").show();
    } else if(d == 0) {
        $(".weekday").hide();
        $(".sunday").show();
        $(".saturday").hide();
        $(".tours").hide();
        $(".tours-friday").hide();
        $(".tours-saturday").hide();
        $(".tastings").hide();
        $(".tastings-friday").hide();
        $(".tastings-saturday").hide();
    } else if(d == 5){
        $(".weekday").show();
        $(".saturday").hide();
        $(".sunday").hide();
        $(".tours-friday").show();
        $(".tours-saturday").hide();
        $(".tastings").show();
        $(".tastings-saturday").hide();
    } else {
        $(".weekday").show();
        $(".tastings-weekday").show();
        $(".saturday").hide();
        $(".sunday").hide();
        $(".tastings").show();
        $(".tours").hide();
        $(".tours-friday").hide();
        $(".tours-saturday").hide();
        $(".tastings-saturday").hide();
    }

    // Pull in the Instagram feed

    feed = new Instafeed({
       get: 'user',
            userId: 175147131,
            accessToken: '19403516.f355396.214ad5330c924091b3b7165035023005',
            resolution: 'standard_resolution',
            links: 'true',
            template: '<div id="bg"><img src="{{image}}" /></div>',
      mock: true,
      custom: {
        images: [],
        currentImage: 0,
        showImage: function () {
          var result, image;
          image = this.options.custom.images[this.options.custom.currentImage];
          result = this._makeTemplate(this.options.template, {
            model: image,
            id: image.id,
            link: image.link,
            image: image.images[this.options.resolution].url,
            caption: this._getObjectProperty(image, 'caption.text'),
            likes: image.likes.count,
            comments: image.comments.count,
            location: this._getObjectProperty(image, 'location.name')
          });
          $("#instafeed").html(result);
        }
      },
      success: function (data) {
        this.options.custom.images = data.data;
        this.options.custom.showImage.call(this);
      }
    });
    feed.run();


    // Open the responsive nav menu on tap

    var element = document.getElementById('menu-icon');
    var hammertime = Hammer(element).on("tap", function(event) {
        $('#re-nav').toggle('slide', {direction:'left'}, 300);
    });
});
