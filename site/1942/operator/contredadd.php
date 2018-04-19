<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['name'])) 
{
$name=$_POST['name1'];
$res13="update contact set namec='$name' where namec!='0'";
if(mysql_query($res13))
{
Header ("Location: contred.php"); 
} 
}
if(isset($_POST['adres'])) 
{
$name1=$_POST['adres1'];
$res14="update contact set adres='$name1' where adres!='0'";
if(mysql_query($res14))
{
Header ("Location: contred.php"); 
} 
}
if(isset($_POST['telefon'])) 
{
$res15="insert into contact (opistel, tel) values ('".$_POST['opistel']."', '".$_POST['tel']."')";
if(mysql_query($res15))
{
Header ("Location: contred.php"); 
} 
}
if(isset($_POST['drugoe'])) 
{
$res16="insert into contact (opisemail, email) values ('".$_POST['opisemail']."', '".$_POST['email']."')";
if(mysql_query($res16))
{
Header ("Location: contred.php"); 
} 
}
?>

<!--скрипт удаления пользователя. пользователь не удаляется безвозвратно из таблицы, а только помечается как удаленный-->