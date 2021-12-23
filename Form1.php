<?php

if (isset($_POST['SEND MESSAGE'])){
$name = $_POST['Name'];
$subject = $_POST['subject'];
$mailfrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "mohawkan552@gmail.com";
$headers = "From: ".$mailfrom;
$txt = "You have recieved an email from ".$name.".\n\n".$message;

mail($mailto, $subjest, $txt, $headers);
head("Location : index.php?mailsend");
}