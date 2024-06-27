<?php
include "config.php";
session_start();

if(isset($_POST['girisyap']))
{
	$email=$_POST['E-mail'];
	$parola=$_POST['sifre'];
	$sorgu = $conn->query("select * from uyeler where mail='$email' and parola='$parola'");

	if($sorgu->num_rows>0){
		$cikti = $sorgu->fetch_array();

		$_SESSION['user_id']=$cikti[0];
		$_SESSION['email']=$cikti[2];
		$_SESSION['username']=$cikti[1];
		
		
		echo'
		<div class="conteiner w-50 mx-auto p-3">
			<div class="alert alert-danger" role="alert">
					Giriş Başarılı Yönlendiriliyorsunuz.
			</div>
		</div>';
	
		header("Location: index.php");
		
	}
	else{
		echo'
		<div class="conteiner w-50 mx-auto p-3">
			<div class="alert alert-danger" role="alert">
					Yönlendiriliyorsunuz Mail Adresiniz veya şifreniz yanlış tekrar deneyiniz!
			</div>
		</div>';
		header("Location: giris.php");
		
	}
}
?>