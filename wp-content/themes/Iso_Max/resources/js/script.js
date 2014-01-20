

$(window).resize(function() {
ipad_fix();
});

$(document).ready(function(){
ipad_fix();

});



function ipad_fix()
{
	var isiPad = navigator.userAgent.match(/iPad/i) != null;

	if(isiPad)
	{
		if($(window).width() > $(window).height())
		{
			$(".slider_accordian").hide();
			$(".slider_banner").show();
			$(".top_container").removeClass("show-ipad");
			$(".top_nav").removeClass("show-ipad");
			$('.top_nav ul').removeClass("ipad_topnav_ul_fix");
			$('.top_nav li').removeClass("ipad_topnav_li_fix");
			$('.nav ul').removeClass("ipad_nav_ul_fix");
			$('.logo').removeClass("ipad_logo_fix");
			$(".nav").removeClass("show-ipad");
			$(".search_ipad").removeClass("show-ipad");
			$(".search_ipad").removeClass("ipad_search");
			$(".search_ipad").removeClass("searchText");
			$(".searchbox_ipad").removeClass("searchbox_ipad");
			$('.nav ul').removeClass("ipad_nav_ul_fix");
            $('.nav ul li').removeClass("ipad_navMenu");
            $('.search_img').removeClass("ipad_search_img");			
            $('.top_nav ul').addClass("ipad_topnav_ul_fix_landscape");		
            $('.bannereffect').removeClass("bannereffectForIpadPotrait");
            $('.banner').removeClass("bannerForPotrait");
            $('.banner_img').removeClass("banner_img_potrait");
            $('.pull_18').addClass("pull_18_landscape");
            $('.search_img').addClass("search_img_lanscape");
			$('.nav_container').removeClass("nav_container_ipad");
			$('.navMenu').addClass("navMenu_ipad");
			$('.nav').addClass("nav_ipad");
            
		}
		else
		{
			$(".slider_accordian").addClass("hide_ipad");
			$(".slider_banner").addClass("is_ipad");
			$(".hidden-desktop").addClass("hide-ipad");
			$(".top_container").addClass("show-ipad");
			$(".top_nav").addClass("show-ipad");
			$('.top_nav ul').addClass("ipad_topnav_ul_fix");
			$('.top_nav li').addClass("ipad_topnav_li_fix");
			$('.logo').addClass("ipad_logo_fix");
			$(".nav").addClass("show-ipad");
			$(".search_ipad").addClass("show-ipad");
			$(".search_ipad").addClass("ipad_search");
			$(".searchbox").addClass("searchbox_ipad");
			$('.nav ul').addClass("ipad_nav_ul_fix");
			$('.nav ul li').addClass("ipad_navMenu");
			$(".top_nav_ipad").show();
            $('.subnavdropdown_menu').removeClass("ipad_nav_ul_fix");
            $('.subnavdropdown_menu_options').removeClass("ipad_navMenu");
            $('.search_img').addClass("ipad_search_img");
            $('.bannereffect').addClass("bannereffectForIpadPotrait");
            $('.banner').addClass("bannerForPotrait");
            $('.banner_img').addClass("banner_img_potrait");
            $('.pull_18').removeClass("pull_18_landscape");
			$('.nav_container').addClass("nav_container_ipad");
			$('.circle_img').addClass("circle_img_ipad");
			$('.navMenu').removeClass("navMenu_ipad");
			$('.nav').removeClass("nav_ipad");
            
		}
	}
}

function mainmenu()
{

$(" .nav-bar ul ").css({display: "none"}); // Opera Fix
$(" .nav-bar li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).show(200);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden"});
		});
}

 $(document).ready(function(){					
	mainmenu();
	
/* 	$('ul.expander li').expander({
  slicePoint: 40,
  widow: 2,
  expandEffect: 'show',
  expandPrefix: '',
  expandText:   'lees meer ...',
  
  userCollapseText: 'lees minder'
  
  
}); */

/* var screen_width = screen.width;
if(screen_width < 480)
{
	$('.search_img_responsive').css('right','14% !important');
} */

});




	

