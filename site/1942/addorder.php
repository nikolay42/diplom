<?php 
		session_start();
require "dbconnect.php";
$idses = session_id();
if(isset($_POST['addorder'])) 
{
$idtov=$_POST['plus'];
$kolvo=$_POST['kolvo'];
$idses = session_id();
$query1="insert into porder (`idtov`, `idses`, `kolvo`) values ('$idtov', '$idses', '$kolvo')";
if(mysql_query($query1) ) /* если запрос успешно произведен */
{
Header ("Location: image.php");
} 
}
if(isset($_POST['izmorder'])) 
{
$idt=$_POST['idt'];
$kolvonew=$_POST['kolvonew'];
$res13="update porder set kolvo='$kolvonew' where idporder=$idt and idses='$idses'";
if(mysql_query($res13))
{
Header ("Location: cart.php");
} 
}
if(isset($_POST['delete'])) 
{
$delete=$_POST['delete'];
$res104="delete from porder where idporder='$delete'";
if(mysql_query($res104))
{
Header ("Location: cart.php");
} 
}

if(isset($_POST['minususl'])) 
{
$mu=$_POST['minususl'];
$idses = session_id();
$res107="delete from porder where iduslpo=$mu and idses='$idses'";
if(mysql_query($res107))
{
Header ("Location: cart.php");
} 
}

if(isset($_POST['addusl'])) 
{
$iduslpo=$_POST['addusl'];
$idses = session_id();
$query111="insert into porder (`idses`, `iduslpo`) values ('$idses', '$iduslpo')";
if(mysql_query($query111) ) /* если запрос успешно произведен */
{
Header ("Location: cart.php");
} 
}
?>
