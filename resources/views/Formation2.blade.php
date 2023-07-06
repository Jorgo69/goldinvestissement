<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>MON COURS : 2 </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/assets.css')}}">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/typography.css')}}">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/shortcodes/shortcodes.css')}}">

	<!-- STYLESHEETS ============================================= -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.css')}}">

</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<!-- Header Top ==== -->
		<header class="header rs-nav header-transparent">
			<div class="top-bar">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="topbar">
							<div class="topbar-left">
								<ul>
									<li><a href="{{ route('faq') }}"><i class="fa fa-question-circle"></i> Questions
										</a></li>
									<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a>
									</li>
								</ul>
							</div>
							
						</div>


					</div>
				</div>
			</div>
			<div class="sticky-header navbar-expand-lg">
				<div class="menu-bar clearfix">
					<div class="container clearfix">
						<!-- Header Logo ==== -->
						<div class="menu-logo">
							<a href="index.html"><img src="{{asset('assets/images/perso/logoJakS.png')}}" alt=""></a>
						</div>
						<!-- Mobile Nav Button ==== -->
						<button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
							data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
							aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- Author Nav ==== -->
						<div class="secondary-menu">
							<div class="secondary-inner">
								<ul>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a>
									</li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
									<!-- Search Button ==== -->
									<li class="search-btn"><button id="quik-search-btn" type="button"
											class="btn-link"><i class="fa fa-search"></i></button></li>
								</ul>
							</div>
						</div>
						<!-- Search Box ==== -->
						<div class="nav-search-bar">
							<form action="#">
								<input name="search" value="" type="text" class="form-control"
									placeholder="Type to search">
								<span><i class="ti-search"></i></span>
							</form>
							<span id="search-remove"><i class="ti-close"></i></span>
						</div>
						<!-- Navigation Menu ==== -->
						<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
							<div class="menu-logo">
								<a href="index.html"><img src="{assets/images/logo.png}" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ route('accueil')}}">Accueil </a> </li>

								<li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
										<li><a href="{{ route('about') }}"> A propos de Nous <i
													class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="{{ route('faq') }}">FAQ's<i class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="{{ route('contact') }}"> Nous Contacter <i
													class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</li>

								{{-- Pages --}}

								<li class="add-mega-menu"><a href="javascript:;"> Cours <i
											class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu add-menu">
										<li class="add-menu-left">
											<h5 class="menu-adv-title">Mes Courses</h5>
											<ul>
												<li><a href="{{ route('courses')}}"> Formations </a></li>
												{{-- <li><a href="{{ route('ourCourses')}}"> Details Formations</a></li>
												--}}
											</ul>
										</li>
										<li class="add-menu-right">
											<img src="assets/images/perso/logoJak.png" alt="" />
										</li>
									</ul>
								</li>

								{{-- Blogs --}}

								<li class="nav"><a href="javascript:;">Mon Dashboard </a>
									<ul class="sub-menu">
										<li><a href="{{ route('profile') }}"> Mes Informations </a></li>
										{{-- <li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
											<ul class="sub-menu">
												<li><a href="admin/mailbox.html">Mailbox</a></li>
												<li><a href="admin/mailbox-compose.html">Compose</a></li>
												<li><a href="admin/mailbox-read.html">Mail Read</a></li>
											</ul>
										</li> --}}
									</ul>
								</li>
							</ul>
							<div class="nav-social-link">
								<a href="javascript:;"><i class="fa fa-facebook"></i></a>
								<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
								<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<!-- Navigation Menu END ==== -->
					</div>
				</div>
			</div>
		</header>
		<!-- header END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div id="image" class="page-banner ovbl-dark"
				style="background-image:url({{asset('https://images.pexels.com/photos/12626244/pexels-photo-12626244.jpeg?auto=compress&cs=tinysrgb&w=600')}});">
				{{-- <div class="page-banner ovbl-dark"
					style="background-image:url({{asset('assets/images/banner/bg-1.jpg')}});"> --}}
					<style>
						#id{
							/* background-image: blue; */
						}
					</style>
					<div class="container">
						<div class="page-banner-entry">
							<h1 class="text-white"> Mon Cours</h1>
						</div>
					</div>
				</div>

				<!-- inner page banner END -->

			{{-- Body Of Courses --}}
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row mb-4">
                {{-- Progression Bar --}}
                {{-- <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 10%">67%</div>
                </div> --}}
                {{-- End Progression Bar --}}
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                    <div class="course-detail-bx">
                        
                        <div class="course-buy-now text-center">
                            <a href="#" class="btn radius-xl text-uppercase"> Concernant ce Cours</a>
                        </div>
                        <div class="teacher-bx">
                            <div class="teacher-info">
                                <div class="teacher-thumb">
                                    <img src="{{asset('assets/images/testimonials/pic1.jpg')}}" alt="" />
                                </div>
                                <div class="teacher-name">
                                    <h5>Mr Jak Goldinvestissement</h5>
                                    <span>Professuer et investisseur</span>
                                </div>
                            </div>
                        </div>
                        <div class="cours-more-info">
                            <div class="review">
                                <span>3 Review</span>
                                <ul class="cours-star">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="price categories">
                                <span>Categories</span>
                                <h5 class="text-primary"> {{$courses -> categorie_cours }}</h5>
                            </div>
                        </div>
                        <div class="course-info-list scroll-page">
                            <ul class="navbar">
                                <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a>
                                </li>
                                <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-12">
				
                    <div class="courses-post">
					    <div class="m-b30" id="curriculum">
								<h4>Curriculum</h4>
								<ul class="curriculum-list">
										<li>
											<h5>Second Level</h5>
											<ul>
												<li>
													<div class="curriculum-list-box">
														<span>Lesson </span> {{$courses -> plan_deux }}
													</div>
													<span>110 minutes</span>
												</li>
												
											</ul>
										</li>
								
									</ul>
							</div>
                        <div class="ttr-post-media media-effect">
                            <video controls autoplay width="800" controlsList="nodownload">
                                <source
                                    src="/storage/public/images/video_un/React Chapitre 2, Nos premiers pas avec React.mp4"
                                   controls =nodownload type="video/mp4" />
                            </video>
                        </div>
                        <div class="ttr-post-info">
                            <div class="ttr-post-title ">
                                <h2 class="post-title">{{$courses -> titre_cours }}</h2>
                            </div>
                            <div class="ttr-post-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled
                                    it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
              
               
                    <div class="" id="instructor">
                        <h4>Instructor</h4>
                        <div class="instructor-bx">
                            <div class="instructor-author">
                                <img src="{{asset('assets/images/testimonials/pic1.jpg')}}" alt="">
                            </div>
                            <div class="instructor-info">
                                <h6>Mr Jak Goldinvestissement </h6>
                                <span>Professor et Expert en placement de Biens</span>
                                <ul class="list-inline m-tb10">
                                    <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" class="btn sharp-sm google-plus"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since
                                    the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to
                                    make a type specimen book. It has survived not only five centuries
                                </p>
                            </div>
		
                        </div>
						<center><a class="btn btn-primary" href="{{ route ('Mon cours') }}"  role="button"style="margin left='60px">Arrière</a>
