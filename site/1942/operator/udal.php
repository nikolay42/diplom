<?php 
		session_start();
?>
<?php 
require "../dbconnect.php";
if(isset($_POST['delete'])) 
{
$udal=$_POST['delete'];
$res13="update userreg set status=9 where idu='$udal'";
if(mysql_query($res13))
{
Header ("Location: sprav1.php");
} 
}
if(isset($_POST['plus'])) 
{
$plus=$_POST['plus'];
$res14="update userreg set status=2 where idu='$plus'";
if(mysql_query($res14))
{
Header ("Location: sprav1.php");
} 
}
if(isset($_POST['deletnav'])) 
{
$deletnav=$_POST['deletnav'];
$res104="delete from userreg where idu='$deletnav'";
if(mysql_query($res104))
{
Header ("Location: sprav4.php");
} 
}
if(isset($_POST['vid'])) 
{
$vid=$_POST['vid'];
$res15="update userreg set status=3 where idu='$vid'";
if(mysql_query($res15))
{
Header ("Location: sprav2.php");
} 
}
if(isset($_POST['up'])) 
{
$up=$_POST['up'];
$res15="update userreg set status=0 where idu='$up'";
if(mysql_query($res15))
{
Header ("Location: sprav1.php");
} 
}
if(isset($_POST['udalval'])) 
{
$udalval=$_POST['udalval'];
$res15="update valuta set udalval=1 where idv='$udalval'";
if(mysql_query($res15))
{
Header ("Location: sprav5.php");
} 
}
if(isset($_POST['udalvс'])) 
{
$udalvс=$_POST['udalvс'];
$res16="update country set udlalc=1 where idc='$udalvс'";
if(mysql_query($res16))
{
Header ("Location: sprav7.php");
} 
}
if(isset($_POST['udalk'])) 
{
$udalk=$_POST['udalk'];
$res16="update karta set udalk=1 where idk='$udalk'";
if(mysql_query($res16))
{
Header ("Location: sprav6.php");
} 
}
if(isset($_POST['closezakr'])) 
{
$closezakr=$_POST['closezakr'];
$res16="update model set udalmod=1 where idmod='$closezakr'";
if(mysql_query($res16))
{
Header ("Location: modeli.php");
} 
}
if(isset($_POST['udalvendor'])) 
{
$udal4=$_POST['udalvendor'];
$res18="update vendor set udalv=1 where idv='$udal4'";
if(mysql_query($res18))
{
Header ("Location: vendor.php");
} 
}

if(isset($_POST['plusot'])) 
{
$plusot=$_POST['plusot'];
$res08="update otziv set statotziv=1 where idot='$plusot'";
if(mysql_query($res08))
{
Header ("Location: otziv.php");
} 
}
if(isset($_POST['minusot'])) 
{
$minusot=$_POST['minusot'];
$res07="update otziv set statotziv=3 where idot='$minusot'";
if(mysql_query($res07))
{
Header ("Location: otziv.php");
} 
}
?>

<!--скрипт удаления пользователя. пользователь не удаляется безвозвратно из таблицы, а только помечается как удаленный-->