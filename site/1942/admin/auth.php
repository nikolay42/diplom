<?php
session_start();
require "../dbconnect.php";
if(isset($_POST['parol'])) /*  ���� ��������� ����� ����� ������ � ������*/
{
$res=mysql_query("SELECT idu, status FROM user WHERE login='".$_POST['login']."' AND password='".$_POST['password']."' AND udaluser=0"); /* �������� �� �� ����� � ������ ������������ � ����� ������� � ������� */
if(mysql_num_rows($res))
{
while($prise_mas=mysql_fetch_row($res))
{
if ($prise_mas[1]==1) /* ���� ������ ����� 1 - ������, ��� �������������, ������� �� �������� ������ */
{
$_SESSION['var']="$prise_mas[0]";
Header ("Location: sprav1.php");
}
if ($prise_mas[1]==2)/* ���� ������ ����� 2 - ������, ��� ���������, ������� �� �������� ������������ */
{ 
$_SESSION['moder']="$prise_mas[0]";
Header ("Location: ../moder/index.php");
}
if ($prise_mas[1]==3) /* ���� ������ ����� 3 - ������, ��� ��������, �������� �� �������� ���������� */
{
$_SESSION['operator']="$prise_mas[0]";
Header ("Location: ../operator/index.php");
}

}

}
else
{    //������ ������������ ���
echo "<center><br><br>������� �������� ����� ��� ������<br><br> <span><a href='index.php'>���������� ��� ���</a></span> <br> ��� ���������� � �������������� �������<br>
";
}
}
?>

