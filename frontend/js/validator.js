 $("#sform").validate({
     rules: {
         email: {
             required: true
         },
         username: {
             required: true
         },
         contact: {
             number: true,
             minlength: 9
         },
         password: {
             minlength: 2
         }
     },
     messages: {

         email: {
             required: 'Enter valid email '
         },
         username: {
             required: 'Enter username '
         },
         contact: {
             required: 'Enter Contact Number'
         },
         password: {
             required: 'Enter Password'
         }
     }
 });