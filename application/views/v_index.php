<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=  $judul; ?></title>
	
    <!-- css -->
    <link href="<?= base_url() ;?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ;?>assets/frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ;?>assets/frontend/plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="<?= base_url() ;?>assets/frontend/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?= base_url() ;?>assets/frontend/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ;?>assets/frontend/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?= base_url() ;?>assets/frontend/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?= base_url() ;?>assets/frontend/css/animate.css" rel="stylesheet" />
    <link href="<?= base_url() ;?>assets/frontend/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="<?= base_url() ;?>assets/frontend/bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="<?= base_url() ;?>assets/frontend/color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left"> Buka Senin - Sabtu, 08.00 - 22.00 </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Telephone +62 896 3049 2002</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url() ;?>v_index.php">
                    <img src="<?= base_url() ;?>assets/frontend/img/logo-bar.png" alt="" width="190" height="55" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Beranda</a></li>
				<li><a href="#service">Layanan</a></li>
				<li><a href="#doctor">Buku</a></li>
				<li><a href="#facilities">Fasilitas</a></li>
				<li><a href="#pricing">Harga</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">4</span>Pilihan <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="index.html">Home form</a></li>
					<li><a href="index-video.html">Home video</a></li>
					<li><a href="index-cta.html">Home CTA</a></li>
					<li><a href="<?= base_url() ;?>home/v_login ">Login Admin!</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">E-Perpustakaan</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Memberikan <span class="color">kualitas edukasi terbaik</span> untuk anda.</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Paket premium bulanan yang terjangkau</strong><br/>Mengembangkan infrastruktur perpustakaan nasional yang modern</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Pilih buku favorit buku anda</strong><br/>Mewujudkan tenaga perpustakaan yang kompeten dan profesional.</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Hanya menggunakan lingkungan yang ramah</strong><br/>Mewujudkan koleksi e-book nasioanal yang lengkap dan bermanfaat.</span></li>
						</ul>

						</div>
						</div>
					</div>



					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Daftar Menjadi Member <small>(GRATIS!)</small></h3>
									</div>
									<div class="panel-body">
										<?php echo form_open('home/v_register') ?>
									<form role="form" class="lead">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Nama Depan</label>
													<input type="text" name="nama_depan" id="nama_depan" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Nama Belakang</label>
													<input type="text" name="nama_belakang" id="nama_belakang" class="form-control input-md">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Email</label>
													<input type="email" name="email" id="email" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Nomor Telephone</label>
													<input type="text" name="phone" id="phone" class="form-control input-md">
												</div>
											</div>
										</div>
										
										<input type="submit" name="register" value="Kirim!" class="btn btn-skin btn-block btn-lg">
										
										<?php echo form_close(); ?>

										<p class="lead-footer">* Kami akan menghubungi anda via telephone atau email.</p>
									
									</form>
								</div>
							</div>				
						
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->







	<!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Daftar Menjadi Member</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Dapatkan E-book</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Help by specialist</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Get diagnostic report</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /Section: boxes -->
	
	
	<section id="callaction" class="home-section paddingtop-40">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>Promo E-book Premium Limited Editions!</h3>
									<p>Download Sekarang Juga Buku Terbatas. </p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="#" class="btn btn-skin btn-lg">DOWNLOAD!</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>	
	

	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">

        <div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<img src="<?= base_url() ;?>assets/frontend/img/dummy/img-1.jpg" class="img-responsive" alt="" />
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-stethoscope fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">ISBN</h5>
						<p>Internasional Standard Book Number.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-wheelchair fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">OPAC</h5>
						<p>Onine Public Access Catalog.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-plus-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">IOS</h5>
						<p>Indonesia One Search.</p>
					</div>
                </div>
				</div>


            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-h-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">K-OL</h5>
						<p>Keanggotaan Online E-Perpustakaan.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-filter fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">IPUSNAS</h5>
						<p>Ikatan Perpustakaan Nasional.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user-md fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">E-RES</h5>
						<p>Koleksi Digital Berlangganan.</p>
					</div>
                </div>
				</div>

            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">- Koleksi Unggulan -</h2>
					<p>Membirakan Edukasi Yang Tinggi Dan Bermanfaat.</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Semua (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".bk-anak" class="cbp-filter-item">Anak-Anak (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".bk-dewasa" class="cbp-filter-item">Dewasa (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".bk-lansia" class="cbp-filter-item">Lansia (<div class="cbp-filter-counter"></div>)</div>
            </div>
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item bk-anak">
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?= base_url() ;?>assets/frontend/img/team/bk-anak-1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">LIHAT BUKU</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">-Kategori-</a>
                        <div class="cbp-l-grid-team-position">Anakk-Anak</div>
                    </li>

                    <li class="cbp-item bk-dewasa-2">
                        <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?= base_url() ;?>assets/frontend/img/team/bk-dewasa-2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">LIHAT BUKU</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">-Kategori-</a>
                        <div class="cbp-l-grid-team-position">Dewasa</div>
                    </li>

                    <li class="cbp-item bk-lansia">
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member3.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?= base_url() ;?>assets/frontend/img/team/bk-lansia-1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">LIHAT BUKU</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">-Kategori-</a>
                        <div class="cbp-l-grid-team-position">Lansia</div>
                    </li>

                    <li class="cbp-item bk-dewasa">
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member4.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="<?= base_url() ;?>assets/frontend/img/team/bk-dewasa-2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">LIHAT BUKU</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ;?>assets/frontend/doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">-Kategori-</a>
                        <div class="cbp-l-grid-team-position">Dewasa</div>
                    </li>

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	







		
	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold"> - Fasilitas - </h2>
					<p>Pelayanan Dan Kenyamanan Yang Terjamin.</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="<?= base_url() ;?>assets/frontend/img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="<?= base_url() ;?>assets/frontend/img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="<?= base_url() ;?>assets/frontend/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="<?= base_url() ;?>assets/frontend/img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?= base_url() ;?>assets/frontend/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="<?= base_url() ;?>assets/frontend/img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?= base_url() ;?>assets/frontend/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="<?= base_url() ;?>assets/frontend/img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?= base_url() ;?>assets/frontend/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="<?= base_url() ;?>assets/frontend/img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="<?= base_url() ;?>assets/frontend/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="<?= base_url() ;?>assets/frontend/img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->
	
	




	<!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Emergency Contraception</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">					
								<img src="<?= base_url() ;?>assets/frontend/img/testimonials/1.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Anna</a>
								<span>Chicago, Illinois</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Orthopedic Surgery</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel text-light">
				                <img src="<?= base_url() ;?>assets/frontend/img/testimonials/2.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Matthew G</a>
								<span>San Antonio, Texas</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Medical consultation</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel text-light">
								<img src="<?= base_url() ;?>assets/frontend/img/testimonials/3.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Scarlet Smith</a>
								<span>Dallas, Texas</span>
							</div>
						</div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Birth control pills</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel text-light">
								<img src="<?= base_url() ;?>assets/frontend/img/testimonials/4.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Lucas Thompson</a>
								<span>Austin, Texas</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">Radiology</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
				            </div>
							<div class="person-text rel text-light">
								<img src="<?= base_url() ;?>assets/frontend/img/testimonials/5.jpg" alt="" class="person img-circle" />
						        <a title="" href="#">Ella Mentree</a>
								<span>Fort Worth, Texas</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Cervical Lesions</a>
								<div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
						        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
							</div>
							<div class="person-text rel text-light">
								<img src="<?= base_url() ;?>assets/frontend/img/testimonials/6.jpg" alt="" class="person img-circle" />
								<a title="" href="#">Suzanne Adam</a>
								<span>Detroit, Michigan</span>
							</div>
						</div>
                    </div>
                    
                   
                </div>
				
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
	</section>

	<!-- Section: pricing -->	
	<section id="pricing" class="home-section bg-gray paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">- Harga Buku -</h2>
					<p>Pilih Harga Buku Yang Terbaik Untuk Anda.</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
           
		   <div class="container">
			
			<div class="row">

				<div class="col-sm-4 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.1s">
					<div class="pricing-content general">
						<h2>Basic Fit 1 Package</h2>
						<h3>$33<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-4 pricing-box featured-price">
					<div class="wow bounceInUp" data-wow-delay="0.3s">
					<div class="pricing-content featured">
						<h2>Golden Glow Package</h2>
						<h3>$65<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
							<li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
							<li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

				<div class="col-sm-4 pricing-box">
					<div class="wow bounceInUp" data-wow-delay="0.2s">
					<div class="pricing-content general last">
						<h2>Basic Fit 2 Package</h2>
						<h3>$47<sup>.99</sup> <span>/ one time</span></h3>
						<ul>
							<li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
							<li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
							<li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
							<li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
						</ul>

						<div class="price-bottom">
							<a href="#" class="btn btn-skin btn-lg">Purchase</a>
						</div>
					</div>
					</div>
				</div>

			</div>				
				
            </div>
	</section>	 
	<!-- /Section: pricing -->
	
	<section id="partner" class="home-section paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">- Bekerja Sama -</h2>
					<p>Berterimakasih atas dukungannya dari beberapa departemen di Indonesia.</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
           <div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="<?= base_url() ;?>assets/frontend/img/dummy/partner-1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="<?= base_url() ;?>assets/frontend/img/dummy/partner-2.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="<?= base_url() ;?>assets/frontend/img/dummy/partner-3.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="<?= base_url() ;?>assets/frontend/img/dummy/partner-4.jpg" alt="" /></a>
						</div>
					</div>
				</div>
            </div>
	</section>	



	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Tentang E-Perpus</h5>
						<p>
						E-perpus adalah buku digital Indonesia yang sedang berkembang di bidang tekhnologi edukasi yang memberikan wawasan yang luas dan pendidikan yang baik bagi setiap pembacanya.
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Informasi</h5>
						<ul>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Layanan & Bantuan</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">#</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>E-Perpus center</h5>
						<p>
						Berlokasi di Bogor Jawa Barat.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Senin - Sabtu, 08.00 - 22.00
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 896 3049 2002
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> e-perpus@gmail.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Lokasi</h5>
						<p>Bogor - Bukit Cimanggu City Blok R-8A No11</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Ikuti Kami</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>Hak Cipta &copy;2018 | E-perpus. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/">Bootstrap Themes</a> by AdeNurrahman</p>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="<?= base_url() ;?>assets/frontend/js/jquery.min.js"></script>	 
    <script src="<?= base_url() ;?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ;?>assets/frontend/js/jquery.easing.min.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/js/wow.min.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/js/jquery.scrollTo.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/js/jquery.appear.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/js/stellar.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ;?>assets/frontend/js/nivo-lightbox.min.js"></script>
    <script src="<?= base_url() ;?>assets/frontend/js/custom.js"></script>


</body>

</html>
