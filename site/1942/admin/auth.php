<?php
session_start();
require "../dbconnect.php";
if(isset($_POST['parol'])) /*  если сработала форма ввода парол€ и логина*/
{
$res=mysql_query("SELECT idu, status FROM user WHERE login='".$_POST['login']."' AND password='".$_POST['password']."' AND udaluser=0"); /* выбираем из Ѕƒ номер и статус пользовател€ с таким логином и паролем */
if(mysql_num_rows($res))
{
while($prise_mas=mysql_fetch_row($res))
{
if ($prise_mas[1]==1) /* если статус равен 1 - значит, это администратор, едирект на страницу админа */
{
$_SESSION['var']="$prise_mas[0]";
Header ("Location: sprav1.php");
}
if ($prise_mas[1]==2)/* если статус равен 2 - значит, это модератор, едирект на страницу пользовател€ */
{ 
$_SESSION['moder']="$prise_mas[0]";
Header ("Location: ../moder/index.php");
}
if ($prise_mas[1]==3) /* если статус равен 3 - значит, это оператор, редирект на страницу диспетчера */
{
$_SESSION['operator']="$prise_mas[0]";
Header ("Location: ../operator/index.php");
}

}

}
else
{    //такого пользовател€ нет
echo "<center><br><br>¬ведены неверные логин или пароль<br><br> <span><a href='index.php'>ѕопробуйте еще раз</a></span> <br> или обратитесь к администратору системы<br>
";
}
}
?>

