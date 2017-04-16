 //что бы вызвать скрипт добавляем теги скрипта а внутрь вставляем $("#ajax-contact-form").submit(proverka(1));
 //где номер соответствует номерам ajax-contact-form,inp,note,fields
      var proverka = function(x){  

       	$("#ajax-contact-form"+(x)).submit(function() {
       		
		var str = $(this).serialize();
		//Error Count
		var error_count=0;
		
		//Regex Strings
		var str_regex = /phone=$/;
		
			//Test Username
			if(str_regex.test(str)) {
				$("#inp"+(x)).popover('show');
				error_count += 1;
			}
			
			
			var str_regex1 = /phone=&/;
		
			//Test Username
			if(str_regex1.test(str)) {
				error_count += 1;
				$("#inp"+(x)).popover('show');
			}
			//No Errors?
			if(error_count === 0) {
				$.ajax({
				type: "POST",
				url: "mail.php",
				data: str,
				});
			  var noreply = 1;
			  $("#win"+(x)).popover('show');
			  $("#inp"+(x)).val('');
			  yaCounter24321856.reachGoal('targetlp');
			  
			 			}
			else {
			}
			
		return false;
	});
}

