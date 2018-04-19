<?php 
		session_start();
?>
<?php
   require "../dbconnect.php";
setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());
if($_FILES["filename"]["size"] > 128000)
   {
echo ("Размер файла превышает 128 кбайт");
     exit;
   };
if(copy($_FILES["filename"]["tmp_name"],"C:/WebServers/home/localhost/www/vashmaster/image/".$ttt.$_FILES["filename"]["name"])) /* загружаем лого, если он есть  */
{
   $link=$ttt.$_FILES["filename"]["name"];
}
else /* если аватар не выбран пользователем, назначаем по умолчанию */
{
$link='1.png';
}
if(isset($_POST['addrazdel']))
{
$query1="insert into razdel (`namer`,`logor`,`tipr`) 
values ('".$_POST['namerazdel']."','$link','1')";
if(mysql_query($query1)) /* если запрос успешно произведен */
{
Header ("Location: menured.php");
}
else
{
echo "<p class='log'></p>Не получилось</p>";   
}
 } 
?> 


<!--скрипт удаления пользователя. пользователь не удаляется безвозвратно из таблицы, а только помечается как удаленный-->