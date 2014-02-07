/*!
 * global NMU javascrips
 */

//set up another alias for jQuery to handle pages that include their own jQuery library
var JQ = jQuery.noConflict();

//run after all images have loaded
jQuery(window).load(function(){
	sidebar_sizer();

	//any time a user clicks on a page, we check to ensure the sidebars are the correct size.  this is needed to keep the sidebars in sync with toggled elements
	jQuery(document).click(function(e) {
		sidebar_sizer();
	});
});

//default text & behavior for search box
function field_focus(field)
{
	field.style.color="";
	field.style.fontStyle="";
	if (field.value=="Search NMU")
		{
			field.value="";
		}
}

//print the current year
function current_year()
{
	var theDate=new Date();
	var theYear=(theDate.getFullYear());
	return theYear;
}

//get URL variables
//getUrlVars()["name_of_var"];
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}


//make X number of elements an equal height
//jQuery('.GreenBox, .YellowBox').equalHeights();
JQ.fn.equalHeights = function() {
	var tallest = 0;
	return this.each(function(){
		var h = JQ(this).height();
		tallest = h > tallest ? h : tallest;
	}).css("minHeight", tallest);
};

//check if an element exists on a page
//this should use the JQ alias
jQuery.fn.exists = function(){
	return this.length>0;
};


function get_width(theType){
	//we get these dimensions at the function level because they cannot consistently be generated as global variables
	if(theType == 'window'){
		var windowWidth = jQuery(window).width();
		return windowWidth;
	}
	if(theType == 'scroll'){
		var scrollBarWidth = 0;
		if (JQ.browser.mozilla)
			scrollBarWidth = window.innerWidth - jQuery("body").width(); //firefox will use the scroll bar when calculating the window width, webkit will not.  this eliminates that discrepancy
		return scrollBarWidth;
	}
}


function sidebar_sizer(){
	windowWidth = get_width('window');
	scrollBarWidth = get_width('scroll');
	jQuery('.region-content, .region-sidebar-first, .region-sidebar-second, .content_sub_hp3_col, .content_main_hp4_col, .content_sub_hp4_col ').css('min-height', '');  //reset the min-height first

	if(windowWidth<740-scrollBarWidth)
	{
		//don't run at mobile sizes
		return false;
	}
	else
	{
		//exit out early for pages that don't want equal height sidebars
		if (jQuery('.zone-content-finaidtoolbox').length){
			return false;
		}

		//golfcourse & usoec
		if (jQuery('.content_main_hp3_col').length){
			if(jQuery('.content_sub_hp3_col').is(":visible") && jQuery('.region-sidebar-first').is(":visible") && windowWidth>980-scrollBarWidth){  //sizes larger than narrow view
				JQ('.region-content, .region-sidebar-first, .content_sub_hp3_col').equalHeights();
			}
			if(jQuery('.region-sidebar-first').is(":visible") && windowWidth>740-scrollBarWidth && windowWidth<980-scrollBarWidth){  //only in narrow view
				JQ('.region-content, .region-sidebar-first').equalHeights();
			}
		}

		//sports gateway
		else if (jQuery('.content_main_hp4_col').length){
			JQ('.content_main_hp4_col, .content_sub_hp4_col').equalHeights();
		}

		//standard pages
		else if (jQuery('.region-sidebar-second').is(":visible") && jQuery('.region-sidebar-first').is(":visible")) {  //check to see if sidebars are shown
			JQ('.region-content, .region-sidebar-first, .region-sidebar-second').equalHeights();
		}

		//pages without left column
		else if(jQuery('.region-sidebar-second').is(":visible")) {
			JQ('.region-content, .region-sidebar-second').equalHeights();
		}

		//pages without right column
		else if(jQuery('.region-sidebar-first').is(":visible")) {
			JQ('.region-content, .region-sidebar-first').equalHeights();
		}

		else {
			return false;
		}
	}
}
