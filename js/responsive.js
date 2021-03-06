/*!
 * responsive NMU javascrips
 * use JQ instead of jQuery for calls to jQuery that must reference the default library included with drupal
 */

jQuery(document).ready(function($){  //run after the DOM has loaded
	//use the site home link from the title bar to populate the home button for mobile view
	var mobile_home_link = $('.sub_titles a').attr("href");
	$("#mobile_home_link").attr("href", mobile_home_link);

	//check for firefox and add a modernizr class (used in image widths below)
	Modernizr.addTest('firefox', function () {
	 return !!navigator.userAgent.match(/firefox|opera/i);
	});

	responsive_tweaks('load');

	//run the tweaks on page resize (but only if the page actually resizes)
	var x;
	var w=$(window).resize(function()
	{
		var newx=w.width();
		if(x!=newx)
		{
		$('#zone-branding-wrapper *, #zone-menu-wrapper *, #header_mobile_tools *').unbind('click');  //this will make sure that all the click event handlers are unbound from the nav areas before firing the responsive tweaks, otherwise the menus will grow and shrink as many times as the resize function is called during the window resize on each click
			responsive_tweaks('resize');
		}
		x=newx;
	});
});

function responsive_tweaks(theMethod){
	if(Modernizr.mq('(min-width: 0px)')) //only run the tweaks in browsers that understand the min-width media queries (as defined by modernizr)
	{
		windowWidth = get_width('window');
		scrollBarWidth = get_width('scroll');

		//pull out the table width for homepage blocks to allow them to follow my CSS rules
		jQuery('.content_main_hp1_col table, .content_main_hp2_col table').each(function(){
			jQuery(this).removeAttr('width');
			jQuery(this).css('width', '');
		});

		//re-determine the column's min height because it will change as the browser is resized.
		sidebar_sizer();

		//----------------------------------------------mobile view
		if(windowWidth<740-scrollBarWidth)
		{
			jQuery('.jquery_mobile').remove(); //make sure added items only appear once (keep this as the first item)

			//put in fallback icons for opera mini
			if(jQuery('html').hasClass('fontface'))
				var theNavIcon = 'icon-reorder';
			else
			{
				var theNavIcon = 'icon-align-justify';
				jQuery('#btn_atoz i').attr('class', 'icon-folder-open');
				jQuery('#btn_directories i').attr('class', 'icon-user');
			}

			//create the mobile navigation button
			var MainTitleContent = jQuery('.main_title').html();
			jQuery('.main_title').html(MainTitleContent + '<a class="btn btn-small jquery_mobile" id="branding_nav_icon"><i class="'+theNavIcon+'"></i></a>');

			//pull out the image height from all images in the content zone in mobile view
			//this allows an image to scale on small screens
			jQuery('#zone-content img').each(function(){
				jQuery(this).removeAttr('height');
				jQuery(this).css('height', '');
			});

			//pull out the image width from all images in the left column of homepages in mobile view
			//only applied to firefox
			jQuery('.firefox .content_main_hp1_col img, .firefox .content_main_hp2_col img, .firefox .content_main_hp3_col img').each(function(){
				jQuery(this).removeAttr('width');
				jQuery(this).css('width', '');
			});

			//pull out table widths in mobile view so they can scale to screen size
			//if a user shrinks and then grows their browser this will cause the widths to be lost until reload
			jQuery('#zone-content table').each(function(){
				jQuery(this).removeAttr('width')
				jQuery(this).css('width', '');
			});

			//add a class to iframes so they fit into mobile view
			jQuery('#zone-content iframe').each(function(){
				jQuery(this).addClass('jquery_iframe');
			});

			//search box
			theMethod == 'load' ? jQuery('#header_search').hide() : false;  //only hide the search box on page load, not resize
			jQuery('#btn_search').click(function(){
				jQuery('#header_search').slideToggle();
				jQuery('#btn_search').toggleClass('btn-success');
			});

			//main navigation
			jQuery('#region-menu').hide();  //this will trigger the menu to hide on screen resize (within the mobile dimensions) and load
			jQuery('#zone-branding').click(function(){
				jQuery('#region-menu').slideToggle();
				jQuery('#branding_nav_icon').toggleClass('btn-success');
			});

			//create the sidebar navigation label and button
			var sidebarFirstHead = jQuery('.content_nav_head').html();
			if(sidebarFirstHead != null) //make sure the sidebar is present
			{
				jQuery('#zone-content').prepend('<div id="sidebar_mobile_header" class="jquery_mobile"><div class="sidebar_mobile_title">'+sidebarFirstHead+'</div><a class="btn btn-small jquery_mobile" id="sidebar_nav_icon"><i class="'+theNavIcon+'"></i></a></div>'); //add the sidebar header and navigation as a new div at the top of the content zone

				if(jQuery('.content_nav_head:eq(1)').html() != null)  //look for a second piece of navigation
					jQuery('.content_nav_head:eq(1)').addClass('jquery_sidebar_subhead');  //add a class to this nav so CSS can show the header in the menu
			}

			//sidebar-first navigation
			jQuery('#region-sidebar-first').hide();
			jQuery('#sidebar_mobile_header').click(function(){
				jQuery('#region-sidebar-first').slideToggle();
				jQuery('#sidebar_nav_icon').toggleClass('btn-success');
			});

		}
		else
		{
			jQuery('.jquery_mobile').remove(); //make sure items added at this size are removed
			jQuery('#zone-content iframe').each(function(){  //remove the iframe class added for mobile view
				jQuery(this).removeClass('jquery_iframe');
			});
			if(jQuery('.content_nav_head:eq(1)').html() != null)  //look for a second piece of navigation
				jQuery('.content_nav_head:eq(1)').removeClass('jquery_sidebar_subhead');  //remove the class used for mobile view
			jQuery('#region-sidebar-first, #header_search, #region-menu').show();  //make sure the region hidden for the mobile view are displayed when not in mobile view
		}

		//----------------------------------------------narrow view
		if(windowWidth>740-scrollBarWidth && windowWidth<980-scrollBarWidth)
		{
			jQuery('.jquery_740').remove();

			//make the NMU homepage news/events sections the same height
			JQ('#NMUFeaturedNews, #NMUUpcomingEventsHP').equalHeights();

			//where there is no sidebar-first on the page, add a class to show the sidebar second on the narrow view
			if(jQuery('#region-content').hasClass('grid-9'))
			{
				//it will be necessary to add the additional homepage classes to this check.
				if(jQuery('#region-content').find('.content_main_hp1_col').html() == null) //check if this is a homepage before un-hiding the third column
				{
					jQuery('#region-content, #region-sidebar-second').addClass('jquery_unhide');
				}
			}
		}
		else
		{
			jQuery('.jquery_740').remove();
			jQuery('#region-content, #region-sidebar-second').removeClass('jquery_unhide');
			//pull out the min heights put in for this view
			jQuery('#NMUFeaturedNews, #NMUUpcomingEventsHP').css('min-height', '');
		}

		/* no tweaks are needed at these sizes
		//----------------------------------------------normal view
		if(windowWidth>960-scrollBarWidth && windowWidth<1220-scrollBarWidth)
		{
			jQuery('.jquery_960').remove();
		}
		else
		{
			jQuery('.jquery_960').remove();
		}

		//----------------------------------------------wide view
		if(windowWidth>1220-scrollBarWidth)
		{
			jQuery('.jquery_1220').remove();
		}
		else
		{
			jQuery('.jquery_1220').remove();
		}
		*/
	}
}
