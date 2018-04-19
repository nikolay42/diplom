<?php
session_start();
?>
<?php
header("Content-type: application/vnd.ms-excel");
header('Content-disposition: attachment; filename="Zajavki_ot_' . date("Y-m-d") . '.xls"');
?>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">
 <link rel="stylesheet" type="text/css" href="C:\WebServers\home\localhost\www\496\css\style.css">
 <?php
require "../dbconnect.php";
$sod1=mysql_query("SELECT count( idU )
FROM `userreg`, model  where idmod=idkart and  status=0");
while($sod_mas1=mysql_fetch_row($sod1))
{
$kolvo=$sod_mas1[0];
}
if ($kolvo>0)
{
echo "<table border='0' align='center' width='700'><tr><td class='table1'> Всего поступило заявок &nbsp;<b>$kolvo</b></td></tr> </table>\n";
}
?>
<?php
require "../dbconnect.php";
$res=mysql_query("SELECT idu, namemod, forname, name, otch, teluser, adressreg, adressfakt, adressfakttel FROM `userreg`, model  where idmod=idkart and  status=0 ");
$a=1;
echo "<center> <table>";
while($res_id=mysql_fetch_row($res))
{
echo "  <tr>
<td width='30' class='kvit'> <b> $a </b> </td>
<td width='250' class='kvit'> $res_id[1] </td>
<td width='150' class='kvit'> $res_id[2] $res_id[3] $res_id[4] </td>
<td width='120' class='kvit'> $res_id[5] </td>
    <td width='120' align='left' class='kvit'> $res_id[6] </th>
     <td width='120'  align='left' class='kvit'>$res_id[7] </th>
    <td width='120' align='left' class='kvit'>$res_id[8] </th>

</tr> \n";
$a=$a+1;
}   
echo "</table>"; 
?>	