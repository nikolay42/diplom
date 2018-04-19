<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['userpr'])) 
{
$udal=$_POST['userpr'];
$res13="update image set udali=1 where idi='$udal'";
if(mysql_query($res13))
{
Header ("Location: imagered.php");
} 
}
?>

<!--скрипт удаления пользователя. пользователь не удаляется безвозвратно из таблицы, а только помечается как удаленный-->