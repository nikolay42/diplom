<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['addpodrazdel']))
{

$query22="insert into razdel (`namer`,`tipr`, podraz) 
values ('".$_POST['namepodrazdel']."','2','".$_POST['rodrazdel']."')";
if(mysql_query($query22)) /* ���� ������ ������� ���������� */
{
Header ("Location: menured.php");
}
else
{
echo "<p class='log'></p>�� ����������</p>";   
}
 } 
?>


<!--������ �������� ������������. ������������ �� ��������� ������������ �� �������, � ������ ���������� ��� ���������-->