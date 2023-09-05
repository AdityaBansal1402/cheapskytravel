<?php
   $name = $_POST['fname'] . ' ' . $_POST['lname'];;
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $title = $_POST['subject'];
   $comments = $_POST['comments'];
   
  $to = 'dkmahtog@gmail.com, dkmahtog@gmail.com';  
  // $to = 'dkmahtog@gmail.com'; 
   $subject = 'User Request From skyhyglobal';
   // message
  $message = '<html><head><title>Enquiry from skyhyglobal</title></head>
   <body>
   <p>User Detail</p>
   <table width="25%" style="border:1px solid #ccc;">
   
     <tr>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">Subject: </td>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">'.$title.'</td>
	 </tr>
     <tr>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">Name: </td>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">'.$name.'</td>
	 </tr>
	 <tr>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">Email: </td>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">'.$email.'</td>
	 </tr>
	 <tr>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">Phone: </td>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">'.$phone.'</td>
	 </tr> 
	<tr>
	<td style="border: 1px solid #ccc;padding: 5px 15px;">Comments & Questions: </td>
	 <td style="border: 1px solid #ccc;padding: 5px 15px;">'.$comments.'</td>
	 </tr> 
	
    
	 </table>
   </body>
 </html>';
   
   // To send HTML mail, the Content-type header must be set
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
   // Additional headers
   //$headers .= 'To: Tourcruiser <xyz@gmail.com>' . "\r\n";
   $headers .= 'From: Tourcruiser <dkmahtog@gmail.com>' . "\r\n";
   
   // Mail it
   mail($to, $subject, $message, $headers);
   header('Location:https://www.skyhyglobal.com/success');
   ?>


