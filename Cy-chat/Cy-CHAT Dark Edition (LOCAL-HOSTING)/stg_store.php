<?php
session_start();
$conn=mysqli_connect("localhost","root","");
if(!conn)
{
         die("Connection Failed.".mysqli_connect_error());
}
mysqli_select_db($conn,"member")or die("Database not found");
$mess=$_POST['textMesType'];
$sid=$_SESSION['id'];
$snam=$_SESSION['username'];
$sql="INSERT INTO g_chat(mid,id,username,gmess) VALUES('','$sid','$snam','$mess')";
mysqli_query($conn,$sql)or die("ERROR");
mysqli_close($conn);
header("location:welcome.php");

?>