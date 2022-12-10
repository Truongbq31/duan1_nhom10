


<section class="home">
	<!-- home bg -->
	<div class="owl-carousel home__bg">
		<div class="item home__cover" data-bg="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/home/home__bg.jpg"></div>
		<div class="item home__cover" data-bg="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/home/home__bg2.jpg"></div>
		<div class="item home__cover" data-bg="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/home/home__bg3.jpg"></div>
		<div class="item home__cover" data-bg="public/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/home/home__bg4.jpg"></div>
	</div>
	<!-- end home bg -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="home__title"><b>PHIM MỚI</b> CẬP NHẬT</h1>

				<button class="home__nav home__nav--prev" aria-label="prev card" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg>
				</button>
				<button class="home__nav home__nav--next" aria-label="next card" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg>
				</button>
			</div>

			<div class="col-12">

				<div class="owl-carousel home__carousel">
				<?php

				foreach($phim as $item => $value){?>
					<!-- card -->
					<div class="card card--big">
						<a href="details.php?id=<?php echo $value->id_phim?>" class="card__cover">
							<img height="350px" src="admin/public/img/<?= $value->img?>" alt="" >
							<span class="card__play">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
							</span>
						</a>
						<div class="card__content">
							<h3 class="card__title"><a href="#"><?= $value->name?></a></h3>
							<span class="card__category">
								<a href="ds_phim.php?id=<?php echo $value->id_loai_phim?>"><?= $value->ten_loai ?></a>

							</span>
							<span class="card__rate"> <?= $value->rate ?></span>

						</div>
					</div>
					<?php } ?>
					<!-- end card -->
				</div>
				<
			</div>

		</div>
	</div>
</section>
<!-- end home -->

<!-- content -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- content title -->
					<h2 class="content__title">Danh mục phim đặc sắc</h2>
					<!-- end content title -->

					<!-- content tabs nav -->
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Đánh giá cao</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Hành động</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Kinh dị</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Tình cảm</a>
						</li>
					</ul>
					<!-- end content tabs nav -->

					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<input type="button" value="New items">
							<span></span>
						</div>

						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Mới cập nhật</a></li>

								<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Hành động</a></li>

								<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Kinh dị</a></li>

								<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Tình cảm</a></li>
							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- content tabs -->
		<div class="tab-content" id="myTabContent">

<!--            Đánh giá cao-->
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				<div class="row row--grid">
					<!-- card -->
                    <?php foreach ($phim as $items => $value){
                            if($value->rate >= 4){
                     ?>
					<div class="col-6 col-sm-12 col-lg-6">
						<div class="card card--list">
							<a href="details.php?id=<?php echo $value->id_phim?>" class="card__cover">
								<img style="height: 200px" src="admin/public/img/<?php echo $value->img;?>" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>

							<div class="card__content">
								<h3 class="card__title"><a href="#"><?php echo $value->name;?></a></h3>
								<span class="card__category">
									<a href="#"><?php echo $value->ten_loai;?></a>
									<a href="#">Triler</a>
								</span>

								<div class="card__wrap">
									<span class="card__rate"><?php echo $value->rate;?></span>

									<ul class="card__list">
										<li>HD</li>
										<li>16+</li>
									</ul>
								</div>

								<div class="card__description">
                                    <p><?php echo $value->description;?></p>
								</div>
							</div>
						</div>
					</div>
                    <?php }} ?>
					<!-- end card -->

				</div>
			</div>
<!--            Kết thúc-->

<!--            Hành động-->
			<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
				<div class="row row--grid">
					<!-- card -->
                    <?php foreach ($phim as $items => $values){
                        if ($values->id_loai_phim == 1){

                         ?>
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details.php?id=<?php echo $values->id_phim?>" class="card__cover">
								<img src="admin/public/img/<?php echo $values->img;?>" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#"><?php echo $values->name;?></a></h3>
								<span class="card__category">
									<a href="#"><?php echo $values->ten_loai;?></a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate"><?php echo $values->rate;?></span>
							</div>
						</div>
					</div>
                    <?php }} ?>
					<!-- end card -->
				</div>
			</div>

<!--            kinh dị-->
			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
                <div class="row row--grid">
                    <!-- card -->
                    <?php foreach ($phim as $items => $values){
                        if ($values->id_loai_phim == 2){

                            ?>
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <a href="details.php?id=<?php echo $values->id_phim?>" class="card__cover">
                                        <img src="admin/public/img/<?php echo $values->img;?>" alt="">
                                        <span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
                                    </a>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#"><?php echo $values->name;?></a></h3>
                                        <span class="card__category">
									<a href="#"><?php echo $values->ten_loai;?></a>
									<a href="#">Triler</a>
								</span>
                                        <span class="card__rate"><?php echo $values->rate;?></span>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    <!-- end card -->
                </div>
			</div>


            <!--tình cảm-->
			<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
                <div class="row row--grid">
                    <!-- card -->
                    <?php foreach ($phim as $items => $values){
                        if ($values->id_loai_phim == 3){
                            ?>
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <a href="details.php?id=<?php echo $values->id_phim?>" class="card__cover">
                                        <img src="admin/public/img/<?php echo $values->img;?>" alt="">
                                        <span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
                                    </a>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#"><?php echo $values->name;?></a></h3>
                                        <span class="card__category">
									<a href="#"><?php echo $values->ten_loai;?></a>
									<a href="#">Triler</a>
								</span>
                                        <span class="card__rate"><?php echo $values->rate;?></span>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    <!-- end card -->
                </div>
			</div>
		</div>
		<!-- end content tabs -->
	</div>
</section>
<!-- end content -->


