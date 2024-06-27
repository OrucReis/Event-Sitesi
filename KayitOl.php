<?php
include "config.php";

if(isset($_POST['kayit'])){
		$ad= $_POST['ad'];
		$soyad=$_POST['soyad'];
		$email=$_POST['e-mail'];
		$sif=$_POST['sif'];
		$ekle="INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
		
		if($conn->query($ekle)){
			if($sif!=$sif2){
				echo'<div class="alert alert-danger" role="alert">
					Şifreniz Birbiri ile aynı değil!
				</div>';
			}
			else{
			echo'<div class="alert alert-success" role="alert">
					Başarılı Bir Şekilde Kayıt Oldunuz.
				</div>';
			}
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
            <form class="form" action="KayitOl.php" method="post">
            <div class="w-100 mb-3 bg-input text-dark rounded-2 text-center">
                    <span>Hoşgeldiniz</span>

                </div>
                <div class="w-100 mb-3">
                  <label class="form-label">E-Posta</label>
                  <input name="e-mail" type="text" class="form-control border border-info" placeholder=" E-posta Giriniz" required>
                </div>

                <div class="w-100  mb-3" >
                  <label class="form-label">Ad</label>
                  <input name="ad" type="text" class="form-control border border-info" placeholder=" Adınızı Giriniz" required>                
                </div>

                <div class="w-100 mb-3">
                  <label class="form-label">Soyad</label>
                  <input name="soyad" type="text" class="form-control border border-info" placeholder=" Soyadınızı Giriniz" required>
                </div>
                <div class="w-100 mb-3">
                  <label class="form-label">Parola</label>
                  <input name="sif" type="text" class="form-control border border-info" placeholder=" Parola Giriniz" required>
                </div>
				<div>
                <button type="button" class="btn btn-primary" name="kayit">Kayıt Yap</button>
				</div>
            </form> 

        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>