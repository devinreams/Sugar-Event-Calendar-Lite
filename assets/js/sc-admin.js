jQuery(document).ready(function($) {
	if($('.sc_meta_box_row .sc_datepicker').length > 0 ) {
		var dateFormat = 'mm/dd/yy';
		$('.sc_datepicker').datepicker({dateFormat: dateFormat});
	}	
});