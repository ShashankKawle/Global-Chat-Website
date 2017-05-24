<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['msg'];
$headers='From:'.$email."\r\n";
$subject=$_POST['subject'];
$to="MAATS@shank96.netne.net";
$message=wordwrap($message,70);
$send=mail($to,$subject,$message,$headers);
if($send)
{
 echo "Your Meaasage Has Been Delivered Successfully!";
}
else
{
 echo "Failed To Deliver The Message......Sorry!";
} 
?>