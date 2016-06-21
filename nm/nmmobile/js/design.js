$(document).ready(function() {
	// toggle read details
	(function () {
	  var readMore = $('.readMore');
	  readMore.on('click', function () {
		 var $changetext = $(this);
		$(this).closest('ul.mann_ki_baat_list').next('.read_details').slideToggle("slow");
		$changetext.text($changetext.text() == "READ LESS" ? "READ MORE": "READ LESS");
	  });
	}) ();
	
    (function () {
        var $window = $(window);

        $('section[data-type="background"]').each(function() {
            var $bgObject = $(this);

            $(window).scroll(function (){
                var vPosition = -($window.scrollTop() / $bgObject.data('speed'));
                var newPopsition = '90%'+ vPosition + 'px';
                $bgObject.css({backgroundPosition: newPopsition});
            });
        });
    }) ();

    // Mobile grids hack
    (function () {
        var homeContent = $('#home_content'),
            col1 = homeContent.find('.col-xs-6:odd'),
            col2 = homeContent.find('.col-xs-6:even');

        col1.addClass('mobile_grid2');
        col2.addClass('mobile_grid1');

        return false;
    }) ();
	
	(function () {
		var win = $(window),
			embedPlayer = $('.watchlive_embed_player'),
			watchliveBtn = $('.watchLiveList_thumbnail, .watchlive_playicon');
			
		watchliveBtn.on('click', function (e) {
			e.preventDefault();
			embedPlayer.fadeIn(400, 'swing');
		});
			
		embedPlayer.css({
			'height' : win.height() + 'px'
		});
				
		win.on('resize', function (e) {
			embedPlayer.css({
				'height' : win.height() + 'px'
			});
		});
	}) ();
	
	// Carousel
	(function () {
		// Carousel for home
		var carousel1 = $('#nm_mobile_banner');
		
		carousel1.owlCarousel({
			loop: true,
			pagination: false,
			nav: true,
			navText: [
			  "<span class='glyphicon glyphicon-menu-left'></span>",
			  "<span class='glyphicon glyphicon-menu-right'></span>"
			],
			autoHeight: true,
			items: 1
		});
  	}) ();
	
 


  
  });


// FOLLOW ME BAR  ************************************************///
function stickyTitles(stickies) {
    var thisObj = this;

    thisObj.load = function() {
        stickies.each(function(){
            var thisSticky = jQuery(this).wrap('<div class="followWrap" />');

            thisSticky.parent().height(thisSticky.outerHeight());
            jQuery.data(thisSticky[0], 'pos', thisSticky.offset().top);
        });

        jQuery(window).off("scroll.stickies").on("scroll.stickies", function() {
            thisObj.scroll();
        });
    }

    thisObj.scroll = function() {
        stickies.each(function(i){
            var thisSticky = jQuery(this),
                nextSticky = stickies.eq(i+1),
                prevSticky = stickies.eq(i-1),
                pos = jQuery.data(thisSticky[0], 'pos');

            if (pos <= jQuery(window).scrollTop()) {
                thisSticky.addClass("fixed");

                if (nextSticky.length > 0 && thisSticky.offset().top >= jQuery.data(nextSticky[0], 'pos') - thisSticky.outerHeight()) {
                    thisSticky.addClass("absolute").css("top", jQuery.data(nextSticky[0], 'pos') - thisSticky.outerHeight());
                }
            } else {
                thisSticky.removeClass("fixed");

                if (prevSticky.length > 0 && jQuery(window).scrollTop() <= jQuery.data(thisSticky[0], 'pos')  - prevSticky.outerHeight()) {
                    prevSticky.removeClass("absolute").removeAttr("style");
                }
            }
        });
    }
}

jQuery(document).ready(function(){
  	new stickyTitles(jQuery(".followMeBar")).load();

    $('.common_height').css({'height':($(window).height())+'px'});

    $(window).resize(function(){
        $('.common_height').css({'height':($(window).height())+'px'});
    });
});
//END FOLLOW ME BAR  ************************************************///


$(document).ready(function(){
  	$('.ddArrow a[href^="#"]').on('click',function (e) {
  	    e.preventDefault();

  	    var target = this.hash;
  	    var $target = $(target);

  	    $('html, body').stop().animate({
  	        'scrollTop': $target.offset().top
  	    }, 900, 'swing', function () {
  	        window.location.hash = target;
  	    });
  	});

  	$('#slide4 a[href^="#"]').on('click',function (e) {
  	    e.preventDefault();

  	    var target = this.hash;
  	    var $target = $(target);

  	    $('html, body').stop().animate({
  	        'scrollTop': $target.offset().top
  	    }, 900, 'swing', function () {
  	        window.location.hash = target;
  	    });
  	});

    $('.vvv a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    (function () {
          var reqHeight = $('.vid_text').outerHeight();

          $('.vid_content').css({
           'height' : reqHeight + 'px'
          })
    }) ();
});
