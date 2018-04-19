<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['udaltel'])) 
{
$udal=$_POST['udaltel'];
$res13="update contact set tel='0' where idc='$udal'";
if(mysql_query($res13))
{
Header ("Location: contred.php");
} 
}
if(isset($_POST['udalemail'])) 
{
$udal1=$_POST['udalemail'];
$res13="update contact set email='0' where idc='$udal1'";
if(mysql_query($res13))
{
Header ("Location: contred.php");
} 
}
if(isset($_POST['udalraz'])) 
{
$udal2=$_POST['udalraz'];
$res14="update razdel set udalr='1' where idr='$udal2'";
if(mysql_query($res14))
{
Header ("Location: menured.php");
} 
}
if(isset($_POST['udalpod'])) 
{
$udal3=$_POST['udalpod'];
$res15="update razdel set udalr='1' where idr='$udal3'";
if(mysql_query($res15))
{
Header ("Location: menured.php");
} 
}
?>

<!--скрипт удаления пользователя. пользователь не удаляется безвозвратно из таблицы, а только помечается как удаленный-->