<?php 
require "dbconnect.php";
$namec=mysql_query("select namec from contact where namec!='0' limit 1");
while($sod_mas1=mysql_fetch_row($namec))
{
$title=$sod_mas1[0];
};

?>