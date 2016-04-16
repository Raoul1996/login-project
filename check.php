<?php 
// 数据库连接测试
function space($j){
	for ($i=0; $i < $j; $i++) { 
		echo '<br />';
	}
}
$link = mysqli_connect('localhost','admin','admin','taobao');

if (!$link) {
	die('Could not connect to MySql:'.msql_error());

}else{
	echo "Conection OK"; mysql_close($link);
}
space(6);
echo "string";

//the error ..........I don't know how to deal it.......

?>