
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login/Signup Sistem Rekha</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="form-structor">
	<?php
		echo "<br>";
		echo "<div align='center'><font color='white'>'Sistem Rekomendasi Lahan'</div>";
	?>
	<div class="signup">
		<?php
			echo "<br>";
		?>
		<h2 class="form-title" id="signup"><span>or</span>Log in</h2>
		<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<div align='center'>Login gagal! username dan password salah!</div>";
				}else if($_GET['pesan'] == "logout"){
					echo "Anda telah berhasil logout";
				}else if($_GET['pesan'] == "belum_login"){
					echo "Anda harus login untuk mengakses halaman admin";
				}
			}
		?>
        <form method="post" action="cek_login.php">
		<div class="form-holder">
			<input type="text" name="username" class="input" placeholder="Username" required="" autofocus=""/>
			<input type="password" name="password" class="input" placeholder="Password" required="" autofocus=""/>
		</div>
		<button type="submit" class="submit-btn">Log in</button>
        </form>
    </div>
    

	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Sign up</h2>
            <form method="post" action="prosesdaftar.php">
			<div class="form-holder">
				<input type="text" name="username" class="input" placeholder="Username" required="" autofocus=""/>
				<input type="email" name="email" class="input" placeholder="Email" required="" autofocus=""/>
				<input type="password" name="password" class="input" placeholder="Password" required="" autofocus=""/>
			</div>
			<button type="submit" class="submit-btn">Sign up</button>
            </form>
		</div>
    </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>