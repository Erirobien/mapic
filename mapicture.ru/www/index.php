<!DOCTYPE html>
<html >
<head>
    <!--meta charset="UTF-8"-->
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Главная</title>
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
}
#content{
    width: 100%;
    height: 100%;
    background-color:rgb(218, 198, 171);
    padding-bottom: 50px;
}
#search{
    padding-top:20px;
    display: block;
    height: 70px;
    width: 85%;
    float:right;
    background-color: rgb(146, 130, 105);
}
input{
	font-size: 110%;
}
form{
    display:block;
    float:right;
    margin-right:10%;
}
.location{
    width:400px; 
    height:300px; 
    margin:0 auto; 
    display:block;
}
.imglocation{
    width:80%; 
    height:75%;
    }
</style>
<?include 'inc/header.php'?>
    <div id="main">
<?include 'inc/aside.php'?>
        <div id="search">
                <form name="search" method="post" action=".php">
                            <input type="search" name="" placeholder="Поиск"/>
                                    <button type="submit">Найти</button>
                </form>
        </div>
        <div id="content">
            

<? include 'db.php';
 $sql=mysql_query("SELECT * FROM `locations`");

 while($row=mysql_fetch_array($sql)){

?>

  <div class="location" style="float:left;">
  <a href="#">
  <? echo'<img class="imglocation" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';?>
    <span size="2"><? echo $row['name']; ?></span>
  </div>
  
<?}?>
        
        </div>
    </div>
<?include 'inc/footer.php'?>
</body>
</html>
