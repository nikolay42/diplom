<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "name.php"; 
echo $title; ?>
</title> 

 	 <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.7.2.custom.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	
</head> 
 
<body> 
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- ��� ����� ��� ����--> 
		<br>
		<div class="highslide-gallery">

<table> 
<tr>
	<td colspan="3" bgcolor="" > <center>
<?php
require "dbconnect.php";
if(isset($_POST['reg']))
{
$nomzak=$_SESSION['nomzak'];
$idses = session_id();
$newzak="update porder  set nomorder='$nomzak' where idses='$idses' and nomorder=0 ";
if(mysql_query($newzak))
{
$vsnam=$_SESSION['vsnam'];
$sumkol=$_SESSION['sumkol'];
$sumprise=$_SESSION['sumprise'];
$sumusl=$_SESSION['sumusl'];

$summazakaza=$_SESSION['summazakaza'];
$query1="insert into userreg (`forname`, `email`, `telrab`, `nomzak`, `vsnam`, `sumkol`, `sumprise`, `sumusl`, `summazakaza`) 
values ('".$_POST['forname']."','".$_POST['email']."','".$_POST['telrab']."','$nomzak',$vsnam, $sumkol, $sumprise, $sumusl,$summazakaza )";
if(mysql_query($query1))
{
$max1=mysql_query("SELECT max(`nomzak`) FROM userreg ");
while($max2=mysql_fetch_row($max1))
{
$nomzak=$max2[0];
}


echo "<p class='prav'>�������, ����� ������ ������ - <span class='reg'> $nomzak </span>. � ��������� ����� � ���� �������� �������� ��� ��������� ������� ������. <br> 
��� ������� � ������ ������� ����������� � �������� ������ ��������� ����� ����������� �����, � �������� ������ - ����� ������.</p>
<table> 
<tr>
<td> 
<span class='reggreen'>�������� ������ ������ </span>
<select   >';
	   <option>���������� ������</option>
  <option>��������-������</option>  
     <option>������-������</option>
  <option>�������</option>   
     <option>��������� ��� ������ � �����</option>

</select>
</td>
<td >
<center>
<input type='submit' name='search' value='   &nbsp;&nbsp;&nbsp;�������� &nbsp;&nbsp;&nbsp;'>

</form>
</td>
</tr>
</table>
";
}
else
{
echo "<p class=' '></p>�� ����������</p>";   
}
}
}                                        
?> 
</td>
</tr>
</table>
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