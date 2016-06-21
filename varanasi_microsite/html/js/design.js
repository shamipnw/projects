// JavaScript Document

 
$(document).ready(function() {
	
	var $window = $(window);
	
	$('section[data-type="background"]').each(function() {
		var $bgObject = $(this);
		$(window).scroll(function (){
			var vPosition = -($window.scrollTop() / $bgObject.data('speed'));
			var newPopsition = '90%'+ vPosition + 'px';
			$bgObject.css({backgroundPosition: newPopsition});
			
			});
        
    });
    
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
	
	
/* lightbox script*/
             $("a[rel^='prettyPhoto']").prettyPhoto({
                  theme: 'pp_default',
                  social_tools: false,
				  deeplinking:false,
              });
/* lightbox script*/



 (function () {
      var reqHeight = $('.vid_text').outerHeight();

      $('.vid_content').css({
       'height' : reqHeight + 'px'
      })
     }) ();
	 
});


