<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['cutimage'])) 
{

$opis=$_POST['opis'];
$idi=$_SESSION['nomimage'];
$res14="update image set namei='$opis' where idi=$idi";
if(mysql_query($res14))
{
Header ("Location: imagered.php");
} 
}
?>


<!--������ �������� ������������. ������������ �� ��������� ������������ �� �������, � ������ ���������� ��� ���������-->