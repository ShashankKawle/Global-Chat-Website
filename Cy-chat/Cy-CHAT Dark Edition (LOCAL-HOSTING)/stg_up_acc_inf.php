<?php
session_start();
$conn=mysqli_connect("localhost","root","") or die("Connection Failed");
mysqli_select_db($conn,"member") or die("Database Not found");
$newun=$_POST['un'];
$newpw=md5($_POST['password']);
$sql="SELECT * FROM login WHERE Firstname='$newun' and Password='$newpw'";
$query=mysqli_query($conn,$sql);
$numrows=mysqli_num_rows($query);
if($numrows!==0)
{
 header("location:uae.html");
}
else
{
 $id=$_SESSION['id'];
 $sql="UPDATE login SET Firstname= '$newun', password='$newpw' WHERE id='$id'";

 if(mysqli_query($conn,$sql))
 {
  $pql="UPDATE g_chat SET username= '$newun' WHERE id='$id'";
  if(mysqli_query($conn,$pql)) 
  { 
   echo "Update Successful.";
   $_SESSION['username']=$newun;
   $_SESSION['pass']=$newpw;
  } 
 }
 else
 {
   echo "Update Failed.";
 }
}
mysqli_close($conn);
?>