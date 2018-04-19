<?php session_start();
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
  
</head> 
 
<body> 
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Заявки на тест-драйв <br>
</p>


<?php
require "../dbconnect.php";
$res101=mysql_query("SELECT `avto`,`date`,`fio`,`telefon`,`email`, dateadd  FROM `test` where status=0");
$a=1;
while($res_id=mysql_fetch_row($res101))
{
echo " <center> <table> <tr>
<td width='150' class='tz'>  $res_id[0]</td>
<td width='100' class='tz'> $res_id[1] </td>
<td width='250' class='tz'>  $res_id[2] </td>
<td width='100' class='tz'>  $res_id[3] </td>
<td width='100' class='tz'>  $res_id[4] </td>
<td width='100' class='tz'>  $res_id[5] </td>
<td width='45' class=''><form   method='post' name='closezakr' action='udal.php'>
<INPUT TYPE='hidden' NAME='closezakr' VALUE='$res_id[0]'>
<input type='image' src='../image/12.png' TITLE='Удалить ' WIDTH='30' HEIGHT='30' >
</form>
</td>
</tr> </table>\n";
$a=$a+1;
}    

?>	
</div>
  
            </div> 
<br>
</body> 
 </html>