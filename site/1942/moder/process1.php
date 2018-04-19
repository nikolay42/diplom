<?  
function createThumbnail($filename) {
  setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());   
$_FILES['fupload']['name']=$ttt.$_FILES['fupload']['name'];
require 'config.php'; 
//Подключаем файл конфигурации        
if(preg_match('/[.](jpg)$/', $filename)) {
$im = imagecreatefromjpeg($path_to_image_directory . $filename);
} else if (preg_match('/[.](gif)$/', $filename)) {
$im = imagecreatefromgif($path_to_image_directory . $filename);
} else if (preg_match('/[.](png)$/', $filename)) {
$im = imagecreatefrompng($path_to_image_directory . $filename);} 
//Определяем формат изображения
$ox = imagesx($im);
$oy = imagesy($im);
$nx = $final_width_of_image;
$ny = floor($oy * ($final_width_of_image / $ox));
$nm = imagecreatetruecolor($nx, $ny);
imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);
if(!file_exists($path_to_thumbs_directory)) {
if(!mkdir($path_to_thumbs_directory)) {
die("Проблемы? Попробуйте снова!");}
}  
imagejpeg($nm, $path_to_thumbs_directory.$filename);
$tn = '<div align="center"><img src="'.$path_to_thumbs_directory.$filename.'" alt="image" /></div>';
$tn .= '<p class="but1"> Изображение успешно загружено, его миниатюра удачно выполнена.<p/>';
echo $tn;

$queryforum="insert into model (`linkim`, opism, namemod, prise) values ('".$_FILES['fupload']['name']."','".$_POST['opismodel']."', '".$_POST['namemodel']."', '".$_POST['prise']."')"; /*вставляем данные о рисунке в БД*/
if(mysql_query($queryforum)) /* если запрос успешно произведен */
{
}
}
//Сжимаем изображение, если есть ошибки-выводим, если их нет, то выводим получившуюся миниатюру
?>