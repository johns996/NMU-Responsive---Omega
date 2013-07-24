/*!
 * global NMU javascrips
 */

//set up another alias for jQuery to handle pages that include their own jQuery library
var JQ = jQuery.noConflict();

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


