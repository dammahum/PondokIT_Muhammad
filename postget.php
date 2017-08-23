<?php
	$nama = $_POST['nama'];
	
	if(empty($nama))||(trim($nama) == "")) {
		echo "Anda Belum Memasukkan Nama";
	} else {
		echo "Selamat datang mas ".$nama;
	}
?>