<?php
include "config.php";
session_start();

if(isset($_POST['girisyap']))
{
	$email=$_POST['E-mail'];
	$parola=$_POST['sifre'];
	$sorgu = $conn->query("select * from users where email='$email' and password='$parola'");

	if($sorgu->num_rows>0){
		$cikti = $sorgu->fetch_array();

		$_SESSION['id']=$cikti[0];
		$_SESSION['mail']=$cikti[3];
		$_SESSION['ad']=$cikti[1];
		$_SESSION['soyad']=$cikti[2];
		
		
		echo'
		<div class="conteiner w-50 mx-auto p-3">
			<div class="alert alert-danger" role="alert">
					Giriş Başarılı Yönlendiriliyorsunuz.
			</div>
		</div>';
	
		//header("Location: index.php");
		header('Refresh: 1; url=http://localhost:proje/index.php');
	}
	else{
		echo'
		<div class="conteiner w-50 mx-auto p-3">
			<div class="alert alert-danger" role="alert">
					Yönlendiriliyorsunuz Mail Adresiniz veya şifreniz yanlış tekrar deneyiniz!
			</div>
		</div>';
		//header("Location: giris.php");
		header('Refresh: 1; url=http://localhost:proje/giris.php');
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php 
	include 'navbar.php';
	?>
      <section> 
        <div class="container w-25 mx-auto">
            <form action="g-islem.php" method="post" class="girisyap">
            <div class="w-100 mb-3 bg-input text-dark rounded-2 text-center">
                    <span>Hoşgeldiniz</span>

                </div>
                <div class="w-100 mb-3">
                  <label class="form-label">E-mail</label>
                  <input type="text" name="E-mail" class="form-control border border-info" placeholder=" E-mail Giriniz" required>
                </div>
                <div class="w-100  mb-3" >
                  <label class="form-label">Parola</label>
                  <input type="password" name="sifre" class="form-control border border-info" placeholder=" Parola Giriniz" required>
                  
                </div>
              <div>
                <button " class="btn btn-primary" name="girisyap">Giriş Yap</button>

              </div>
            </form> 

        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>