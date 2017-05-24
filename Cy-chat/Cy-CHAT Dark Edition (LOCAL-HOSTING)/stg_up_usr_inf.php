<?php
// Start the session
session_start();
$sess=$_SESSION['id'];
$middlename=$_POST['mn'];

$lastname=$_POST['ln'];
$email=$_POST['em'];

$mob=$_POST['con'];

$dob=$_POST['dob'];

$conn=mysqli_connect("localhost","root","");

if(!conn){
         
die("Connection Failed.".mysqli_connect_error());
         
}

mysqli_select_db($conn,"member") or die("Database Not found");
$pql="UPDATE login SET Middlename='$middlename',Lastname='$lastname',Email='$email',Contact='$mob',Dob='$dob' WHERE id='$sess'";
if(mysqli_query($conn,$pql))
{

 echo"Profile Updated SUCESSFULLY";

}
else{

 echo"Error while upadting account.<br>";

}

mysqli_close($conn);
?>
