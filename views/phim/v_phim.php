<section class="section section--first section--bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h1 class="section__title">Danh sách phim</h1>
					<!-- end section title -->

					<!-- breadcrumb -->

					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</div>
<!-- end page title -->


<!-- catalog -->
<div class="catalog">
	<div class="container">
		<div class="row row--grid">
			<!-- card -->
            <?php foreach ($ds_phim as $key => $value){

            ?>
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details.php?id=<?php echo $value->id_phim?>" class="card__cover">
						<img height="250px" src="admin /public/img/<?php echo $value->img?>" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#"><?php echo $value->name?></a></h3>
						<span class="card__category">
							<a href="">Thể Loại: <?php echo $value->ten_loai?></a>
<!--							<a href="#">--><?php //echo $value->description?><!--</a>-->
						</span>
						<span class="card__rate"><?php echo $value->rate?></span>

					</div>
				</div>

			</div>
            <?php
            }
            ?>
			<!-- end card -->
		</div>

	</div>
</div>
<!-- end catalog -->
