/*!
 * global NMU javascrips
 */

//stuff to run after the DOM has loaded
jQuery(document).ready(function ($) {
	$('.region-content, .region-sidebar-first, .region-sidebar-second').equalHeights();
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

//make X number of elements and equal height
//jQuery('.GreenBox, .YellowBox').equalHeights();
jQuery.fn.equalHeights = function() {
	var currentTallest = 0;
	jQuery(this).each(function(){
		if (jQuery(this).height() > currentTallest) {
			currentTallest = jQuery(this).height();
		}
	});
	jQuery(this).css('min-height', currentTallest);
};





