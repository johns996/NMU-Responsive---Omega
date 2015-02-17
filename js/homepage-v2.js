/*!
 * homepage v2 javascripts
 */

var slideshowWrapper = '\
<div class="cycle-slideshow"\
     data-cycle-timeout="0"\
     data-cycle-log="false"\
     data-cycle-caption="#custom-caption"\
     data-cycle-caption-template="<h2>{{alt}}</h2><p>{{cycleTitle}}</p>">\
    <div id="custom-caption"></div>\
    <div class="cycle-pager"></div>\
</div>';

jQuery(document).ready(function($) {
	//debugger;

   function createSlideshow() {
		$("head").append('<script src="//malsup.github.com/jquery.cycle2.js"></script>\
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>\
				<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>');
		$("#node_newhome_full_group_main_wrapper").hide();
		$("#node_newhome_full_group_main_wrapper").before(slideshowWrapper);
		$('#custom-caption, .cycle-pager').hide();  //hide these elements so the main image does not bounce around on load
		var images = $("#node_newhome_full_group_main_wrapper img");
		var titles = $(".field-name-field-main-title .field-item");
		var text = $(".field-name-field-main-text .field-item");
		for( var i = 0; i < images.size(); i++ ) {
			images.get(i).setAttribute('alt', titles.get(i).innerHTML);
			images.get(i).setAttribute('data-cycle-title', text.get(i).innerHTML);
		}
		images.appendTo('.cycle-slideshow');
		$('.cycle-pager').show();  //cycle2 takes care of showing the caption, only need to display the pager again
   }

  createSlideshow();
});
