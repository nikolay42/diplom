<html>
<title>  Необходима авторизация</title>
<head>

        <body BACKGROUND="image/bg.png">
<br>
<br>
			
<center>
<link rel='stylesheet' type='text/css' href='css/index.css' /> 

<div id='main' class='noifixpng'> 
  
            </div> 
			<center> 
            <div id='head'> 
                <div id='head-m'> 
                    <div id='head-i'> <br>
                        
                            <h2> <?php include "../name.php"; 
echo $title;
?></h2>  <br>
<img src="../image/logo.png" width="120" height="120" > 
              
                       
                    </div> 
                </div> 
            </div> 
 <div id='content'> 
		<div id='content1'>
		<table align="center" cellspacing="2" cellpadding="2" border="0"  width="926" bgcolor="">
<tr>
	<td colspan="3" align="center" class=""> 	<br>
<h2>Для доступа в защищенную часть необходима авторизация</h2>
		</td>
</tr>
<tr>
	<td bgcolor="#ffffcc"><center>Введите логин и пароль
</td>
</tr>
<tr>
	<td>
	<form method="post" action="auth.php" ><table align=center>
             
              <td>Логин:</td>
              <td><input type="text" name="login" class="text"></td></tr>

            <tr>
              <td>Пароль:</td>
              <td><input type="password" name="password" class="text"></td></tr>
            <tr>
              <td colspan=2>
                  <br><center>
				  <input type="submit"  name="parol"  width="99" height="33" border="0" value="Вход"></form>  </td>
            </tr>
         </table>
	
	</td>
	</tr>
	<tr>  <!--<td class="tr"><center><a href="loginadmin.php">Вход для администратора системы</a><br> </td>-->
	</tr>
</table>
</div>
</div>


  		
     
        </body>     
  
</html>
