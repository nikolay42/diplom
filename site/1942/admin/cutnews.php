<?php
session_start();
require "../dbconnect.php";
if(isset($_POST['post']))
{
if ($_SESSION['podrazdel']!=0)
{
$aa=$_SESSION['podrazdel'];
}
else
{
$aa=$_POST['podrazdel'];
}
$query1="update news set `zagn`='".$_POST['zagn']."',`bodyn`='".$_POST['bodyn']."', newsrazdel=$aa where idn='{$_SESSION['nomnews']}'";
if(mysql_query($query1) ) /* если запрос успешно произведен */
{
$_SESSION['podrazdel']=0;
Header ("Location: redaktnews.php");
}
} 
                               
?> 
<?php
if(isset($_POST['cutnews']))
{
$nomnews=$_POST['cutnews'];
$res_id=mysql_query("SELECT idn, zagn, bodyn, namer, podraz,idr  FROM `news`, razdel where idn='$nomnews' and newsrazdel=idr");
while($nomnews1=mysql_fetch_row($res_id))
{
$_SESSION['nomnews']=$nomnews1[0];
$_SESSION['zagnews']=$nomnews1[1];
$_SESSION['bodynews']=$nomnews1[2];
$_SESSION['newrazdel']=$nomnews1[3];
$_SESSION['idr']=$nomnews1[5];
}
}
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "../name.php"; 
echo $title;
?>
</title> 

 	 <link rel="stylesheet" type="text/css" href="../js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="../js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="../js/forma.js"></script>
     <script type="text/javascript" src="../js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="../js/tiny.js"></script>

</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Редактирование новости <br>
</p>

<?php $ech=5; ?>
<table width="900" border="1" cellspacing="0" cellpadding="0">
<tr >
    <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	<td  class="kvit" colspan="3">Раздел новости </td>
	 <td width="50">&nbsp;</td>
	<td width="30">&nbsp;</td>
</tr>
</table> 

<table>	
<tr> 	
	  			<td  class="log" > <?php 
		$razdel1=mysql_query("SELECT podraz, namer FROM razdel where idr='".$_SESSION['idr']."'");
				while($razdel2=mysql_fetch_row($razdel1))
{
if ($razdel2[0]==0)
{
echo "<u class='but1'> $razdel2[1] </u>";
}
else {
	$razdel=mysql_query("SELECT namer FROM razdel where idr=$razdel2[0]");
while($razdel3=mysql_fetch_row($razdel))
{
echo "<u class='but1'> $razdel3[0] / ";
echo $_SESSION['newrazdel']."</u>";
}
}	
}
 ?> 
   </td>
<td width="60" class="log">  <form method="post">  <input type="submit" name="izmenit" value="Изменить раздел" > </form> </td>
<td lass="log">
  <?php 
  if(isset($_POST['izmenit']))
{
 echo "<form  method='post' >   <select   name='rodrazdel'>";
$res=mysql_query("SELECT idr, namer FROM `razdel` where tipr='1' and udalr!=1") /*выбираем разделы из базы */
or die(mysql_error());
$chat=mysql_num_rows($res);
			while ($chat=mysql_fetch_row($res))
			{
			echo "<option value='$chat[0]'>$chat[1]</option>\n";
			};
		echo "</select><input type='submit' name='viborrazdel' value='Выбрать' > </form> ";
		}
else 
{
echo "<form method='post' >";
$_SESSION['podrazdel']=$_SESSION['idr'];
}
  ?>
  <?php
if(isset($_POST['viborrazdel'])) 
{
$rodrazdel=$_POST['rodrazdel'];
$res1=mysql_query("SELECT idr, namer FROM `razdel` where tipr='2' and podraz=$rodrazdel and udalr!=1") /*выбираем разделы из базы */
or die(mysql_error());
$ch=mysql_num_rows($res1);
if ($ch>0)
{
echo "<form method='post'  >";
echo " <select   name='podrazdel'>";
$chat1=mysql_num_rows($res1);
			while ($chat1=mysql_fetch_row($res1))
			{
			echo "<option value='$chat1[0]'>$chat1[1]</option>\n";
			}
			echo "  </select>";
			}
			else {
			echo "Подразделы не созданы!";
			echo "<form method='post' >";
			$_SESSION['podrazdel']=$rodrazdel;
											};
			}
			?>

</td>
</tr>
</table> 

<table>
<tr >
    <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	<td  class="kvit" colspan="3">Заголовок </td>
	 <td width="50">&nbsp;</td>
	<td width="30">&nbsp;</td>
</tr>	
<tr> 	
	  <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>	
	   <td width="60">&nbsp;</td>
		<td  class="log" >  <input type="text" size="120"   value="<?php echo $_SESSION['zagnews']; ?>" name="zagn" class="required" title="Заголовок обязателен!"> 	</td>
		  <td width="60">&nbsp;</td>
	    <td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
</tr>
<tr>	 
	<td width="30">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	  <td width="60">&nbsp;</td>
	<td  class="kvit">Описание</td>
	 <td width="60">&nbsp;</td>
	 <td width="50">&nbsp;</td>
	<td width="30">&nbsp;</td>
</tr>
<tr>
    <td width="30">&nbsp;</td>
	<td  class="" colspan="5" align="center"><textarea ROWS=3 COLS=140 name="bodyn" class="required" title="<p class='log'> Напишите что-нибудь! </p>"> <?php echo $_SESSION['bodynews']; ?></textarea></td>
	<td width="30">&nbsp;</td>
</tr>
</table>
<div class="but">
<input type="submit" name="post" value="Сохранить" > </form> </td>
</div>	 

	</td>
</tr>
</table>



   </div> 
            </div> 
			<br>

<div id='main' class='noifixpng'> 
  
            </div> 
			<center> 
        

 

<br>

 
</body> 
 
</html>