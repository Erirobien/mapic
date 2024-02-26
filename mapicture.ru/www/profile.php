<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta charset="UTF-8"-->
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Профиль</title>
</head>
<body>
    <style>
html {
	font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
}
body{
    margin: 0px;
    
}
#main{
    display: inline-block;
    height: 1000px;
    width: 100%;
}
#content{
    width: 100%;
    height: 100%;
    background-color: rgb(215, 202, 185);
    padding-bottom: 50px;
}
.profile img{
    width: 240px;
    height: 300px;
}
.profile{
    margin-left: 45%;
}

</style>
    <?include 'inc/header.php'?>
    <div id="main">
    <?include 'inc/aside.php'?>
        <!--Профиль пользователя-->
        <div id="content">
            <table class="profile">
                <tr>
                    <td>
                        <img src="images/mountain-2.jpg">
                    </td>
                    <td> Имя Фамилия</td>
                </tr>
                <tr>
                    <td>
                        Xnjnjnjn
                    </td>
                    <td> gthrtя</td>
                </tr>
                <tr>
                    <td>
                        Xnjnjnjn
                    </td>
                    <td> gthrtя</td>
                </tr>
            </table>
        </div>
    </div>
    <?include 'inc/footer.php'?>
</body>
</html>
