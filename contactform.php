<?php
 
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $subjekt = $_POST['subjekt'];
   $mailfrom = $_POST['mail'];
   $message = $_POST['message'];
 
   $mailTo = "s89j@live.se";
   $headers = "Form: ".$mailfrom;
   $txt = "You have recived an e-mail from".$name."./n/n".$message;
 
   mail($mailTo, $subjekt, $txt, $headers);
   header("Location: index.html");
}



?>