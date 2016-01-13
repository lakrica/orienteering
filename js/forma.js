


	$(document).ready(function() {
	$('#register').click(function() {
   if ($('[value="own"]').is(':checked')) {
      $("#si").fadeIn('slow');
   } else {
     $("#si").fadeOut('fast');
   }
});
   });
	
	