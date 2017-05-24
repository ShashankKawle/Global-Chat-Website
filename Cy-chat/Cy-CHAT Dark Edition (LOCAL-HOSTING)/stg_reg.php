<?php
$firstname=$_POST['fn'];
$middlename=$_POST['mn'];
$lastname=$_POST['ln'];
$password=md5($_POST['pass']);
$pwd=$_POST['pass'];
$gender=$_POST['gen'];
$mob=$_POST['con'];
$dob=$_POST['bday'];
$email=$_POST['eml'];

$conn=mysqli_connect("localhost","root","");
if(!conn){
         die("Connection Failed.".mysqli_connect_error());
         }
mysqli_select_db($conn,"member") or die("Database Not found");
$sql="SELECT * FROM login WHERE Firstname='$firstname' and Password='$password'";
$query=mysqli_query($conn,$sql);
$numrows=mysqli_num_rows($query);
if($numrows!==0)
{
 header("location:uae.html");
}
else
{

$email =filter_var($email, FILTER_SANITIZE_EMAIL);
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if(!$email)
{
header("location:crt.php");
}
$sender="MAATS@shank96.netne.net";
$subject=" ";
$headers='From:'.$sender."\r\n";
$msg="Thank You For Joining Us.......  Your User-Name: ".$firstname." Password:".$pwd;
$checksend=mail($email,$subject,$msg,$headers);
if($checksend==true)
 {
  $pql="INSERT INTO login(Firstname,Middlename,Lastname,Password,Email,Contact,Gender,id,Dob)VALUES('$firstname','$middlename','$lastname','$password','$email','$mob','$gender','','$dob')";
  if(mysqli_query($conn,$pql))
  {
   header("location:Newmem.html");
  }
   else
  {
   echo"Error for creating new account.<br>";
  }
 }
 else
 {
  header("location:crt.php");
 }
}
mysqli_close($conn);
?>

