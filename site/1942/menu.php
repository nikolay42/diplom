<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 


<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title> 

 </title> 

   <link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />
   <link rel='stylesheet' type='text/css' href='css/index.css' /> 
   <link rel='stylesheet' type='text/css' href='css/menu.css' media="screen"/> 
   <script type='text/javascript' src='js/jquery-ifixpng.min.js'></script>
</head> 
 
<body> 
    <br>


			<center> 
            <div id='head'> 
                <div id='head-m' align="left"> 
				<table><tr>  <td width="50">&nbsp;&nbsp;&nbsp; </td> <td width="450"> <h1>  <?php include "name.php"; echo $title;?>  </h1> 
								<h4> <?php 
require "dbconnect.php";
$namec=mysql_query("select texthead from contact where namec!='0' limit 1");
while($sod_mas1=mysql_fetch_row($namec))
{
$title1=$sod_mas1[0];
echo $title1;
};
?> </h4>
				</td> <td width="150">&nbsp;&nbsp;&nbsp; </td> <td>

<form   method='post' name='addusl' action='admin/index.php'>
<INPUT TYPE='hidden' NAME='addusl'>
<input type='image' src='image/logo.png'  WIDTH='120' HEIGHT='120' >
</form>
 </td> 

<td width="150">
 <table align="center" cellspacing="0" cellpadding="0" border="0"  width="">
<tr>
<tr> 
	<form method="post" action="auth.php" > <center> <table align=center class="text">
	<tr>
	<td ><font color="#D0171C"><center>Авторизация
</td>
</tr>
	             <tr> 
              <td><center>Логин:</td>
                 </tr>
			  <tr>
			  <td><input type="text" name="login" class="text"></td>
			    </tr>
				 <tr>
              <td><center>Пароль:</td>
			  </tr>
			 
			  <tr> 
              <td><input type="password" name="password" class="text"></td>
			  </tr>
           <tr> 
              <td >
                 <center>
				  <input type="submit" src=image/vxod.png alt="" name="parol"  width="99" height="33" border="0" value="Вход"></form>  </td>
            </tr>
         </table>

 </td> 
</tr>  </table>
				 
 
                                          


									    
                </div> 

            </div> 
</head>
<body>
    

<html>
    <div id="menu">
		<ul class="menu">
			<li>
				<a href='index.php' class='c1'>Главная</a>
				
			<li>
				<a href='imageall.php' class='c1'>Каталог </a>
			
			</li>

				<li>
				<a href='news.php' class='c4'>Информация</a>
						</li>

<li>
				<a href='cart.php' class='c1'>Корзина</a>
			
			</li>	
     </div>


 <br>

</body> 
</html>