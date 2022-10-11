<?php
 
   $name = $_POST['name'];
   $mailForm = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $email_form = 's89j@live.se';
   $email_subject = "New Form Submission from sofiesportfolio";
   $headers = "Form: sofiesportfolio".$mailFrom;
   $email_body = "User Name: $name. \n".
                 "User Email: $mailFrom. \n".  
                 "User Subject: $subject. \n". 
                 "User Message: $message. \n.";

   $to = "s89j@live.se";
   $headers = "Form: $email_form \r\n";
   mail($to,$email_subject,$email_body,$headers);
   header("Location:index.html");

?>