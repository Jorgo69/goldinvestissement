@extends('same')



@section('body')



@include('header')





    <!-- Content -->

    <div class="page-content bg-white">

        <!-- inner page banner -->

        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">

            <div class="container">

                <div class="page-banner-entry">

                    <h1 class="text-white">Contact Us 2</h1>

				 </div>

            </div>

        </div>

		<!-- Breadcrumb row -->

		<div class="breadcrumb-row">

			<div class="container">

				<ul class="list-inline">

					<li><a href="#">Home</a></li>

					<li>Contact Us 2</li>

				</ul>

			</div>

		</div>

		<!-- Breadcrumb row END -->

	

        <!-- inner page banner -->

        <div class="page-banner contact-page">

            <div class="container-fuild">

                <div class="row m-lr0">

					<div class="col-lg-6 col-md-6 p-lr0 d-flex">

					<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":531,"width":792,"zoom":17,"queryString":"Rue 2381, Cotonou, Bénin","place_id":"ChIJJ4oD_89VIxARJgfVJiNApxs","satellite":false,"centerCoord":[6.370138801772897,2.3910863000000226],"lang":"fr","cityUrl":"/benin/cadjehoun-353931","cityAnchorText":"Carte de Cadjehoun, Cotonou, Bénin","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"905081"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=905081';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>

					</div>

					<div class="col-lg-6 col-md-6 section-sp2 p-lr30">

						<form class="contact-bx ajax-form" action="http://educhamp.themetrades.com/demo/assets/script/contact.php">

						<div class="ajax-message"></div>

							<div class="heading-bx left p-r15">

								<h2 class="title-head">Get In <span>Touch</span></h2>

								<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>

							</div>

							<div class="row placeani">

								<div class="col-lg-6 ">

									<div class="form-group">

										<div class="input-group">

											<label>Your Name</label>

											<input name="name" type="text" required class="form-control valid-character">

										</div>

									</div>

								</div>

								<div class="col-lg-6">

									<div class="form-group">

										<div class="input-group"> 

											<label>Your Email Address</label>

											<input name="email" type="email" class="form-control" required >

										</div>

									</div>

								</div>

								<div class="col-lg-6">

									<div class="form-group">

										<div class="input-group">

											<label>Your Phone</label>

											<input name="phone" type="text" required class="form-control int-value">

										</div>

									</div>

								</div>

								<div class="col-lg-6">

									<div class="form-group">

										<div class="input-group">

											<label>Subject</label>

											<input name="subject" type="text" required class="form-control">

										</div>

									</div>

								</div>

								<div class="col-lg-12">

									<div class="form-group">

										<div class="input-group">

											<label>Type Message</label>

											<textarea name="message" rows="4" class="form-control" required ></textarea>

										</div>

									</div>

								</div>

								<div class="col-lg-12">

									<div class="form-group">

										<div class="input-group">

											<div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>

											<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">

										</div>

									</div>

								</div>

								<div class="col-lg-12">

									<button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>

								</div>

							</div>

						</form>

					</div>

				</div>

            </div>

		</div>

        <!-- inner page banner END -->

    </div>

    <!-- Content END-->











@endsection