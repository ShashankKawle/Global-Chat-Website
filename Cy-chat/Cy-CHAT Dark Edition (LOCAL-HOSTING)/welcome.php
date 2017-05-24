<?php
session_start();
if(!isset($_SESSION['username']))
{
header("location:index.html");
}
?>



<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="image/x-icon" href="headlg.jpg" rel="icon">
<title>
Welcome
</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="welcome/sidepannel.css" type="text/css">
<link rel="stylesheet" href="welcome/chat.css" type="text/css">

<script>
$(document).ready(function(){
    $("#Update_dpn").click(function(){
        $("#dpn").slideToggle();
        $("#dpn2").slideToggle();
    });
});
</script>

<script type="text/javascript">
function Delete(){
var del=confirm("Are you sure that you want to 'DELETE' your account ? \n Please Do not block this pop-up !");
if(del==true)
{
 popup();	
}else{}
}

function popup(){
 document.getElementById("pops").style.display="block";
}

function pop_hide(){
 document.getElementById("pops").style.display="none";
}

function about_me(){
 document.getElementById("info").style.display="block";
}

function info_hide(){
 document.getElementById("info").style.display="none";
}

function Drop(){
 document.getElementById("dpn").style.display="block";
 document.getElementById("dpn2").style.display="block";

}
function Drophide(){
 document.getElementById("dpn").style.display="none";
 document.getElementById("dpn2").style.display="none";

}
function update_ui(){
 document.getElementById("accup").style.display="block";
}
function update_ui_hide(){
 document.getElementById("accup").style.display="none";
}
function update_ai(){
 document.getElementById("acc").style.display="block";
}
function update_ai_hide(){
 document.getElementById("acc").style.display="none";
}
function eraseText(){
 document.getElementById("textMesType").value="";
}
</script>


</head>
<body style="background-image:url('welcome/pics/host_back.jpg')">

<div id="header">
<div>
<img src="s1.jpeg" width="200" height="120" alt="LOGO" style="border-radius:50px">
</div>
<h1   style="margin-bottom: 5px;">
CYBER-CHAT
</h1>
Time To CHAT
</div>		

<!--NAVIGATION BAR-->
<div class="navbar">
<ul class="navbar">
  <li class="navbar"><a href="index.html">Home</a></li>
  <li class="navbar"><a href="ourteam.html">Our Team</a></li>
  <li class="navbar"><a href="FAQ.html">FAQ</a></li>
  <li class="navbar"><a href="Feedback.html">Contact Us</a></li>
  <li class="navbar" style="float: right;"><a href="#about">About</a></li>
  <li class="navbar" style="float: right;"><a href="#" style="text-shadow: 1px 1px 0 #444;background-color: #000099;"><i>Welcome <?php echo $_SESSION['username'];?></i></a> </li>
</ul>
    </div>
<!--NAVIGATION BAR END-->
<b style="color:red">NOTE:</b><u style="color:white;">Users are Requested to use<a href="https://www.mozilla.org/en-US/firefox/new/"> Mozilla Firefox</a> Web Browser for better performance.</u><br>
<!--SIDE PANAL-->
<div id="sidepanal">
<ul>
<li><button class="actives" style="cursor:default;"><h3><?php echo $_SESSION['username'];?>'s Panel</h3></button></li>

<li><button id="Update_dpn">Update</button></li>
<ul style="list-style-type:none;">
<li><div id="dpn" class="dropdown" onclick="update_ui()"><b>Update User-Info.</b></div></li>
<li><div id="dpn2" class="dropdown" onclick="update_ai()"><b>Update Acc.-Info.</b></div></li>
</ul>
<li><button onclick="Delete()">Delete</button></li>
<li><button onclick="about_me()">About Me</button></li>
<form action="stg_logout.php">
<li><button type="submit">Logout</button></li>
</form>
</ul>
</div>
<!--SIDE PANAL END-->

<!--DELETE BUTTON POP-UP-->
<div id="pops">
<center>
<h2 class="Del_title">Delete an Account</h2>
</center>
<hr>
<form action="stg_Del.php" method="post">
<b>User name:</b><input type="text" name="un" placeholder="User-name" required><br>
<b>Password:</b><input type="password" name="password" placeholder="Password" required style="margin-left:9px;margin-top:5px;margin-bottom:5px;"><br>
<br>
<center>
<input type="submit" class="del_but"><input type="reset" class="del_but"><input type="button" class="del_but" onclick="return pop_hide()" value="Cancel">
</center>
</form> 
</div>
<!--DELETE BUTTON POP-UP END-->

