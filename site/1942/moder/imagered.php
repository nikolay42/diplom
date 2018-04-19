<?php session_start();
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'> 
 
<html xmlns='http://www.w3.org/1999/xhtml'> 
 
<head> 
<meta http-equiv='content-type' content='text/html; charset=windows-1251' /> 

<title><?php include "../name.php"; 
echo $title; ?>
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
	 <script type="text/javascript" src="../js/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="../js/highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = '../js/highslide/graphics/';
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
   <?php include "menuadmin.php"; ?>

    <div id='content'> 
		<div id='content1'>
		<!-- вот здесь вся инфа--> 
		<br>
 <p class="pp">
Галерея изображений для редактирования<br>
</p>


<div class="highslide-gallery">
<?
require "../dbconnect.php";

$chrad = 5;
$i = 0;
$y=0;
$result = mysql_query("SELECT `linki` FROM `image` ");
$obch=mysql_num_rows($result);
$chstrok = ceil($obch / $chrad);// считаем количество строк, округляет дробь в большую сторону
echo "<table ><tr>";
while ($y<$chstrok)
{
$m=0;
echo "<tr>";
$result1 = mysql_query("SELECT `linki`, namei, idi FROM `image` where udali!=1 limit $i, $chrad");
while($chislo=mysql_fetch_row($result1))
{
echo "<td class='prav'> <a href='../images/full/$chislo[0]' class='highslide' onClick='return hs.expand(this)'>
	<img src='../images/thumbs/$chislo[0]' alt='Highslide JS'
		title='Нажмите для увеличения' /> </a>
	<div class='highslide-caption'>$chislo[1]</div> </td>
	<td > <form   method='post' name='cutimage' action='cutimage.php'>
<INPUT TYPE='hidden' NAME='cutimage' VALUE='$chislo[2]'>
<input type='image' src='../image/cut.png' TITLE='Редактировать описание' WIDTH='30' HEIGHT='30' >
</form>
<form   method='post' name='userpr' action='udalimage.php'>
<INPUT TYPE='hidden' NAME='userpr' VALUE='$chislo[2]'>
<input type='image' src='../image/delete.png' TITLE='Удалить' WIDTH='30' HEIGHT='30' >
</form>
</td>";
}
echo "</tr>";
$i=$i+$chrad;
$y++;
}
echo "</table>";
?>
</div>

