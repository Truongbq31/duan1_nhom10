<header class="header">
	<div class="header__content">
		<!-- header logo -->
		<a href="index.html" class="header__logo">
			<img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/logo.svg" alt="">
		</a>
		<!-- end header logo -->

		<!-- header menu btn -->
		<button class="header__btn" type="button">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- end header menu btn -->
	</div>
</header>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/css/magnific-popup.css">
	<link rel="stylesheet" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/css/select2.min.css">
	<link rel="stylesheet" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/css/admin.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/jquery-3.6.0.min.js"></script>
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/bootstrap.bundle.min.js"></script>
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/jquery.magnific-popup.min.js"></script>
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/jquery.mousewheel.min.js"></script>
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/select2.min.js"></script>
	<script src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/js/admin.js"></script>
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="public/assetss/libs/jquery/distt/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->

    <script src="https://kit.fontawesome.com/ef9e733f3a.js" crossorigin="anonymous"></script>
</head>
<main class="main">
	<div class="container">

		<div class="row row--grid">
			<!-- stats -->
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>TỔNG SỐ LƯỢNG VÉ BÁN RA</span>
					<p><?= $sum_all->Sum_ghe_ngoi ?> Vé</p>
					<img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/graph-bar.svg" alt="">
				</div>
			</div>
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>Tổng Comment</span>
					<p><?= $sum_comment->tongcomment ?></p>
					<img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/graph-bar.svg" alt="">
				</div>
			</div>
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>Tổng Phim Được Chiếu</span>
					<p><?= $sum_all->Sum_phim ?></p>
					<img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/graph-bar.svg" alt="">
				</div>
			</div>
			<div class="col-12 col-sm-6 col-xl-3">
				<div class="stats">
					<span>Tổng doanh thu</span>
					<p><?= number_format($sum_all->tong_tien) ?> VNĐ</p>
					<img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/graph-bar.svg" alt="">
				</div>
			</div>


			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/award.svg" alt=""> Phim Nổi Bật</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
								</svg></a>
						</div>
					</div>

					<div class="dashbox__table-wrap">
						<table class="main__table main__table--dash" style="border-collapse: collapse">
							<thead>
								<tr>
									<th>Tên Phim</th>
                                    <th>Số vé bán</th>
									<th>Doanh thu phim</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($phim_noi_bat as $item => $value) { ?>
									<tr>
										<td>
											<div class="main__table-text"><?= $value->name ?></div>
										</td>


                                        <td>
                                            <div class="main__table-text"><?= $value->so_ve_ban ?></div>
                                        </td>
										
										<td>
											<div class="main__table-text "><?= number_format($value->doanh_thu) ?> VNĐ</div>
										</td>
									</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->
			<div class="col-12 col-xl-6">
				<div class="dashbox">
					<div class="dashbox__title">
						<h3><img src="abcd/dmitryvolkov.me/demo/flixgo2.0/admin/img/film.svg" alt="">Thống Kê Chi Tiết</h3>

						<div class="dashbox__wrap">
							<a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
								</svg></a>

						</div>
					</div>

					<div class="dashbox__table-wrap">
						<table class="main__table main__table--dash" >
							<thead>
								<tr>
									<th>Tên Phim</th>
                                    <th>Đánh giá</th>
                                    <th>Số vé bán</th>
                                    <th>Giá vé thấp nhất</th>
                                    <th>Giá vé cao nhất</th>
                                    <th>Doanh thu</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($thong_ke_chi_tiet as $item => $value) { ?>
									<tr>
										<td>
											<div class="main__table-text"><?= $value->name ?> </div>
										</td>
                                        <td>
                                            <div class="main__table-text"><?= $value->rate ?> <i class="fa-solid fa-star"></i></div>
                                        </td>

                                        <td>
                                            <div class="main__table-text"><?= $value->so_ve_ban ?> </div>
                                        </td>
                                        <td>
                                            <div class="main__table-text"><?= number_format($value->gia_thap_nhat) ?> VNĐ</div>
                                        </td>
                                        <td>
                                            <div class="main__table-text"><?= number_format($value->gia_cao_nhat) ?> VNĐ</div>
                                        </td>
										<td>
											<div class="main__table-text "><?= number_format($value->doanh_thu) ?> VNĐ</div>
										</td>
									</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end dashbox -->

			<!-- dashbox -->

			<!-- end dashbox -->
		</div>
	</div>

	<div class="page-wrapper" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<canvas id="myChart" style="width:100%;max-width:600px;margin: auto;"></canvas>
								<script>
									<?php 
									$array_phim=[];
									foreach($result as $item => $value){
										$array_phim[]=$value->name;
									} ?>
									
									 xValues = <?php echo json_encode($array_phim) ?>;
									
									 <?php 
									$array_gia=[];
									foreach($result as $item => $value){
										$array_gia[]=$value->gia_cao_nhat;
									} ?>
									var yValues =  <?php echo json_encode($array_gia) ?>;
									console.log(xValues);
									var barColors = [
										"#b91d47",
										"#00aba9",
										"#2b5797",


									];
									new Chart("myChart", {
										type: "pie",
										data: {
											labels: xValues,
											datasets: [{
												backgroundColor: barColors,
												data: yValues
											}]
										},
										options: {
											title: {
												display: true,
												text: ""
											}
										}
									});
								</script>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script src="public/assetss/libs/popper.js/distt/umd/popper.min.js"></script>
    <script src="public/assetss/libs/bootstrap/distt/js/bootstrap.min.js"></script>
    <script src="public/assetss/libs/perfect-scrollbar/distt/perfect-scrollbar.jquery.min.js"></script>
    <script src="public/assetss/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="public/distt/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="public/distt/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="public/distt/js/custom.min.js"></script>
    
    <!--This page JavaScript -->
    <!-- <script src="public/distt/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="public/assetss/libs/flot/excanvas.js"></script>
    <script src="public/assetss/libs/flot/jquery.flot.js"></script>
    <script src="public/assetss/libs/flot/jquery.flot.pie.js"></script>
    <script src="public/assetss/libs/flot/jquery.flot.time.js"></script>
    <script src="public/assetss/libs/flot/jquery.flot.stack.js"></script>
    <script src="public/assetss/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="public/assetss/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="public/distt/js/pages/chart/chart-page-init.js"></script>