<?php
include '../../conf.php';
include '../../conn.php';

	$judul = post('judul');
	$konten = post('konten');
	$penulis = post('penulis');

	$simpan = $koneksi->prepare("INSERT INTO
					artikel (`judul`,`konten`,`penulis`)
					VALUES
					('".$judul."','".$konten."','".$penulis."')");

	$simpan->execute();

header("location:../../index.php?p=artikel");


?>