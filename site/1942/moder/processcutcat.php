<?  
function createThumbnail($filename) {
  setlocale (LC_ALL, "ru_RU.CP1251");
$ttt=date("dmyGis", time());   
$_FILES['fupload']['name']=$ttt.$_FILES['fupload']['name'];
require 'config.php'; 
//���������� ���� ������������        
if(preg_match('/[.](jpg)$/', $filename)) {
$im = imagecreatefromjpeg($path_to_image_directory . $filename);
} else if (preg_match('/[.](gif)$/', $filename)) {
$im = imagecreatefromgif($path_to_image_directory . $filename);
} else if (preg_match('/[.](png)$/', $filename)) {
$im = imagecreatefrompng($path_to_image_directory . $filename);} 
//���������� ������ �����������
$ox = imagesx($im);
$oy = imagesy($im);
$nx = $final_width_of_image;
$ny = floor($oy * ($final_width_of_image / $ox));
$nm = imagecreatetruecolor($nx, $ny);
imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);
if(!file_exists($path_to_thumbs_directory)) {
if(!mkdir($path_to_thumbs_directory)) {
die("��������? ���������� �����!");}
}  
imagejpeg($nm, $path_to_thumbs_directory.$filename);
$tn = '<div align="center"><img src="'.$path_to_thumbs_directory.$filename.'" alt="image" /></div>';
$tn .= '';
echo $tn;
$nomnews1=$_SESSION['idcat'];
$opismodel=$_POST['opismodel'];
$namemodel=$_POST['namemodel'];
$kat=$_POST['kat'];
$link=$_FILES['fupload']['name'];

$updatecut="update model set linkim='$link', opism='$opismodel', namemod='$namemodel', fat=$kat where idmod=$nomnews1"; /*��������� ������ � ������� � ��*/
if(mysql_query($updatecut)) /* ���� ������ ������� ���������� */
{
echo "<p class='but1'> �������� � ������������ ������� ��������<p/>";
}
else {
echo "�� ���������� �������� ������";
}
}
//������� �����������, ���� ���� ������-�������, ���� �� ���, �� ������� ������������ ���������
?>