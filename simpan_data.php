<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form data_employee
$email          		   =addslashes($_POST['email']);
$emailperusahaan		   =addslashes($_POST['emailperusahaan']);
$nikkaryawan				   =addslashes($_POST['nikkaryawan']);
$nikktp							   =addslashes($_POST['nikktp']);
$nosim							   =addslashes($_POST['nosim']);
$namaktp						   =addslashes($_POST['namaktp']);
$namaibu               =addslashes($_POST['namaibu']);
$tempatlahir 				   =addslashes($_POST['tempatlahir']);
$tanggallahir          =addslashes($_POST['tanggallahir']);
$agama	 						   =addslashes($_POST['agama']);
$nowhatsapp            =addslashes($_POST['nowhatsapp']);
$nobpjs                =addslashes($_POST['nobpjs']);
$nonpwp                =addslashes($_POST['nonpwp']);
$direktorat            =addslashes($_POST['direktorat']);
$divisi                =addslashes($_POST['divisi']);
$statuspernikahan      =addslashes($_POST['statuspernikahan']);
$jumlahanak            =addslashes($_POST['jumlahanak']);
$namasuamiistri        =addslashes($_POST['namasuamiistri']);
$nowhatsappkeluarga    =addslashes($_POST['nowhatsappkeluarga']);
$tempatlahirkeluarga   =addslashes($_POST['tempatlahirkeluarga']);
$tanggallahirkeluarga  =addslashes($_POST['tanggallahirkeluarga']);
$namaanak1             =addslashes($_POST['namaanak1']);
$tempatlahir1          =addslashes($_POST['tempatlahir1']);
$tanggallahir1         =addslashes($_POST['tanggallahir1']);
$jk1						       =addslashes($_POST['jk1']);
$namaanak2             =addslashes($_POST['namaanak2']);
$tempatlahir2          =addslashes($_POST['tempatlahir2']);
$tanggallahir2         =addslashes($_POST['tanggallahir2']);
$jk2                   =addslashes($_POST['jk2']);
$namaanak3             =addslashes($_POST['namaanak3']);
$tempatlahir3          =addslashes($_POST['tempatlahir3']);
$tanggallahir3         =addslashes($_POST['tanggallahir3']);
$jk3                   =addslashes($_POST['jk3']);
$namaanak4             =addslashes($_POST['namaanak4']);
$tempatlahir4          =addslashes($_POST['tempatlahir4']);
$tanggallahir4         =addslashes($_POST['tanggallahir4']);
$jk4                   =addslashes($_POST['jk4']);
$buktiktp=addslashes($_POST['buktiktp']);
$buktikk               =addslashes($_POST['buktikk']);
$buktisim              =addslashes($_POST['buktisim']);
$buktiijazah           =addslashes($_POST['buktiijazah']);
$buktivaksin           =addslashes($_POST['buktivaksin']);


//Query input menginput data kedalam tabel data_employee
  $sql="insert into data_employee (id,email,emailperusahaan,nikkaryawan,nikktp,nosim,namaktp,namaibu,tempatlahir,tanggallahir,agama,nowhatsapp,nobpjs,nonpwp,direktorat,divisi,statuspernikahan,jumlahanak,namasuamiistri,nowhatsappkeluarga,tempatlahirkeluarga,tanggallahirkeluarga,namaanak1,tempatlahir1,tanggallahir1,jk1,namaanak2,tempatlahir2,tanggallahir2,jk2,namaanak3,tempatlahir3,tanggallahir3,jk3,namaanak4,tempatlahir4,tanggallahir4,jk4,buktiktp,buktikk,buktisim,buktiijazah,buktivaksin) values
		('','$email','$emailperusahaan','$nikkaryawan','$nikktp','$nosim','$namaktp','$namaibu','$tempatlahir','$tanggallahir','$agama','$nowhatsapp','$nobpjs','$nonpwp','$direktorat','$divisi','$statuspernikahan','$jumlahanak','$namasuamiistri','$nowhatsappkeluarga','$tempatlahirkeluarga','$tanggallahirkeluarga','$namaanak1','$tempatlahir1','$tanggallahir1','$jk1','$namaanak2','$tempatlahir2','$tanggallahir2','$jk2','$namaanak3','$tempatlahir3','$tanggallahir3','$jk3','$namaanak4','$tempatlahir4','$tanggallahir4','$jk4','$buktiktp','$buktikk','$buktisim','$buktiijazah','$buktivaksin')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

var_dump($sql);
die();


//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>