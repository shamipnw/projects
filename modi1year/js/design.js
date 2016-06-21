$(document).ready(function () {
	(function(){
            $("#grid-content").vgrid({
                easing: "easeOutQuint",
                time: 500,
                delay: 20,
                fadeIn: {
                    time: 300,
                    delay: 50
                }
            });   
			
			$("#grid-content2").vgrid({
                easing: "easeOutQuint",
                time: 500,
                delay: 20,
                fadeIn: {
                    time: 300,
                    delay: 50
                }
            });  
			
			 $("#grid-content3").vgrid({
                easing: "easeOutQuint",
                time: 500,
                delay: 20,
                fadeIn: {
                    time: 300,
                    delay: 50
                }
            });  
			     
	}) ();
	
	(function () {
		 $("a[rel^='prettyPhoto']").prettyPhoto({
                  theme: 'pp_default',
                  social_tools: false,
				  deeplinking:false,
              });
	}) ();
});


$(document).ready(function () {
	// Active class for navigation
	(function () {
		$('nav#nmAnniversary_nav').find('li').on('click', function () {
			$(this).addClass('nav_active');
			$(this).siblings().removeClass('nav_active');
		});
	}) ();
	
	
	// Sidebar gallery carousel
	(function () {
		var sync1 = $('.carousel_display'),
			sync2 = $('.carousel_thumbs');

		sync1.owlCarousel({
			singleItem : true,
			pagination : false,
			afterAction : syncPosition,
			responsiveRefreshRate : 200
		});

		sync2.owlCarousel({
			items: 3,
	        itemsDesktop      : [1199,3],
	        itemsDesktopSmall : [979,3],
	        itemsTablet       : [768,3],
	        itemsMobile       : [479,3],
	        navigation: true,
			pagination : false,
			responsiveRefreshRate : 100,
			afterInit : function (el) {
				el.find(".owl-item").eq(0).addClass('synced');
			}
		});

		function syncPosition(el){
		    var current = this.currentItem;
		    $(".carousel_thumbs")
					.find(".owl-item")
					.removeClass("synced")
					.eq(current)
					.addClass("synced")
					if($(".carousel_thumbs").data("owlCarousel") !== undefined){
					center(current)
				}
			}
		 
			$(".carousel_thumbs").on("click", ".owl-item", function(e){
				e.preventDefault();
				var number = $(this).data("owlItem");
				sync1.trigger("owl.goTo",number);
			});
		 
		  function center(number){
		    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		    var num = number;
		    var found = false;
		    for(var i in sync2visible){
		      if(num === sync2visible[i]){
		        var found = true;
		      }
		    }
		 
		    if(found===false){
		      if(num>sync2visible[sync2visible.length-1]){
		        sync2.trigger("owl.goTo", num - sync2visible.length+2)
		      }else{
		        if(num - 1 === -1){
		          num = 0;
		        }
		        sync2.trigger("owl.goTo", num);
		      }
		    } else if(num === sync2visible[sync2visible.length-1]){
		      sync2.trigger("owl.goTo", sync2visible[1])
		    } else if(num === sync2visible[0]){
		      sync2.trigger("owl.goTo", num-1)
		    }
		}
	}) ();

	// Vertical dots navigation
	(function () {
		$('#page_content1').fullpage({
			anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5Page', '6Page', '7thPage', '8thPage'],
			navigation: true,
			navigationPosition: 'right',
			responsive: 320
		});

		$('.govpage_content').closest(
				'.blue_wrapper'
			).siblings(
				'#fp-nav'
			).addClass(
				'fp_nav_hilight'
			);
		$('.govpage_content').parent().css({
			'background' : '#FFFFFF'
		});
	}) ();

	// Responsive Nav
	(function () {
		$('a.nav_btn').on('click', function (e) {
			e.preventDefault();

			if ( $(this).hasClass('closeNav') ) {
				$('nav#nmAnniversary_nav').slideUp(150, 'easeOutCirc', function () {
					$('a.nav_btn').removeClass('nav_btn_hover');
				});
				$(this).removeClass('closeNav');
			} else {
				$('nav#nmAnniversary_nav').slideDown(150, 'easeOutCirc');
				$(this).addClass('closeNav');
			}

			$(this).addClass('nav_btn_hover');

			e.stopPropagation();
		});

		$('a.nav_btn').on('mouseenter', function () {
			$(this).addClass('nav_btn_hover');
		});
	}) ();

	// Then & Now share content
	(function () {
		$('.page_content_item_alt').find('span.circle_content').hover(function () {
			$(this).children('section.page_content_item_share').stop().fadeIn(600, 'easeOutSine');
		}, function () {
			$(this).children('section.page_content_item_share').stop().fadeOut(300, 'easeOutCirc');
		});
		
			$('.page_content_item_alt').find('span.circle_content').hover(function () {
			$(this).children('section.page_content_item_share2').stop().fadeIn(400, 'easeOutSine');
		}, function () {
			$(this).children('section.page_content_item_share2').stop().fadeOut(400, 'easeOutCirc');
		});

		$('.page_content_item').find('a.circle_content').on('click', function () {
			$(this).addClass('content_exit');
		});
	}) ();

	// Page content articles
	(function () {
		$('section.page_content_articles').css({
			'position' : 'absolute'
		});
	}) ();
	
	// Infographics Carousel
	(function () {
		$('.infographics_display').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: true,
			asNavFor: '.infographics_thumbs'
		});
		
		$('.infographics_thumbs').slick({
			vertical : true,
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.infographics_display',
			centerMode: false,
			focusOnSelect: true,
			draggable : false
		});
	}) ();
});
