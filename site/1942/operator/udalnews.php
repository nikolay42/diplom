<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['userpr'])) 
{
$udal=$_POST['userpr'];
$res13="update news set udaln=1 where idn='$udal'";
if(mysql_query($res13))
{
Header ("Location: redaktnews.php");
} 
}
?>

<!--������ �������� ������������. ������������ �� ��������� ������������ �� �������, � ������ ���������� ��� ���������-->