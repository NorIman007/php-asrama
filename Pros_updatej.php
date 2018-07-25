<?php

include('config.php');

$update=mysql_query("UPDATE jebat SET katil='$_POST[katil]',locker='$_POST[locker]',kipas='$_POST[kipas]',meja='$_POST[meja]',cermin='$_POST[cermin]' WHERE id_barang='$_POST[id_barang]'")
or die(mysql_error());

if($update)
{
	include ('jebat.php');
}else
{
	echo "gagal update";
}
?>
