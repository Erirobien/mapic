<!DOCTYPE html>
<html lang="en">
<head>
    <!--meta charset="UTF-8"-->
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>���������� �������</title>
	  <!--link rel="stylesheet" type="text/css" href="style.css"/-->
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
.content{
    margin-top: 60px;
    margin-right: 8%;
    width: 70%;
    height: 400px;
    display: block;
    float:right;
    border: 1px solid rgb(88, 83, 68);
    background-color: rgb(218, 198, 171);
}
p{
    margin-top: 0;
    margin-left: 17%;
    margin-bottom: 22px;
    color:  rgb(88, 83, 68);
    font-size: 130%;
}

h2{
    font-size: 180%;
    color:  rgb(77, 71, 55);
    text-align: center;
}
input{
    font-family: 'Times New Roman', Times, serif;
    font-size: 100%;
    width: 300px;
    outline: none;
}
button{
    display: block;
    margin-top: 60px;
    margin-left: 20%;
    font-family: 'Times New Roman', Times, serif;
    font-size: 110%;
    width:  230px;
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
<?include 'inc/header.php'?>
    <div id="main">
<?include 'inc/aside.php'?>
            <div class="content">
                <h2>���������� �������</h2>
                <form action="add_location_db.php" method="post">
                    <div class="left">
                        <p>��������<br>
                        <input type="text" placeholder="������� ��������" name="name"></p>
                     <p>������<br>
                        <input type="text" placeholder="������� ������" name="phone"></p>
                    <p>�������<br>
                        <input type="text" placeholder="������� �������" name="mail"></p>
                </div><div class="right">
                    <p>�����<br>
                        <input type="text" placeholder="������� �����" name="login"></p>
                   
                    <p>��� �������<br>
                    <input type="password" placeholder="������� ������" name="type" ></p>
                    <p>���������<br>
                        <input type="text" placeholder="������� " name="mail"></p>
                    <p>���� �������<br>
                    <input type="file" name="file">
                    <p>��������<br>
                    <input type="text" placeholder="������� ������" name="description" ></p>
                </div>
                    <p><button>������������������</button></p>
                </form>
            </div>
    </div>
<?include 'inc/footer.php'?>
</body>
</html>
