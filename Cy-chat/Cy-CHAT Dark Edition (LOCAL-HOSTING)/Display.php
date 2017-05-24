<?php
session_start();
?>
<html>
<head>
<meta http-equiv="refresh" content="2">
<link rel="stylesheet" type="text/css" href="welcome/chat.css">
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","");
 if(!$conn){
             die("Connection Failed".mysqli_connect_error());
           }
mysqli_select_db($conn,"member");
$sql="SELECT * FROM g_chat ORDER BY mid desc";
$query=mysqli_query($conn,$sql);
if(!$query)
{
	printf("ERROR %s\n",mysqli_error($conn));
	exit();
}
$i=1;
while($row=mysqli_fetch_assoc($query))
{
	if($row["id"]==$_SESSION['id'])
	{
		echo"<div align=right><div class=sent align=right><h7>".$row['username']." says:</h7><br><hr>".$row['gmess']."</div><img src='iframe/pics/sender.png'></div>";
	}
	else
    {
        echo"<div align=left><img src='iframe/pics/receiver.png'><div class=rec align=left><h7>".$row['username']." says:</h7><br><hr>".$row['gmess']."</div></div>";
    }
    $i++;
    if($i==30)
    {
        break;
    }
}
?>
</body>
</html>