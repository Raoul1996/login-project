<?php 
error_reporting(0);
session_start();
$var =isset($_GET['action'])?$_GET['action']:'';
if ($var =='logout') {
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo 'logout successfully,','<br />','<a href="login.html">登录</a>';
}
//login
if (!isset($_POST['submit'])) {
	echo "illegal login";
}
$username=trim($_POST[l_name]);
$password=trim($_POST[l_password]);
include ("conn.php");
$sql="select l_id form logintable where l_name="."'$username'"." and l_password="."'$password' ";
$result = mysql_fetch_array(mysql_query($sql));
echo $result;
if ($result) {
  $_SESSION['username']=$username;
  $_SESSION['userid']=$result[l_id];
  echo $username ,"welcome!",'<br/>';
  echo ' <a href="login.php?action=logout">click here to logout</a> '; 
}else{
  exit('<a href="javascript:history.back(-1);">illegal sign up! please click here to back</a>');
}
//I think I should write down something......
//It's the first time that I do this page about how to link the database and how to login a website.
//It seems to easy,but the truth isn't like what we think.
//I use about 8 hours to do it.....and I have know the importance of spelling....
//be carful.....
//please decrease the spelling error....
?>
