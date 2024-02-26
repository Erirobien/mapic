<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="windows-1251">
        <title>Вход</title>
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
    background-color: rgb(218, 202, 181);
}
#footer{
    background-color: rgb(69, 104, 119);
    display: inline-block;
    height: 250px;
	width: 100%;
    vertical-align: bottom;
}
p{
    margin-top: 0;
    margin-left: 17%;
    margin-bottom: 22px;
    color:  rgb(88, 83, 68);
    font-size: 130%;
}

.content{
    margin-top: 60px;
    margin-left: 40%;
    width: 345px;
    height: 400px;
    display: block;
    border: 1px solid rgb(88, 83, 68);
    background-color: rgb(218, 198, 171);
}
h2{
    font-size: 180%;
    color:  rgb(77, 71, 55);
    text-align: center;
}
input{
    font-family: 'Times New Roman', Times, serif;
    font-size: 100%;
    width: 200px;
    outline: none;
}
button{
    display: block;
    margin-top: 60px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 110%;
    width:  210px;
    background-color: rgb(88, 116, 119);
	color:rgb(218, 212, 141) ;
}
main.a{
    font-family: 'Times New Roman', Times, serif;
    font-size: 130%;
    width: 163px;
	color:rgb(66, 86, 88);
    text-decoration-line: underline;
}
.left{
    display: block;
    float: left;
    width:  50%;
    height: 310px;
}
.right{
    display: block;
    float: right;
    width:  50%;
    height: 310px;
}
        </style>
        <?include 'inc/header_reg.php'?>
        <div id="main">
            <div class="content">
                <h2>Вход</h2>
                <form action="login.php" method="post">
                    <p>Логин<br>
                    <input type="text" placeholder="Введите логин"></p>
                    <p>Пароль<br>
                    <input type="password" placeholder="Введите пароль"></p>
                    <p><button>Войти</button></p>
                    <p><a href="registration.php">Зарегистрироваться</a></p>
                </form>
            </div>
        </div>
        <div id="footer"></div>
    </body>
</html>