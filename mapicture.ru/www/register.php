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
	echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите логин">Введите логин!</font>';	
}
elseif (!preg_match("/^\w{3,}$/",$_POST['login'])){
echo '<br><font color="red"><img border="0" src="error.gif" alt="В поле "Логин" введены недопустимые символы!">
В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';}
	elseif(empty($_POST['password'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите пароль!">Введите пароль!</font>';	
}

elseif (!preg_match("/\A(\w){6,20}\Z/",$_POST['password'])){
echo '<br><font color="red"><img border="0" src="error.gif" alt="Пароль слишком короткий!">
Пароль слишком короткий!Пароль должен содержать не менее 6 символов</font>';}
elseif(empty($_POST['repeatpass'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите подтверждение пароля!">Введите подтверждение пароля!
	</font>';}
	elseif($_POST['password']!=$_POST['repeatpass']){
	echo'<br><font color="red"><img border="0" src="error.gif" alt="Введенные пароли не совпадают!">Введенные пароли не совпадают!
	</font>';}
	elseif(empty($_POST['mail'])){
	echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите E-mail!">Введите E-mail!</font>';	
}

elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/",$_POST['mail'])){
echo '<br><font color="red"><img border="0" src="error.gif" alt="E-mail имеет недопустимый формат!">E-mail имеет недопустимый формат!
Например, name@gmail.com!</font>';}
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
		echo '<font="red"><img border="0" src="error.gif" alt="Пользователь с таким логином зарегистрирован!">
Пользователь с таким логином зарегистрирован!</font>';}
else{
	$query2=("SELECT id_user FROM users WHERE mail='$mail'");
	$sql=mysql_query($query2) or die(mysql_error());
	if(mysql_num_rows($sql)>0){
		echo '<font color="red"><img border="0" src="error.gif" alt="Пользователь с таким e-mail зарегистрирован!">
Пользователь с таким e-mail уже зарегистрирован!</font>';
	}
	else{
		$query="INSERT INTO users (login, password, mail, phone, name, s_name )
		VALUES ('$login','$mdPassword','$mail','$phone','$name','$s_name')";
		$result=mysql_query($query) or die(mysql_error());
		$id_user=mysql_insert_id();
	//	$add_my_page="INSERT INTO my_page (id_user)
	//	VALUES ('$id_user')";
	//	mysql_query($add_my_page);
		echo '<font color="green"><img border="0" src="ok.gif" alt="Вы успешно зарегистрировались!">
Вы успешно зарегистрировались!</font><br><a href="index.php">На главную</a>';
}
}
}
//}
?>