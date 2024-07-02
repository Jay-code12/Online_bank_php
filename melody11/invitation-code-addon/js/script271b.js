jQuery(document).ready(function(){
	jQuery('.datepicker').datepicker({
		dateFormat : 'mm-dd-yy'
	});

	ToggleCustomFieldIn();

    function ToggleCustomFieldIn(isInit){

        var isExisting = jQuery("#field_custom_existing_in").is(":checked");
        show_element = isExisting ? "#field_custom_field_name_select_in" : "#field_custom_field_name_text_in"
        hide_element = isExisting ? "#field_custom_field_name_text_in"  : "#field_custom_field_name_select_in";

        var speed = isInit ? "" : "";

        jQuery(hide_element).hide(speed);
        jQuery(show_element).show(speed);
    }

});