<!--ABOUT ME BUTTON POP-UP-->
<div id="info">
<h2 class="abt_me">
Your Details are as follows:-
</h2>
<center>

<div class="code">
<code>
<?php
session_start();
$conn=mysqli_connect("localhost","root","");
 if(!$conn){
             die("Connection Failed".mysqli_connect_error());
           }
 mysqli_select_db($conn,"member");
 $sql="SELECT * FROM login WHERE Firstname='".$_SESSION['username']."' and Password='".$_SESSION['pass']."'";
 $query=mysqli_query($conn,$sql);
 $row=mysqli_fetch_row($query);
  echo  " id           :".$row[7]."<br>";
 echo  "  First Name   :".$row[0]."<br>";
   echo  "Middle Name  :".$row[1]."<br>";
   echo  "Last Name    :".$row[2]."<br>";
   echo  "Gender       :".$row[6]."<br>";
   echo  "Email        :".$row[4]."<br>";
   echo  "Contact No   :".$row[5]."<br>";
   echo  "Date-of-Birth:".$row[8]."<br>";
?>
</code>
</div>
   <h4>Your SERVER INFO:-</h4>
<div class="code">
<code>
<?php
   $s1=$_SERVER['REMOTE_ADDR'];
   $s2=$_SERVER['REMOTE_PORT'];
   $s3=$_SERVER['REMOTE_HOST'];
  echo "IP Address:".$s1."<br>";
   echo"Port   :".$s2."<br>";
 ?>
</code>
</div>
 <h4>Host SERVER INFO:-</h4>
<div class="code">
<code>
<?php
   $s4=$_SERVER['SERVER_SOFTWARE'];
   $s5=$_SERVER['SERVER_PROTOCOL'];
 
   echo"Software :".$s4."<br>";
   echo"Protocol :".$s5."<br>";
?>
</code>
</div>
<input type="button" class="del_but" onclick="return info_hide()" value="Back">
</center>
</div>
<!--ABOUT ME BUTTON POP-UP END-->

<!--UPDATE USER INFO POP-UP-->
<div id="accup">
<center>
<div class="heading">
<h2 class="accup_title">Update User Info</h2>
</div>
</center>
<br>
--------------------------------------------
<center>
<form action="stg_up_usr_inf.php" method="post">
<input name="mn" placeholder="New-Middle-name" type="text" class="style" required><br>
<input name="ln" placeholder="New-Last-name" type="text" class="style" required><br>
<input name="em" placeholder="New-Email" type="email" class="style" required><br>
<input name="con" placeholder="New-Contact" type="tel" class="style" required><br>
<input name="dob" placeholder="YYYY-DD-MM" type="date" class="style" required><br>
<input class="del_but" type="submit"><input class="del_but" type="reset"><input class="del_but" onclick="return update_ui_hide()" value="Cancel" type="button">
</form>
</center>
</div>
<!--UPDATE USER INFO POP-UP END-->

<!--UPDATE ACCOUNT INFO POP-UP-->
<div id="acc">
<center>
<div class="headstart">
<h2 class="acc">Update Account Info</h2>
</div>
</center>
<br>
-------------------------------------------------------------
<br>
<form action="stg_up_acc_inf.php" method="post">
<b style="color:white;">User name:</b><input name="un" placeholder="New-User-name" required="" type="text"><br>
<b style="color:white;">Password:</b><input name="password" placeholder="New-Password" required="" style="margin-left:9px;margin-top:5px;margin-bottom:5px;" type="password"><br>
<br>
<center>
<input class="del_but" type="submit"><input class="del_but" type="reset"><input class="del_but" onclick="return update_ai_hide()" value="Cancel" type="button">
</center>
</form>
</div>
<!--UPDATE ACCOUNT INFO POP-UP END-->

<!--CHAT CONTAINER LAYOUT-->
<div class="chat_container">
<center>
<div class="chat_header">
<p style="margin:0px;height: 7%;padding-top: 2.5%;padding-left: 3%" align="left">Live Chat Here</p>
</div>
<div class="chat_messages_display" id="textMesDisp">
<iframe src="Display.php" style="width:95%;height:100%;border:none;"></iframe>
</div>
<div class='chat_footer'>
<form action="stg_store.php" method="post">
<input type="text" class="chat" placeholder="Enter Your Message" name="textMesType">
<button type="submit" class="sent" id="send5">
>>
</button>
<button class="sent" type="reset">
CE
</button>
</form>
</div>
</center>
</div>
<!--CHAT CONTAINER LAYOUT END-->

</body>
</html>	