<a class="btn btn-primary" href="{{ route ('Mon cours3') }}" role="button">Suivant</a></center>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
{{-- Body Of Courses End --}}
				
								
				<!-- Footer ==== -->
				<footer>
					<div class="footer-top">
						<div class="pt-exebar">
							<div class="container">
								<div class="d-flex align-items-stretch">
									<div class="pt-logo mr-auto">
										<a href="index.html"><img src="{{asset('assets/images/perso/logoJak.png')}}" width="50"
												alt="" /></a>
									</div>
									<div class="pt-social-link">
										<ul class="list-inline m-a0">
											<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
									<div class="pt-btn-join">
										<a href="#" class="btn ">Join Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
									<div class="widget">
										<h5 class="footer-title">Sign Up For A Newsletter</h5>
										<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge
											advices on job searching.</p>
										<div class="subscribe-form m-b20">
											<form class="subscription-form"
												action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
												<div class="ajax-message"></div>
												<div class="input-group">
													<input name="email" required="required" class="form-control"
														placeholder="Your Email Address" type="email">
													<span class="input-group-btn">
														<button name="submit" value="Submit" type="submit" class="btn"><i
																class="fa fa-arrow-right"></i></button>
													</span>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-5 col-md-7 col-sm-12">
									<div class="row">
										<div class="col-4 col-lg-4 col-md-4 col-sm-4">
											<div class="widget footer_widget">
												<h5 class="footer-title">Company</h5>
												<ul>
													<li><a href="index.html">Home</a></li>
													<li><a href="about-1.html">About</a></li>
													<li><a href="faq-1.html">FAQs</a></li>
													<li><a href="contact-1.html">Contact</a></li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-lg-4 col-md-4 col-sm-4">
											<div class="widget footer_widget">
												<h5 class="footer-title">Get In Touch</h5>
												<ul>
													<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a>
													</li>
													<li><a href="blog-classic-grid.html">Blog</a></li>
													<li><a href="portfolio.html">Portfolio</a></li>
													<li><a href="event.html">Event</a></li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-lg-4 col-md-4 col-sm-4">
											<div class="widget footer_widget">
												<h5 class="footer-title">Courses</h5>
												<ul>
													<li><a href="courses.html">Courses</a></li>
													<li><a href="courses-details.html">Details</a></li>
													<li><a href="membership.html">Membership</a></li>
													<li><a href="profile.html">Profile</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
									<div class="widget widget_gallery gallery-grid-4">
										<h5 class="footer-title">Our Gallery</h5>
				
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 text-center"><a target="_blank"
										href="https://www.templateshub.net">Templates Hub</a></div>
							</div>
						</div>
					</div>
				</footer>
				<!-- Footer END ==== -->
				<button class="back-to-top fa fa-chevron-up"></button>
				</div>

		<!-- External JavaScripts -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
		<script src="{{asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
		<script src="{{asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
		<script src="{{asset('assets/vendors/counter/waypoints-min.js')}}"></script>
		<script src="{{asset('assets/vendors/counter/counterup.min.js')}}"></script>
		<script src="{{asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
		<script src="{{asset('assets/vendors/masonry/masonry.js')}}"></script>
		<script src="{{asset('assets/vendors/masonry/filter.js')}}"></script>
		<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
		<script src="{{asset('assets/js/jquery.scroller.js')}}"></script>
		<script src="{{asset('assets/js/functions.js')}}"></script>
		<script src="{{asset('assets/js/contact.js')}}"></script>
		<script src="{{asset('assets/vendors/switcher/switcher.js')}}"></script>
</body>

</html>