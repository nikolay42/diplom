<?php
session_start();
require "dbconnect.php";
if(isset($_POST['parol'])) /*  ���� ��������� ����� ����� ������ � ������*/
{
$res=mysql_query("SELECT idu  FROM userreg WHERE email='".$_POST['login']."' AND nomzak='".$_POST['password']."'"); /* �������� �� �� ����� � ������ ������������ � ����� ������� � ������� */
if(mysql_num_rows($res))
{
while($prise_mas=mysql_fetch_row($res))
{
$_SESSION['usertovar']="$prise_mas[0]";
Header ("Location: user/index.php");
}
}
else
{    //������ ������������ ���
echo "<center><br><br>������� �������� ����� ��� ������<br><br> <span><a href='index.php'>���������� ��� ���</a></span> <br> ��� ���������� � �������������� �������<br>
";
}
}
?>
