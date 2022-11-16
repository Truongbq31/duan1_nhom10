<section class="section section--first section--bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h1 class="section__title">Catalog list</h1>
					<!-- end section title -->

					<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Catalog list</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end page title -->

<!-- filter -->
<div class="filter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="filter__content">
					<div class="filter__items">
						<!-- filter item -->
						<div class="filter__item" id="filter__genre">
							<span class="filter__item-label">GENRE:</span>

							<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Action/Adventure">
								<span></span>
							</div>

							<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
								<li>Action/Adventure</li>
								<li>Animals</li>
								<li>Animation</li>
								<li>Biography</li>
								<li>Comedy</li>
								<li>Cooking</li>
								<li>Dance</li>
								<li>Documentary</li>
								<li>Drama</li>
								<li>Education</li>
								<li>Entertainment</li>
								<li>Family</li>
								<li>Fantasy</li>
								<li>History</li>
								<li>Horror</li>
								<li>Independent</li>
								<li>International</li>
								<li>Kids</li>
								<li>Kids & Family</li>
								<li>Medical</li>
								<li>Military/War</li>
								<li>Music</li>
								<li>Musical</li>
								<li>Mystery/Crime</li>
								<li>Nature</li>
								<li>Paranormal</li>
								<li>Politics</li>
								<li>Racing</li>
								<li>Romance</li>
								<li>Sci-Fi/Horror</li>
								<li>Science</li>
								<li>Science Fiction</li>
								<li>Science/Nature</li>
								<li>Spanish</li>
								<li>Travel</li>
								<li>Western</li>
							</ul>
						</div>
						<!-- end filter item -->

						<!-- filter item -->
						<div class="filter__item" id="filter__quality">
							<span class="filter__item-label">QUALITY:</span>

							<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="HD 1080">
								<span></span>
							</div>

							<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
								<li>HD 1080</li>
								<li>HD 720</li>
								<li>DVD</li>
								<li>TS</li>
							</ul>
						</div>
						<!-- end filter item -->

						<!-- filter item -->
						<div class="filter__item" id="filter__rate">
							<span class="filter__item-label">IMBd:</span>

							<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<div class="filter__range">
									<div id="filter__imbd-start"></div>
									<div id="filter__imbd-end"></div>
								</div>
								<span></span>
							</div>

							<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
								<div id="filter__imbd"></div>
							</div>
						</div>
						<!-- end filter item -->

						<!-- filter item -->
						<div class="filter__item" id="filter__year">
							<span class="filter__item-label">RELEASE YEAR:</span>

							<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<div class="filter__range">
									<div id="filter__years-start"></div>
									<div id="filter__years-end"></div>
								</div>
								<span></span>
							</div>

							<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
								<div id="filter__years"></div>
							</div>
						</div>
						<!-- end filter item -->
					</div>
					
					<!-- filter btn -->
					<button class="filter__btn" type="button">apply filter</button>
					<!-- end filter btn -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end filter -->

<!-- catalog -->
<div class="catalog">
	<div class="container">
		<div class="row row--grid">
			<!-- card -->
			<div class="col-6 col-sm-12 col-lg-6">
				<div class="card card--list">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>

					<div class="card__content">
						<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
						<span class="card__category">
							<a href="#">Action</a>
							<a href="#">Triler</a>
						</span>

						<div class="card__wrap">
							<span class="card__rate"> 8.4</span>

							<ul class="card__list">
								<li>HD</li>
								<li>16+</li>
							</ul>
						</div>

						<div class="card__description">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-12 col-lg-6">
				<div class="card card--list">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover2.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>

					<div class="card__content">
						<h3 class="card__title"><a href="#">Benched</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
						</span>

						<div class="card__wrap">
							<span class="card__rate"> 7.1</span>

							<ul class="card__list">
								<li>FHD</li>
								<li>18+</li>
							</ul>
						</div>

						<div class="card__description">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-12 col-lg-6">
				<div class="card card--list">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover3.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>

					<div class="card__content">
						<h3 class="card__title"><a href="#">Whitney</a></h3>
						<span class="card__category">
							<a href="#">Romance</a>
							<a href="#">Drama</a>
							<a href="#">Music</a>
						</span>

						<div class="card__wrap">
							<span class="card__rate"> 6.3</span>

							<ul class="card__list">
								<li>HD</li>
								<li>12+</li>
							</ul>
						</div>

						<div class="card__description">
							<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-12 col-lg-6">
				<div class="card card--list">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover4.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>

					<div class="card__content">
						<h3 class="card__title"><a href="#">Blindspotting</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
							<a href="#">Drama</a>
						</span>

						<div class="card__wrap">
							<span class="card__rate"> 7.9</span>

							<ul class="card__list">
								<li>HD</li>
								<li>16+</li>
							</ul>
						</div>

						<div class="card__description">
							<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-12 col-lg-6">
				<div class="card card--list">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover5.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>

					<div class="card__content">
						<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
						<span class="card__category">
							<a href="#">Action</a>
							<a href="#">Triler</a>
						</span>

						<div class="card__wrap">
							<span class="card__rate"> 8.4</span>

							<ul class="card__list">
								<li>HD</li>
								<li>12+</li>
							</ul>
						</div>

						<div class="card__description">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-12 col-lg-6">
				<div class="card card--list">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover6.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>

					<div class="card__content">
						<h3 class="card__title"><a href="#">Benched</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
						</span>

						<div class="card__wrap">
							<span class="card__rate"> 7.1</span>

							<ul class="card__list">
								<li>HD</li>
								<li>16+</li>
							</ul>
						</div>

						<div class="card__description">
							<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end card -->
		</div>

		<div class="row">
			<!-- paginator -->
			<div class="col-12">
				<ul class="paginator">
					<li class="paginator__item paginator__item--prev">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z"/></svg></a>
					</li>
					<li class="paginator__item"><a href="#">1</a></li>
					<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
					<li class="paginator__item"><a href="#">3</a></li>
					<li class="paginator__item"><a href="#">4</a></li>
					<li class="paginator__item paginator__item--next">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z"/></svg></a>
					</li>
				</ul>
			</div>
			<!-- end paginator -->
		</div>
	</div>
</div>
<!-- end catalog -->

<!-- expected premiere -->
<section class="section section--bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/section/section.jpg">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<h2 class="section__title">Expected premiere</h2>
			</div>
			<!-- end section title -->
		</div>

		<div class="row row--grid">
			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
						<span class="card__category">
							<a href="#">Action</a>
							<a href="#">Triler</a>
						</span>
						<span class="card__rate">8.4</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover3.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Benched</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
						</span>
						<span class="card__rate">7.1</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover2.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Whitney</a></h3>
						<span class="card__category">
							<a href="#">Romance</a>
							<a href="#">Drama</a>
							<a href="#">Music</a>
						</span>
						<span class="card__rate">6.3</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover6.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Blindspotting</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
							<a href="#">Drama</a>
						</span>
						<span class="card__rate">7.9</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover4.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
						<span class="card__category">
							<a href="#">Action</a>
							<a href="#">Triler</a>
						</span>
						<span class="card__rate">8.4</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="index.php?act=details1" class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover5.jpg" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Benched</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
						</span>
						<span class="card__rate">7.1</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- section btn -->
			<div class="col-12">
				<a href="#" class="section__btn">Show more</a>
			</div>
			<!-- end section btn -->
		</div>
	</div>
</section>