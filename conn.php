<?php 
$conn=@mysql_connect('localhost','admin','admin');
if (!$conn) {
	die("datebase connect error".mysql_error());
}
echo "login successfully";
mysql_select_db(taobao,$conn);
mysql_query("set character set'gbk'");
mysql_query("set name set'gbk'");

?>