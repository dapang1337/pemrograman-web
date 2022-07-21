<?php
	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$kontak =$_POST['kontak'];
	$barang = $_POST['barang'];
	$catatan =$_POST['catatan'];

	echo "<head><title>Data Order</head></title>";
	$fp = fopen("Data.txt","a+");
	fputs($fp,"$nama|$alamat|$kontak|$barang|$catatan\n");
	fclose($fp);


	echo "Terima kasih Telah order<br>";
	echo "<a href='data.php'>Lihat Order</a><br>";
	echo "<a href='index.html'>Kembali Ke halaman</a><br>";
?>