<?php
session_start();
$un=$_POST['un'];
$ps=md5($_POST['password']);
$conn=mysqli_connect("localhost","root","");
 if(!$conn){
             die("Connection Failed".mysqli_connect_error());
           }
if($_SESSION['username']==$un && $_SESSION['pass']==$ps)
{	
mysqli_select_db($conn,"member");
$sql="DELETE FROM login WHERE Firstname='".$_SESSION['username']."' and Password='".$_SESSION['pass']."'";
if(!mysqli_query($conn,$sql))
{
	echo"An unexpected Error has occured.Please try again later.";
}
else
{
session_destroy();	
echo "<center><h1>Your Account has been Deleted Successfully.</h1></center>";
}
}
else
{
echo "You Have Entered Incorrect User-name or Password";
}
mysqli_close($conn);
?>
