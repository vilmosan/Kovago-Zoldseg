<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!-- Navigation -->
	<?php $page = 'home'; include 'includes/navbar.php'; ?>
	<div id="splash"></div>
	
	<!--- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel" data-interval="7500">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="test/slidex1.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>1. lépés: Ültetés</h5>
					<p>Előkészített talajba a megfelelő helyre</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="test/slidex2.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>2. lépés: Gondozás</h5>
					<p>Több évnyi tapasztalattal a hátunk mögött</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="test/slidex3.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>3. lépés: Aratás</h5>
					<p>Tisztítás után igazán ínycsiklandóak...</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- Title -->
	<div class="container">
		<div class="row main-title justify-content-center text-center">
			<div class="col-10">
				<h2>Kővágó-Zöldség: A kőbe vésett egészség</h2>
				<p class="lead">Ökoközösségnek tartjuk magunkat, a természettel összhangban élünk a szenvedélyünknek hódolva.</p>
			</div>
		</div>
	</div>

	<!-- Services -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center">SZOLGÁLTATÁSAINK</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4 col-lg-4">
					<div class="feature">
						<img src="img/service-symbol1.png" class="img-fluid">
						<h3>Termesztés</h3>
						<p>A zöldségnövények jellegzetessége, hogy azokat gyakran termesztjük fedett térben, ahol a számukra kedvezőtlen külső körülmények időszakában is előállíthatók. Ezt a termesztési eljárást hajtatásnak nevezzük.</p>
					</div>
				</div>
				<div class="col-10 col-md-5 col-lg-4">
					<div class="feature">
						<img src="img/service-symbol2.png" class="img-fluid">
						<h3>Csomagolás</h3>
						<p>A csomagolópapír környezetbarát, komposztálható, 100%-ban lebomló, újratermeszthető alapanyagokból készül. A csomagolás kivitelezésénél törekszünk a legmagasabb minőségre, anyagtakarékos megoldásokra, az esztétikus, de letisztult formavilágra.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/service-symbol3.png" class="img-fluid">
						<h3>Kiszállítás</h3>
						<p>Számunkra fontos, hogy a csomagszállítás ne szennyező dízel furgonokkal menjen, ahogy ez a világban szinte mindenütt így megy, hanem tiszta, csendes elektromos hajtással.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our team -->
	<div class="container" id="family">
		<div class="row">
			<h1>Családunk</h1>
			<hr />
			<div class="row pt-md">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait1.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Har Mónika</h3>
								<span class="post">Kertész</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Har Mónika</h1>
					<h2>Igazgató / Pénzügy</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait2.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Zsíros B. Ödön</h3>
								<span class="post">Projektfelelős</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Zsíros B. Ödön</h1>
					<h2>Projektfelelős</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait3.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Major Anna</h3>
								<span class="post">Ötletgazda / Kertész</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Major Anna</h1>
					<h2>Ötletgazda / Kertész</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait4.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Kala Pál</h3>
								<span class="post">Kapálás</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Kala Pál</h1>
					<h2>Kapálás</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait5.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Kukor Ica</h3>
								<span class="post">Locsolás</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Kukor Ica</h1>
					<h2>Locsolás</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait6.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Pop Simon</h3>
								<span class="post">Gereblyézés</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Pop Simon</h1>
					<h2>Gereblyézés</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait7.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Mezei Virág </h3>
								<span class="post">Gyomlálás</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Mezei Virág </h1>
					<h2>Gyomlálás</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 team">
					<div class="box">
						<img src="img/reviewer-portrait8.jpg" alt="">
						<div class="box-content">
							<div class="content">
								<h3 class="title">Szüret Elek </h3>
								<span class="post">Tereprendezés</span>
							</div>
							<ul class="icon">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<h1>Szüret Elek </h1>
					<h2>Tereprendezés</h2>
					<hr />
					<p class="text-justify">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
			</div>
		</div>
	</div>

	<!--- Quote and PIC -->
	<div class="container">
		<div class="row justify-content-center py-5">
		
			<div class="col-lg-6 mx-auto">

				<!-- CUSTOM BLOCKQUOTE -->
				<blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
					<div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
					<p class="mb-0 mt-2 font-italic">"Kővágótöttös Baranya megyében, Pécstől 12 km-re a Mecsek hegység délnyugati lábánál fekvő település.<br>Festői környezetben elhelyezkedő falu kirándulásokra, pihenésre ideális település.<br>Megközelíthető Pécsről Szentlőrinc irányába haladva a 6-os számú főközlekedési útról, de elérhető Orfű, Abaliget, Hetvehely felől is.<br>Büszkébbek nem is lehetnénk a Kővágó-Zöldségre, akik számtalanszor támogatták termékeikkel különböző rendezvényeinket.<br><br>Szeretettel várunk és szívesen körbevezetünk minden kedves idelátogató érdeklődőt!</p>
					<footer class="blockquote-footer pt-4 mt-4 border-top">Vizslár Irén |
						<cite title="Source Title">Kővágótöttös polgármestere</cite>
					</footer>
				</blockquote><!-- END -->

			</div>
			<div id="map-container" class="col-lg-6 z-depth-1-half map-container">
			<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73931.68481431984!2d18.032671792876037!3d46.082760642241674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742aea49eeb3b53%3A0x400c4290c1e8e80!2zS8WRdsOhZ8OzdMO2dHTDtnMsIDc2NzU!5e0!3m2!1shu!2shu!4v1467064542398" width="100%" height="600" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
			</div>
			<!-- <div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div> -->
		</div>
	</div>

	<!--- Reviews -->
	<div class="container reviews">
		<div class="row">
			<div class="col-sm-12">			
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<h2>Szakértők a <b>kővágó-zöldségről</b></h2>
					<!-- Carousel indicators -->
					<ol class="carousel-indicators review">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for carousel items -->
					<div class="carousel-inner">
						<div class="item carousel-item active">
							<div class="row">
								<div class="col-sm-6">
									<div class="testimonial">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
									</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/reviewer-portrait1.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Har Mónika </b></div>
												<div class="details">Igazgató / ISO Fruit</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="testimonial">
										<p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
									</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/reviewer-portrait2.jpg" alt="">
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Zsíros B. Ödön</b></div>
												<div class="details">Igazgató / PARMEN Zöldség</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>
							</div>			
						</div>
						<div class="item carousel-item">
							<div class="row">
								<div class="col-sm-6">
									<div class="testimonial">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
									</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/reviewer-portrait3.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Major Anna</b></div>
												<div class="details">Igazgató-helyettes / Beregi Zöldség</div>											
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="testimonial">
										<p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
									</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/reviewer-portrait4.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Kala Pál</b></div>
												<div class="details">Igazgató / Garten Kft.</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>
							</div>			
						</div>
						<div class="item carousel-item">
							<div class="row">
								<div class="col-sm-6">
									<div class="testimonial">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
									</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/reviewer-portrait5.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Kukor Ica</b></div>
												<div class="details">Igazgató / AGRO-FRESH Kft.</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="testimonial">
										<p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus quam.</p>
									</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="img/reviewer-portrait6.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Pop Simon</b></div>
												<div class="details">Igazgató / Zöldség-Mix Kft.</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>
							</div>			
						</div>
					</div>
					<!-- Carousel controls -->
					<a class="carousel-control left carousel-control-prev" role="button" href="#myCarousel" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control right carousel-control-next" role="button" href="#myCarousel" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include 'includes/footer.php'; ?>
	

<!--- Script Source Files -->
<?php include 'includes/scripts.php'; ?>

</body>
</html>