<?php

$host="localhost";
$user="root";
$password="";
$dbname="mapicture";
/*$conn=mysqli_connect($host,$user,$password, $dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}else{
    echo "�����!";
}
*/
$db=mysql_connect($host,$user,$password);
mysql_select_db($dbname,$db)or die("������".mysql_error($db));
mysql_set_charset("UTF8");

?>