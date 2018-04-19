<?php
session_start();
require "dbconnect.php";
if(isset($_POST['parol'])) /*  если сработала форма ввода пароля и логина*/
{
$res=mysql_query("SELECT idu  FROM userreg WHERE email='".$_POST['login']."' AND nomzak='".$_POST['password']."'"); /* выбираем из БД номер и статус пользователя с таким логином и паролем */
if(mysql_num_rows($res))
{
while($prise_mas=mysql_fetch_row($res))
{
$_SESSION['usertovar']="$prise_mas[0]";
Header ("Location: user/index.php");
}
}
else
{    //такого пользователя нет
echo "<center><br><br>Введены неверные логин или пароль<br><br> <span><a href='index.php'>Попробуйте еще раз</a></span> <br> или обратитесь к администратору системы<br>
";
}
}
?>
