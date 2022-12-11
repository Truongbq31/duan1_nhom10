
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/flixgo2.0/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 18:07:30 GMT -->



<body class="body">

	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.php" class="header__logo">
								<img style="max-width: 100%; height: 100%" src="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/logo_du_an1.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="header__nav-link" href="index.php">home</a>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể loại <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
										</svg></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
                                        <?php
                                        include("models/m_theloai.php");
                                        $m_theloai = new m_theloai();
                                        $theloai = $m_theloai->doc_theloai();

                                        foreach ($theloai as $key => $value){
                                            ?>

										<li><a href="ds_phim.php?id=<?php echo $value->id;?>"> <?php echo $value->ten_loai;?> </a></li>

                                        <?php
                                        } ?>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item" <?php if(isset($_SESSION['id_nguoi_dung'])){
                                    echo "";
                                }else{
                                    echo "hidden";
                                } ?>>
									<a class="header__nav-link" href="ve_da_dat.php?id_nguoi_dung=<?php echo $_SESSION['id_nguoi_dung']?>">VÉ ĐÃ ĐẶT</a>
								</li>


								<!-- dropdown -->
<!--								<li class="dropdown header__nav-item">-->
<!--									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">-->
<!--											<path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z" />-->
<!--										</svg>-->
<!--									</a>-->
<!---->
<!--									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">-->
<!--										<li><a href="index.php?act=about">About</a></li>-->
<!--										<li><a href="index.php?act=profile">Profile</a></li>-->
<!--										<li><a href="index.php?act=signin">Sign In</a></li>-->
<!--										<li><a href="index.php?act=signup">Sign Up</a></li>-->
<!--										<li><a href="index.php?act=forgot">Forgot password</a></li>-->
<!--										<li><a href="index.php?act=privacy">Privacy Policy</a></li>-->
<!--										<li><a href="index.php?act=contacts">Contacts</a></li>-->
<!--										<li><a href="index.php?act=404page">404 Page</a></li>-->
<!--									</ul>-->
<!--								</li>-->
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
<!--								<button class="header__search-btn" aria-label="search btn" type="button">-->
<!--									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">-->
<!--										<path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z" />-->
<!--									</svg>-->
<!--								</button>-->

								<!-- dropdown -->
<!--								<div class="dropdown header__lang">-->
<!--									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>-->
<!---->
<!--									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">-->
<!--										<li><a href="#">English</a></li>-->
<!--										<li><a href="#">Spanish</a></li>-->
<!--										<li><a href="#">Russian</a></li>-->
<!--									</ul>-->
<!--								</div>-->
								<!-- end dropdown -->

								<a href="login.php" class="header__sign-in" <?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
                                    echo "hidden";
                                }else{
                                    echo "";
                                } ?>>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z" />
									</svg>
									<span>Đăng nhập</span>
								</a>

                                <a href="logout.php" class="header__sign-in" <?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
                                    echo "";
                                }else{
                                    echo "hidden";
                                } ?>>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z" />
                                    </svg>
                                    <span>Đăng Xuất</span>
                                </a>

                                <a <?php if(isset($_SESSION['admin'])){
                                    echo "";
                                }else{
                                    echo "hidden";
                                } ?> href="admin/home.php">Trang quản trị</a>

							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="I'm looking for...">
							<button type="button">Search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->