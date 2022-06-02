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
	<link rel="icon" href="/PreReq/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/PreReq/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="/PreReq/js/html5shiv.min.js"></script>
	<script src="/PreReq/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="/PreReq/css/color/color-1.css">

</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>

                            <li><a href="{{ route('/userProfile')}}">{{$User->name}}</a></li>
							<li>
                                <form action="{{route('logout') }}" method="POST">
                                    @csrf
                                    <button  style="background-color: #4C1864;color:white;border-radius:5px; border:none;width:70PX;height:40px"   type="submit">LOGOUT</button>
                                </form>
                            </li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="index.html"><img src="/PreReq/images/logo.png" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="index.html"><img src="/PreReq/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Home</a>

							</li>



								</ul>
							</li>



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
        <div class="page-banner ovbl-dark" style="background-image:url(/PreReq/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Events</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Events</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">

                    <center>
                        @if ($Events->count()==0)
                        <div class="alert alert-warning" role="alert"  >
                           There is no Event
                          </div>
                          @else
                        </center>

                </div>


					<div class="feature-filters clearfix center m-b40">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active">
								<input type="radio">
								<a href="#"><span>All</span></a>
							</li>
							<li data-filter="happening" class="btn">
								<input type="radio">
								<a href="#"><span>Happening</span></a>
							</li>
							<li data-filter="upcoming" class="btn">
								<input type="radio">
								<a href="#"><span>Upcoming</span></a>
							</li>
							<li data-filter="expired" class="btn">
								<input type="radio">
								<a href="#"><span>Expired</span></a>
							</li>
						</ul>
					</div>
                    @endif

					<div class="clearfix">
                    <ul  style="list-style: none;" id="masonry" class="ttr-gallery-listing magnific-image row">

                        @foreach ($Events as $event )
                            <li class="action-card col-lg-6 col-md-6 col-sm-12  upcoming" >
                                <div class="event-bx m-b30">
                                    <div class="action-box" style="width:100%;height:250px">
                                        <img   src="{{$event->ev_pic}}" alt="">
									</div>
									<div class="info-bx d-flex">
                                        <div>
											<div class="event-time">
                                                <div class="event-date">{{ date('Y', strtotime($event->ev_date));  }}</div>
												<div class="event-month">{{ date('M', strtotime($event->ev_date));  }}</div>
											</div>
										</div>
										<div class="event-info">
                                            <h4 class="event-title"><a href="#">{{$event->ev_name }}</a></h4>
											<ul class="media-post">
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
												<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                                <br>
                                               $ <li><a href="#"> Prix:200$</a></li>
											</ul>
											<p>{{$event->ev_describ }}</p>
										</div>
                                        @if (!$event->part)
                                        <a href="{{  route('Participate',[$User->id,$event->id])}}" class="btn btn-primery "  style="height:55px;padding:52px ;font-weight: bold"  >Participate</a>

                                        @else

                                        <a href="{{  route('UnParticipate',[$User->id,$event->id])}}" class="btn btn-primery "  style="height:55px;padding:20px ;font-weight: bold"  >UnParticipate</a>
                                        @endif
									</div>
								</div>
							</li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="/PreReq/images/logo-white.png" alt=""/></a>
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
							<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="http://educhamp.themetrades.com/demo//PreReq/script/mailchamp.php" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
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
										<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
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
                            <ul class="magnific-image">
								<li><a href="/PreReq/images/gallery/pic1.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic2.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic3.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic4.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic5.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic6.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic7.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="/PreReq/images/gallery/pic8.jpg" class="magnific-anchor"><img src="/PreReq/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>
<!-- External JavaScripts -->
<script src="/PreReq/js/jquery.min.js"></script>
<script src="/PreReq/vendors/bootstrap/js/popper.min.js"></script>
<script src="/PreReq/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/PreReq/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/PreReq/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="/PreReq/vendors/magnific-popup/magnific-popup.js"></script>
<script src="/PreReq/vendors/counter/waypoints-min.js"></script>
<script src="/PreReq/vendors/counter/counterup.min.js"></script>
<script src="/PreReq/vendors/imagesloaded/imagesloaded.js"></script>
<script src="/PreReq/vendors/masonry/masonry.js"></script>
<script src="/PreReq/vendors/masonry/filter.js"></script>
<script src="/PreReq/vendors/owl-carousel/owl.carousel.js"></script>
<script src="/PreReq/js/functions.js"></script>
<script src="/PreReq/js/contact.js"></script>

</body>

</html>
