<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "name.php"; 
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
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
		
		<table >
<tr align="left" valign="bottom"> 
<td class="zag3" colspan="2" > <img src="image/home.png" alt="адрес" WIDTH='60' HEIGHT='60'>Наш адрес: </td>
<td > &nbsp;&nbsp;</td>
 <td class="zag3" colspan="2"> <img src="image/phone.png" alt="адрес" WIDTH='60' HEIGHT='60'>Наши телефоны: </td> 
 <td > &nbsp;&nbsp;</td>
 <td class="zag3" colspan="2"> <img src="image/info.png" alt="адрес" WIDTH='60' HEIGHT='60'>Другие контакты: </td> 
 </tr> 
	<tr > <td class="kvit" colspan="2"> <?php 
require "dbconnect.php";
$res=mysql_query("SELECT adres FROM contact where adres!='0' limit 1") /*выбираем разделы из базы */
or die(mysql_error());
$chat=mysql_num_rows($res);
			while ($chat=mysql_fetch_row($res))
			{
			echo "$chat[0]<br>";
			};
?> </td> 
<td > &nbsp;&nbsp;</td>
<td class="kvit" colspan="2"> <?php 
require "dbconnect.php";
$res1=mysql_query("SELECT opistel, tel FROM contact where tel!='0' and opistel!='0'") /*выбираем разделы из базы */
or die(mysql_error());
$chat1=mysql_num_rows($res1);
			while ($chat1=mysql_fetch_row($res1))
			{
			echo "<u class='tr'> $chat1[0]</u><u class='table'> $chat1[1]</u><br>";
			};
?> </td> 
<td > &nbsp;&nbsp;</td>
<td class="kvit" colspan="2"> <?php 
require "dbconnect.php";
$res2=mysql_query("SELECT opisemail, email FROM contact where email!='0' and opisemail!='0'") /*выбираем разделы из базы */
or die(mysql_error());
$chat2=mysql_num_rows($res2);
			while ($chat2=mysql_fetch_row($res2))
			{
			echo "<u class='tr'> $chat2[0]</u><u class='table'> $chat2[1]</u><br>";
			};
?> </td> 
</tr> 


		</table>

   </div> 
            </div> 
			<br>

<br>
</body> 
 </html>