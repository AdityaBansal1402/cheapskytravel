//GLOBAL CONFIGURATION FOR SCROLL ANIMATIONS

$("#cForm2").validate({
		rules: {
			ftname:{
				required:true,
				minlength:3,
				maxlength:30,
				},
			ftemail:{
				required:true,
				email:true,
				},
			fttitle:'required',
			ftmsg:{
				required:true,
				maxlength:500,
				},
				
		},
		 messages: {
			ftname:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				minlength: "<span class='text-danger'>*This field should be atleast 3 chars ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 15 chars only.</span>",
				},
			ftemail:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				email: "<span class='text-danger'>*Please enter your valid email Id ?</span>",
				},
			fttitle: "<span class='text-danger'>*This field is required ?</span>", 
			//ftmsg: "<span class='text-danger'>*This field is required ?</span>", 
			ftmsg:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 500 chars only.</span>",
				},
		},
	submitHandler: function(form) {
	 $("#FormModalPopupContactMsg").html('<center><img src="assets/images/loader.gif" height="" width=""/></center>');    

		function ajaxrequest(){ 
			$.ajax({
				url: form.action,
				type: form.method,
				cache: false,
				data: $(form).serialize(),
				success: function(data)
				 {    // alert(data);
					 if(data)
						  { 
							 $("#FormModalPopupContactMsg").html(data);  
						  }  
					//window.location.href= "/thankyou.php";		   
				}            
			});
		   
		} 
	setTimeout(ajaxrequest, 5000);
    }

});


$("#cForm3").validate({
		rules: {
			fname:{
				required:true,
				minlength:3,
				maxlength:15,
				},
			lname:{
				required:true,
				minlength:3,
				maxlength:15,
				},
			email:{
				required:true,
				email:true,
				},
			phone:{
				required:true,
				number:true,
				minlength:10,
				maxlength:15,
				},
			subject:'required',
			comments:{
				required:true,
				maxlength:500,
				},
				
		},
		 messages: {
			fname:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				minlength: "<span class='text-danger'>*This field should be atleast 3 chars ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 15 chars only.</span>",
				},
			lname:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				minlength: "<span class='text-danger'>*This field should be atleast 3 chars ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 15 chars only.</span>",
				},
			email:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				email: "<span class='text-danger'>*Please enter your valid email Id ?</span>",
				},
			phone:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				number: "<span class='text-danger'>*phone number should be digits ?</span>",
				minlength: "<span class='text-danger'>*Your phone number should be atleast 10 digits ?</span>",
				maxlength: "<span class='text-danger'>*Your phone number Max 15 digits ?</span>",
				},
			subject: "<span class='text-danger'>*This field is required ?</span>", 
			comments:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 500 chars only.</span>",
				},
			
		},
	submitHandler: function(form) {
	 $("#FormContactMsg").html('<center><img src="assets/images/loader.gif" height="" width=""/></center>');    

		function ajaxrequest(){ 
			$.ajax({
				url: form.action,
				type: form.method,
				cache: false,
				data: $(form).serialize(),
				success: function(data)
				 {    // alert(data);
					 if(data)
						  { 
							 $("#FormContactMsg").html(data);  
						  }  
					//window.location.href= "/thankyou.php";		   
				}            
			});
		   
		} 
	setTimeout(ajaxrequest, 5000);
    }

});

$("#cForm").validate({
		rules: {
			fullname:{
				required:true,
				minlength:3,
				maxlength:30,
				},
			emailid:{
				required:true,
				email:true,
				},
			phoneno:{
				required:true,
				number:true,
				minlength:10,
				maxlength:15,
				},
			hsubject:'required',
			hcomments:{
				required:true,
				maxlength:500,
				},
				
		},
		 messages: {
			fullname:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				minlength: "<span class='text-danger'>*This field should be atleast 3 chars ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 30 chars only.</span>",
				},
			emailid:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				email: "<span class='text-danger'>*Please enter your valid email Id ?</span>",
				},
			phoneno:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				number: "<span class='text-danger'>*phone number should be digits ?</span>",
				minlength: "<span class='text-danger'>*Your phone number should be atleast 10 digits ?</span>",
				maxlength: "<span class='text-danger'>*Your phone number Max 15 digits ?</span>",
				},
			hsubject: "<span class='text-danger'>*This field is required ?</span>",  
			hcomments:{
				required: "<span class='text-danger'>*This field is required ?</span>",
				maxlength: "<span class='text-danger'>*This field with max 500 chars only.</span>",
				},
		}, 
	submitHandler: function(form) {
	 $("#FormCformErrIndexMsg").html('<center><img src="assets/images/loader.gif" height="" width=""/></center>');    

		function ajaxrequest(){ 
			$.ajax({
				url: form.action,
				type: form.method,
				cache: false,
				data: $(form).serialize(),
				success: function(data)
				 {    // alert(data);
					 if(data)
						  { 
							 $("#FormCformErrIndexMsg").html(data);  
						  }  
					//window.location.href= "/thankyou.php";		   
				}            
			});
		   
		} 
	setTimeout(ajaxrequest, 5000);
    }

});



