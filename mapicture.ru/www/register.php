<?php

include_once('db.php');
/*
$login = $_POST['login'];
$password = $_POST['password'];
$repeatpass=$_POST['repeatpass'];
$mail =$_POST['mail'];
$phone=$_POST['phone'];
$name=$_POST['name'];
$s_name=$_POST['s_name'];

*/
//if (isset($_POST['submit'])){
	    if(empty($_POST['login'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="������� �����">������� �����!</font>';	
}
elseif (!preg_match("/^\w{3,}$/",$_POST['login'])){
echo '<br><font color="red"><img border="0" src="error.gif" alt="� ���� "�����" ������� ������������ �������!">
� ���� "�����" ������� ������������ �������! ������ �����, ����� � �������������!</font>';}
	elseif(empty($_POST['password'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="������� ������!">������� ������!</font>';	
}

elseif (!preg_match("/\A(\w){6,20}\Z/",$_POST['password'])){
echo '<br><font color="red"><img border="0" src="error.gif" alt="������ ������� ��������!">
������ ������� ��������!������ ������ ��������� �� ����� 6 ��������</font>';}
elseif(empty($_POST['repeatpass'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="������� ������������� ������!">������� ������������� ������!
	</font>';}
	elseif($_POST['password']!=$_POST['repeatpass']){
	echo'<br><font color="red"><img border="0" src="error.gif" alt="��������� ������ �� ���������!">��������� ������ �� ���������!
	</font>';}
	elseif(empty($_POST['mail'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="������� E-mail!">������� E-mail!</font>';	
}

elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/",$_POST['mail'])){
echo '<br><font color="red"><img border="0" src="error.gif" alt="E-mail ����� ������������ ������!">E-mail ����� ������������ ������!
��������, name@gmail.com!</font>';}
else{
    $login = $_POST['login'];
    $password = $_POST['password'];
	$mdPassword=md5('password');
    $repeatpass=$_POST['repeatpass'];
    $mail =$_POST['mail'];
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    $s_name=$_POST['s_name'];
	
	$query=("SELECT id_user FROM users WHERE login='$login'");
	$sql=mysql_query($query) or die(mysql_error());
	
	if (mysql_num_rows($sql)>0){
		echo '<font="red"><img border="0" src="error.gif" alt="������������ � ����� ������� ���������������!">
������������ � ����� ������� ���������������!</font>';}
else{
	$query2=("SELECT id_user FROM users WHERE mail='$mail'");
	$sql=mysql_query($query2) or die(mysql_error());
	if(mysql_num_rows($sql)>0){
		echo '<font color="red"><img border="0" src="error.gif" alt="������������ � ����� e-mail ���������������!">
������������ � ����� e-mail ��� ���������������!</font>';
	}
	else{
		$query="INSERT INTO users (login, password, mail, phone, name, s_name )
		VALUES ('$login','$mdPassword','$mail','$phone','$name','$s_name')";
		$result=mysql_query($query) or die(mysql_error());
		$id_user=mysql_insert_id();
	//	$add_my_page="INSERT INTO my_page (id_user)
	//	VALUES ('$id_user')";
	//	mysql_query($add_my_page);
		echo '<font color="green"><img border="0" src="ok.gif" alt="�� ������� ������������������!">
�� ������� ������������������!</font><br><a href="index.php">�� �������</a>';
}
}
}
//}
?>