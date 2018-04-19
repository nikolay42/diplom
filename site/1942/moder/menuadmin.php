<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 


<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title> 
<?php include "name.php"; 
echo $title;
?>
 </title> 

   <link rel="stylesheet" media="screen" type="text/css" href="../css/style.css" />
   <link rel='stylesheet' type='text/css' href='../css/index.css' /> 
   <link rel='stylesheet' type='text/css' href='../css/menu.css' media="screen"/> 
   <script type='text/javascript' src='../js/jquery-ifixpng.min.js'></script>
</head> 
 
<body> 
    <br>
<div id='main' class='noifixpng'>            </div> 

			<center> 
            <div id='headmoderator'> 
                <div id='head-madmin'> 
                    <div id='head-i'> 
					
				<table width="800" > <tr> <td align="left" width="450"><!--<img src="../image/logo.png" height="64" width="64">  -->
				
				<?php 
require "../dbconnect.php";
$namec=mysql_query("select namec from contact where namec!='0' limit 1");
while($sod_mas1=mysql_fetch_row($namec))
{
echo $sod_mas1[0];
};
?>  
<?php 
require "../dbconnect.php";
$query1="SELECT nameuser
FROM user
WHERE  idu='{$_SESSION['moder']}' ";
$res_id=mysql_query($query1);
if(mysql_query($query1))
while($sod_mas=mysql_fetch_row($res_id))
{
echo "<div class='log'> <strong>Вы вошли как:</strong> <em>$sod_mas[0]</em></div>";
}
                   
?>    </td> <td align="right" width="600"> <img src="../image/moder.png" width="80" height="80" alt="меню администратора">
<h4> Панель модератора </h4> </td> </tr>	
				<tr> <td> </td> <td> </td> </tr>
				</table>
					

  <br>                                              
 

                    </div> 
									    
                </div> 

            </div> 
</head>
<body>
    

<html>
    <div id="menu">
		<ul class="menu">
			
			<li>
				<a href='index.php' class='c1'>Заказы</a>
				<ul class="submenu">
					<li><a href='index.php'>Поступившие</a></li>
		<li><a href='sprav2.php'>Обработанные  </a></li> 
		<li><a href='sprav3.php'>Архив  </a></li> 
			<li><a href='sprav4.php'>Удаленные  </a></li> 
<li><a href='sprav5.php'>Удаленные  пользователями</a></li> 
				</ul>
			
			</li>
<li>
				<a href='imagered.php' class='c1'>Товары</a>
				<ul class="submenu">	
<li><a href='otziv.php'>Отзывы </a></li>
					<li><a href='downloadimage.php'>Добавление</a></li>
					<li><a href='imagered.php'>Редактирование </a></li>
				</ul>
  			</li>
			<li>
				<a href='modeli.php' class='c1'> Справочники </a>
					<ul class="submenu">

						<li><a href='model.php'>Добавление категорий </a></li>
<li><a href='podkat.php'>Добавление подкатегорий </a></li>
						<li><a href='modeli.php'>Список категорий </a></li>
						<li><a href='vendor.php'>Производители </a></li>

<li><a href='spisusl.php'>Список услуг </a></li>
				</ul>
  			</li>
						
<li>
				<a href='../index.php' class='c4'>Выход</a>
			</li>
     </div>


 <br>

</body> 
</html>