<?php 
/* $res = mysql_query("SELECT `linki` FROM `image`") or die('MySQL ERROR: '.mysql_error());
// Узнаем сколько имен досталось.
$num = mysql_num_rows($res);
// Создаем переменную в которо будет указано число столбцов которое нужно 
//нам в данном случае это 3 но можно указать любое другое 5,10,999 и т.д.
$cols = 3;
// Помещаем в переменную $table начальный тег <table>
$table = '<table border="1">';
for ($i=0;$i<$num;$i+=$cols)
{
    // Помещаем в переменную $table тег строки <tr>
    $table .= '<tr>';
    for ($e=0;$e<$cols;$e++)
    {
        $id = $i + $e;
        $table = '<td>';
        $table = ($id<$num)?mysql_result($res,$id,'name'):'&nbsp;';
        $table = '</td>';
    }
    // Помещаем в переменную $table закрывающий тег строки </tr>
    $table = '</tr>';    
}
// Помещаем в переменную $table закрывающий тег </table>
$table = '<table>';

echo $table; */
?>
 <?php /*
require "../dbconnect.php";
$num_page=2;
$chislo=mysql_query("SELECT count(idn)  FROM `news` where udaln!=1 ");
while($chislo_mas=mysql_fetch_row($chislo))
{
if ($chislo_mas[0]>0)
{

$ITEMS_PER_PAG=5;
$query = "SELECT COUNT(*) FROM news ";
$res = mysql_query( $query );
$total = mysql_result( $res, 0, 0 );
   
// Проверяем передан ли номер текущей страницы
if ( isset($_GET['page']) ) {
  $page = (int)$_GET['page'];
  if ( $page < 1 ) $page = 1;
} else {
  $page = 1;
}

// Сколько всего получится страниц
$cnt_pages = ceil( $total / $ITEMS_PER_PAG);
if ( $page > $cnt_pages ) $page = $cnt_pages;
// Начальная позиция
$start = ( $page - 1 ) * $ITEMS_PER_PAG;

$res_id=mysql_query("SELECT idn, daten, zagn, bodyn FROM `news` where udaln!=1 ORDER BY daten DESC LIMIT $start, $ITEMS_PER_PAG");
while($news=mysql_fetch_row($res_id))
{
$text1=strip_tags($news[3]);
$text2=substr($text1, 0,130);
echo "<table width='800' > <tr>
<td width='100' class='kvit'> $news[1] </td>
<td class='zag3' width='500'> $news[2] </td>
<td width='50' class='$class'> <form   method='post' name='cutnews' action='cutnews.php'>
<INPUT TYPE='hidden' NAME='cutnews' VALUE='$news[0]'>
<input type='image' src='../image/cut.png' TITLE='Редактировать' WIDTH='40' HEIGHT='40' >
</form> </td>
<td class='$class' width='50'> <form   method='post' name='userpr' action='udalnews.php'>
<INPUT TYPE='hidden' NAME='userpr' VALUE='$news[0]'>
<input type='image' src='../image/delete.png' TITLE='Не отображать' WIDTH='40' HEIGHT='40' >
</form> </td>
</tr>
<tr>
<td class='tr' colspan='4'>$text2 <b class='reg'> .......</b></td>
</tr>
</table>\n
<div class='line'></div>
";
} 
// Строим постраничную навигацию
if ( $cnt_pages > 1 )
{
    echo '<div style="margin:1em 0" class="prav">&nbsp;Страницы: ';
    // Проверяем нужна ли стрелка "В начало"
    if ( $page > 3 )
        $startpage = '&nbsp;<a href="'.$_SERVER['PHP_SELF'].'?page=1"><<</a>&nbsp; ...&nbsp; ';
    else
        $startpage = '';
    // Проверяем нужна ли стрелка "В конец"
    if ( $page < ($cnt_pages - 2) )
        $endpage = '&nbsp; ... <a class="but2" href="'.$_SERVER['PHP_SELF'].'?page='.$cnt_pages.'">>></a>&nbsp;';
    else
        $endpage = '';

    // Находим две ближайшие станицы с обоих краев, если они есть
    if ( $page - 2 > 0 )
        $page2left = '&nbsp;<a  href="'.$_SERVER['PHP_SELF'].'?page='.($page - 2).'">'.($page - 2).'</a>&nbsp; ';
    else
        $page2left = '';
    if ( $page - 1 > 0 )
        $page1left = '&nbsp; <a href="'.$_SERVER['PHP_SELF'].'?page='.($page - 1).'">'.($page - 1).'</a>&nbsp; ';
    else
        $page1left = '';
    if ( $page + 2 <= $cnt_pages )
        $page2right = '&nbsp; <a  href="'.$_SERVER['PHP_SELF'].'?page='.($page + 2).'">'.($page + 2).'</a>&nbsp;';
    else
        $page2right = '';
    if ( $page + 1 <= $cnt_pages )
        $page1right = '&nbsp; <a href="'.$_SERVER['PHP_SELF'].'?page='.($page + 1).'">'.($page + 1).'</a>&nbsp;';
    else
        $page1right = '';

    // Выводим меню
    echo '<b class="but2" >'.$startpage.'</b>'.'&nbsp;'.'<b class="but2" >'.$page2left.'</b>'.'&nbsp;'.'<b class="but2" >'.$page1left.'</b>'.'&nbsp;'.'<b class="zag3">'.$page.'</b>'.'&nbsp;'.'<b class="but2" >'.$page1right.'</b>'.'&nbsp;'.'<b class="but2" >'.$page2right.'</b>'.'&nbsp;'.'<b class="but2">'.$endpage.'</b>';

    echo '</div>';
}
} 
  
else
{
echo "<p class='but1'> Новостей пока нет! </p><br>";
}
}
*/?> 

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