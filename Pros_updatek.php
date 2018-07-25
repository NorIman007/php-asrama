<?php

include('config.php');

$update=mysql_query("UPDATE kasturi SET locker='$_POST[locker]',kipas='$_POST[kipas]',meja='$_POST[meja]',cermin='$_POST[cermin]' WHERE katil='$_POST[katil]'")
or die(mysql_error());

if($update)
{
	include ('k.php');
}else
{
	echo "gagal update";
}
?>
