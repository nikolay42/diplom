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
<?php

?>

	<?php
	$id_con=mysql_connect("localhost", "root", "")
or die("Невозможно соединиться с сервером");
mysql_select_db("bankros") or die("Невозможно выбрать БД");
$res_id2=mysql_query("SELECT * FROM `country`")
or die(mysql_error());
$strana=mysql_num_rows($res_id2);
$res_id3=mysql_query("SELECT * FROM `karta`")
or die(mysql_error());
$karta=mysql_num_rows($res_id3);
$res_id4=mysql_query("SELECT * FROM `sex`")
or die(mysql_error());
$sex=mysql_num_rows($res_id4);
$res_id5=mysql_query("SELECT * FROM `valuta`")
or die(mysql_error());
$valuta=mysql_num_rows($res_id5);
?>
		<!-- Форма регистрации -->
		<center>
<div id="golova" class="rc10">
 <br>
 <!-- Заголовок -->
 <p class="tr1">
</p>
 <p class="pp">
Регистрация заявления на выдачу банковской карты <br>
</p>


<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" class="tarivnew">Вот так  <font color="#FF0033">*</font> помечены поля, ввод данных в которые <font color="#FF0033">обязателен</font></td>
     </tr>
	           <tr>
    <td colspan="7" class="prav">Тип карты</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Тип карты</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><select name="idkart">
	<?php
	while ($karta=mysql_fetch_row($res_id3))
	{
	echo "<option value='$karta[0]'>$karta[1]</option>\n";
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
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Валюта счета</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><select name="idval">
	<?php
	while ($valuta=mysql_fetch_row($res_id5))
	{
	echo "<option value='$valuta[0]'>$valuta[1]</option>\n";
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
    <td colspan="7" class="prav">Личные данные</td>
     </tr>
  <tr class="rc10">
    <td width="10">&nbsp;</td>
    <td width="320" class="date1" class="rc10">Фамилия<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log">
<form action="upload.php" method="post" enctype="multipart/form-data" >
<input type="text" size="40" value="" name="forname" class="required" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log">Укажите фамилию клиента по паспорту</td>
	    <td width="10">&nbsp;</td>
  </tr>
      <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Имя <font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="" name="name"  class="required" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log">Укажите имя клиента по паспорту</td>
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
<td width="320" class="log"><input type="text" size="40" value="" name="otch" class="required"  title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"> Укажите отчество клиента по паспорту</td>
	    <td width="10">&nbsp;</td>
  </tr>
  </tr>
      <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Фамилия и имя латиницей<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" name="namelat" class="required" title="<br>
Адрес указан неправильно!"  onFocus="doClear(this)" onBlur="doDefault(this)" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"> Укажите фамилию и имя клиента латиницей</td>
	    <td width="10">&nbsp;</td>
  </tr>
        <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
        <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Дата рождения</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указана" onFocus="doClear(this)" onBlur="doDefault(this)" name="dateB" id="datepicker1" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
  <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Место рождения<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" name="mesob" class="required" title="<br>
Адрес указан неправильно!"  onFocus="doClear(this)" onBlur="doDefault(this)" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log">Укажите место рождения клиента по паспорту</td>
	    <td width="10">&nbsp;</td>
  </tr>
  
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Пол</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><select name="idsex">
	<?php
	while ($sex=mysql_fetch_row($res_id4))
	{
	echo "<option value='$sex[0]'>$sex[1]</option>\n";
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
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Гражданство</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><select name="idstrana">
	<?php
	while ($strana=mysql_fetch_row($res_id2))
	{
	echo "<option value='$strana[0]'>$strana[1]</option>\n";
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
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">ИНН</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" name="inn" class="required" title="<br>
Адрес указан неправильно!"  onFocus="doClear(this)" onBlur="doDefault(this)" title="<br>
Поле обязательно к заполнению"></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
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
    <td colspan="7" class="prav">Паспортные данные</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Серия паспорта<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указан" onFocus="doClear(this)" onBlur="doDefault(this)" name="passser" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	     <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Номер паспорта<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указан" onFocus="doClear(this)" onBlur="doDefault(this)" name="passnom" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	     <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Наименование органа, выдавшего паспорт<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указан" onFocus="doClear(this)" onBlur="doDefault(this)" name="passvid" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Дата выдачи паспорта<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указана" onFocus="doClear(this)" onBlur="doDefault(this)" name="passdate" id="datepicker" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Код подразделения<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указан" onFocus="doClear(this)" onBlur="doDefault(this)" name="passkod" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	         <tr>
    <td colspan="7" class="prav">Адресная информация</td>
     </tr>
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Адрес регистрации<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log">
<textarea name="adressreg" cols="35" rows="4"></textarea>
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
    <td width="320" class="date1">Телефон по адресу регистрации</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указан" onFocus="doClear(this)" onBlur="doDefault(this)" name="adressregtel"  ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Адрес фактического проживания<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log">
<textarea name="adressfakt" cols="35" rows="4"></textarea>
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
    <td width="320" class="date1">Телефон по адресу фактического проживания</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="Не указан" onFocus="doClear(this)" onBlur="doDefault(this)" name="adressfakttel"  ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
          <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
		         <tr>
    <td colspan="7" class="prav">Данные о месте работы</td>
     </tr> 
    <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Наименование организации<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="ООО Рога и Копыта" onFocus="doClear(this)" onBlur="doDefault(this)" name="namerab" title="<br>
" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Адрес организации<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="" onFocus="doClear(this)" onBlur="doDefault(this)" name="adressdolg" title="<br>
" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	<tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Наименование должности<font color="#FF0033">*</font></td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="" onFocus="doClear(this)" onBlur="doDefault(this)" name="namedolg" title="<br>
" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr> 
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="date1">Телефон организации</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="" onFocus="doClear(this)" onBlur="doDefault(this)" name="telrab" title="<br>
" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	 <tr>
    <td width="10">&nbsp;</td>
    <td width="320" class="table3">Ключевое слово</td>
    <td width="10">&nbsp;</td>
<td width="320" class="log"><input type="text" size="40" value="" onFocus="doClear(this)" onBlur="doDefault(this)" name="telrab" title="<br>
" ></td>
    <td width="10">&nbsp;</td>
	<td width="320" class="log"></td>
	    <td width="10">&nbsp;</td>
  </tr>
         <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
	      <tr>
    <td colspan="7" class="pp"><input type="submit" name="send" value="Зарегистрировать" >
	</form></td>
     </tr>
	       <tr>
    <td colspan="7">&nbsp;</td>
     </tr>
</table>		
	
   </div> 
            </div> 
			<br>

<br>
</body> 
 </html>