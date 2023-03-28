<?php include "dbkoneksi.php";?>
 <?php

        $id_edit = $_GET['iddel'];
        var_dump($id_edit);
        $sql = "DELETE from pelanggan where id=?";
	 	$st = $dbh->prepare($sql);
        $st->execute([$id_edit]);
	 //echo $_POST['nama'];
   	header("location: list_pelanggan.php");
 ?> 