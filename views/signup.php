<?php

// include("models/connect.php");
// if (isset($_POST["btn"])) {
// 	$name = $_POST["username"];
// 	$email = $_POST["email"];
// 	$password = $_POST["password"];
// 	$err = [];

// 	// if (empty($name)) {
// 	// 	$err["name"] = "Bạn cần phải nhập Tên";
// 	// }
// 	// if (empty($email)) {
// 	// 	$err["email"] = "Bạn cần phải nhập Email";
// 	// }
// 	// if (empty($password)) {
// 	// 	$err["pass"] = "Mật khẩu không được để trống";
// 	// }else{
// 	// 	$sql="INSERT INTO signup VALUES('','$name','$email','$password')";
// 	// 	if($conn->exec($sql)){
// 	// 		$_SESSION["name"]=$name;

// 	// 	}		


// 	// }
// 	$sql = "INSERT INTO signup VALUES('','$name','$email','$password')";
// 	session_start();
// 	if ($conn->exec($sql)) {
// 		$_SESSION["name"] = $name;
// 		header("location:views/index2.php");
// 	}
// }


?>



<div class="sign section--bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="sign__content">
					<!-- registration form -->
					<form method="post" class="sign__form">
						<a href="index.php" class="sign__logo">
							<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/logo.svg" alt="">
						</a>

						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Name" name="username">
							<?php
							if (isset($err["name"])) {
							?>
								<span style="color: #fff;"><?php echo $err["name"]; ?></span>
							<?php	} ?>
						</div>


						<div class="sign__group">
							<input type="text" class="sign__input" placeholder="Email" name="email">
							<?php
							if (isset($err["email"])) {
							?>
								<span style="color: #fff;"><?php echo $err["email"]; ?></span>
							<?php	} ?>
						</div>

						<div class="sign__group">
							<input type="password" class="sign__input" placeholder="Password" name="password">
							<?php
							if (isset($err["pass"])) {
							?>
								<span style="color: #fff;"><?php echo $err["pass"]; ?></span>
							<?php	} ?>
						</div>

						<div class="sign__group sign__group--checkbox">
							<input id="remember" name="remember" type="checkbox" checked="checked">
							<label for="remember">I agree to the <a href="privacy.html">Privacy Policy</a></label>
						</div>

						<button class="sign__btn" name="btn">Sign up</button>

						<span class="sign__text">Already have an account? <a href="signin.html">Sign in!</a></span>
					</form>
					<!-- registration form -->
				</div>
			</div>
		</div>
	</div>
</div>