<?php
session_start();
$_SESSION['username']=$_POST['name'];
$_SESSION['pass']=md5($_POST['password']);
if($_SESSION['username']&&$_SESSION['pass'])
{
$conn=mysqli_connect("localhost","root","");
 if(!$conn){
             die("Connection Failed".mysqli_connect_error());
           }
 mysqli_select_db($conn,"member");
 $sql="SELECT * FROM login WHERE Firstname='".$_SESSION['username']."' and Password='".$_SESSION['pass']."'";
 $query=mysqli_query($conn,$sql);
 
 $numrows=mysqli_num_rows($query);
 if($numrows!==0)
 {
   $row=mysqli_fetch_assoc($query);
   $dbu=$row['Firstname'];
   $dbp=$row['Password'];

  if($_SESSION['username']==$dbu&&$_SESSION['pass']==$dbp)
  {
   $_SESSION['id']=$row['id'];
   header("location:crt.html");
  }
  
 }
 else
 {
  echo "Incorrect User-name OR Password.";
 }
}
else
{
 echo"Please Enter User-name and Password.";
}
mysqli_close($conn);
?>