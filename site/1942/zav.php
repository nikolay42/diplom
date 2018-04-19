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
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="js/ui.datepicker-uk.js"></script>
	 <script type="text/javascript" src="js/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="js/forma.js"></script>
     <script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
	 <script type="text/javascript" src="js/tiny.js"></script>
	 <script type="text/javascript" src="js/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = 'js/highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	//hs.dimmingOpacity = 0.75;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .75,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});

</script>


</head> 
 
<body> 
   <?php include "menu.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
<?php
require "dbconnect.php";

$res_id3=mysql_query("SELECT 	idmod, namemod, opism FROM `stol` where udalmod=0")
or die(mysql_error());

?>
<p class="pp">
Бронирование столика в ресторане <br>
</p>


<table width="900" border="0" cellspacing="0" cellpadding="0">
  	           
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Столик</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><form action="upload.php" method="post" > <select name="idkart">
	<?php
	while ($karta=mysql_fetch_row($res_id3))
	{
	echo "<option value='$karta[0]'>$karta[1] $karta[2]</option>\n";
	}
	?>
	</select></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
  
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	           <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
     <tr>
    <td colspan="7" class="prav">Личные данные</td>
     </tr>
  <tr class="rc10">
    <td width="10">&nbsp;</td>
    <td width="320" class="date1" class="rc10">Фамилия<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log">

<input type="text" size="40" value="Иванов" name="forname" class="required" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log">Укажите фамилию  </td>
	    <td width="10">&nbsp;</td>
  </tr>
      <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Имя <font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Иван" name="name"  class="required" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log">Укажите имя  </td>
	    <td width="10">&nbsp;</td>
  </tr>
  </tr>
      <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Отчество<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Иванович" name="otch" class="required"  title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"> Укажите отчество  </td>
	    <td width="10">&nbsp;</td>
  </tr>
  </tr>
      <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    
        <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
        
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Мобильный телефон<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="+7-000-000-00-00" onFocus="doClear(this)" onBlur="doDefault(this)" name="teluser" title="<br>
" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
          
	         <tr>
    <td colspan="7" class="prav">Информация по бронированию</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Дата  <font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log">
<input type="text" size="40" onFocus="doClear(this)" onBlur="doDefault(this)" value="03.03.2013" name="adressreg" title="<br>" >

</td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
                    <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Время <font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log">
<input type="text" size="40" onFocus="doClear(this)" value="18.00" onBlur="doDefault(this)" name="adressfakt" title="<br>
" >

</td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	     <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Количество гостей</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="4" onFocus="doClear(this)" onBlur="doDefault(this)" name="adressfakttel"  ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	      <tr>
    <td colspan="7" class="pp"><input type="submit" name="karta" value="Зарегистрировать" >
	</form></td>
     </tr>
	       <tr>
    <td colspan="7">&nbsp;</td>
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