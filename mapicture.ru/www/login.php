
<?/*
include 'db.php';


if (isset($_POST['login'])){
	$login=$_POST['login'];
	if($login==''){
		unset($login);
		exit("Введите пожалуйста логин!");
}}
if(isset($_POST['password'])){
	$password=$_POST['password'];
	if($password==''){
		unset($password);
		exit ("Введите пароль");
	}}
	$login= stripslashes($login);
	$login= htmlspecialchars($login);
	$password= stripslashes($password);
	$password= htmlspecialchars($password);
	
	$login=trim($login);
	$password=trim($password);
	$password=md5($password);//шифруем пароль
	$user= mysql_query("SELECT id_user FROM users WHERE login='$login' AND password='$password'");
	$id_user=mysql_fetch_array($user);
	if(!empty($id_user['id_user'])){
		exit("Извините, введенный вами логин или пароль неверный.");
	}
	else{
		$_SESSION['password']=$password;
	    $_SESSION['login']=$login;
		$_SESSION['id']=$id_user['id'];
		}
		
$login=$_SESSION['login'];
$password=$_SESSION['password'];
$id_user=$_SESSION['id_user'];
	echo "<meta http-equiv='Refresh' content='0;URL=my_page/index.php'>";
    */
?>