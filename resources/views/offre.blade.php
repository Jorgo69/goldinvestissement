@extends('same')

@section('body')

@include('header')
    <!-- Inner Content Box ==== -->

    <div class="page-content bg-white">

        <!-- Page Heading Box ==== -->

        <div class="page-banner ovbl-dark" style="background-image:url('https://images.pexels.com/photos/1040909/pexels-photo-1040909.jpeg?auto=compress&cs=tinysrgb&w=600');">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"> Nos offres </h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Accueil</a></li>
					<li> Les Offres </li>
				</ul>
			</div>
		</div>

		<!-- Page Heading Box END ==== -->

        <!-- Page Content Box ==== -->

		<div class="content-block">
            <!-- Les Offres ==== -->
			{{-- Offre 1 --}}
		<div class="section-area section-sp1">
			<div class="container">
				<div class="section-area bg-gray section-sp1 our-story">
					<div class="container">
						<div class="row align-items-center d-flex">
							<div class="col-lg-5 col-md-12 heading-bx">
								<h2 class="m-b10"> Notre Magasine bientot disponible </h2>
								<h5 class="fw4">Arrête d’économiser ?</h5>


								<p>
									La plus grosse des erreurs c’est de penser économiser pour devenir riche
									Si tu économises, tu seras le plus grand des perdant dans cette histoire
									En 1971, le président Nixon avait décider que le dollar ne soit plus arrimé à l’or. Donc à
									partir de ce moment l’argent que tu as n’est qu’un bout de papier coupé tailler, pendant ce
									temps la valeur de la monnaie baisse alors que la valeur des prix augmentent en général
									c’est de l’inflation
									Ainsi quand on te demande d’investir, c’est pour te protéger de la monnaie qui n’est rien
									d’autre que du papier, lorsque tu achètes des terres, lorsque tu investis dans l’immobilier
									ou autre tu te protège. Si tu économise tu es en perte mais si tu t’en protège en
									investissant, tu as toute tes chances d’en gagner
									Investir et arrête d’économiser
									Nous vous proposons une FORMATION COMPLETE DANS LA PRODUCTION DE LA PAPAYE SOLO ACCOMPAGNER
									DU MAGAZINE
									Ne manquez pas cet évènement pour apprendre sur les opportunités à saisir </p>



								{{-- <a href="#" class="btn">Read More</a> --}}



							</div>



							<div class="col-lg-7 col-md-12 heading-bx p-lr">
								<div class="video-bx">
									<img src="{{asset('assets/images/event/pic5.jpg')}}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

			{{-- Offre 2 --}}
		<div class="section-area section-sp1">
			<div class="container">
				<div class="section-area bg-gray section-sp1 our-story">
					<div class="container">
						<div class="row align-items-center d-flex">
							<div class="col-lg-5 col-md-12 heading-bx">
								<h2 class="m-b10"> INVESTISSEMENT DANS LA PRODUCTION DES CÉRÉALES ET D'HUILES VEGETALES </h2>
								<h5 class="fw4">Place aux investissements ?</h5>


								<p>
									Ne laissez plus vos épargnes dormir à la banque. Investissez-les dans la production des
									céréales à partir de 8 000f cfa
									seulement et obtenez des retours sur investissement, défiant toute concurrence, dès le
									sixième mois. Offres sûres et
									sous contrat notarié. </p>



								<a type="button" href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
										<path
											d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
									</svg></a>



							</div>



							<div class="col-lg-7 col-md-12 heading-bx p-lr">
								<div class="video-bx">
									<img src="{{asset('assets/images/event/images3.jpg')}}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

			{{-- Offre 3 --}}
		<div class="section-area section-sp1">
			<div class="container">
				<div class="section-area bg-gray section-sp1 our-story">
					<div class="container">
						<div class="row align-items-center d-flex">
							<div class="col-lg-5 col-md-12 heading-bx">
								<h2 class="m-b10"> DEVENEZ PRODUCTEUR DE MANIOC au Bénin </h2>
								<h5 class="fw4">Place aux investissements ?</h5>


								<p>
									Mettre nos terres en valeur, tirer profit de notre plus grande richesse... est devenu possible grâce à Gold Investissement.
									Le manioc est actuellement un produit très rentable et vous pouvez en tirer profit, quelques soient vos occupations
									actuelles et votre position géographique. Il suffit de nous contacter. Nous nous occupons de fructifier votre
									investissement, de façon sûre, à travers un contrat notarié.. </p>



								<a type="button" href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
										<path
											d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
									</svg></a>
							</div>
							<div class="col-lg-7 col-md-12 heading-bx p-lr">
								<div class="video-bx">
									<img src="{{asset('assets/images/event/images4.jpg')}}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

			{{-- Offre 4 --}}
			<div class="section-area section-sp1">
				<div class="container">
					<div class="section-area bg-gray section-sp1 our-story">
						<div class="container">
							<div class="row align-items-center d-flex">
								<div class="col-lg-5 col-md-12 heading-bx">
									<h2 class="m-b10"> Devenez propriétaire d'hectares d'anacarde </h2>
									<h5 class="fw4">Place aux investissements ?</h5>
	
	
									<p>
										Diversifiez votre investissement en investissant durablement et de façon sécurisée dans la production de cajou, avec
										Gold investissement à partir de 800.000 FCFA seulement avec possibilité de payer en tranches. </p>
	
	
	
									<a type="button" href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
											height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
											<path
												d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
										</svg></a>
								</div>
								<div class="col-lg-7 col-md-12 heading-bx p-lr">
									<div class="video-bx">
										<img src="{{asset('assets/images/event/images5.jpg')}}" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>

			{{-- Offre 5 --}}
			<div class="section-area section-sp1">
				<div class="container">
					<div class="section-area bg-gray section-sp1 our-story">
						<div class="container">
							<div class="row align-items-center d-flex">
								<div class="col-lg-5 col-md-12 heading-bx">
									<h2 class="m-b10"> Investissez durablement </h2>
									{{-- <h5 class="fw4">Place aux investissements ?</h5> --}}
	
	
									<p>
									L'agriculture est le socle du développement de plusieurs nations et continue d'enrichir bien de personnes. C'est votre
										tour d'expérimenter agréablement l'adage " la terre ne ment jamais".
										Profitez de la nouvelle promotion de Gold Investissement pour devenir propriétaire d'un ha de terrain à Tchaorou avec
										production de maïs à partir de 500 000 FCFA seulement. </p>
	
	
	
									<a type="button" href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
											height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
											<path
												d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
										</svg></a>
								</div>
								<div class="col-lg-7 col-md-12 heading-bx p-lr">
									<div class="video-bx">
										<img src="{{asset('assets/images/event/images6.jpg')}}" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>

			{{-- Offre 6 --}}
			<div class="section-area section-sp1">
				<div class="container">
					<div class="section-area bg-gray section-sp1 our-story">
						<div class="container">
							<div class="row align-items-center d-flex">
								<div class="col-lg-5 col-md-12 heading-bx">
									<h2 class="m-b10"> Diner d'Affaire </h2>
									{{-- <h5 class="fw4">Place aux investissements ?</h5> --}}
	
	
									<p>
										Vous souhaitez investir dans les filières maïs et Cajou au Bénin ? Venez découvrir les opportunités, les pièges à
										éviter, les astuces pour faire un bon investissement dans lesdites filières avec un retour sur investissement garanti en
										participant à notre diner d'affaires qui se déroulera le samedi 20 mars prochain au restaurant 229 à Calavi-Kpota à 20h.
										Pass individuel : 10 000 fcfa. Couple : 15 000 fcfa.. </p>
	
	
	
									<a type="button" href="#" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16"
											height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
											<path
												d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
										</svg></a>
								</div>
								<div class="col-lg-7 col-md-12 heading-bx p-lr">
									<div class="video-bx">
										<img src="{{asset('assets/images/event/images7.jpg')}}" alt="" />
									</div>
								</div>
							</div>
						</div>
					</div>
	
				</div>
			</div>

			<!-- End Les Offres ==== -->

			<!-- Why Choose ==== -->

			<div class="section-area bg-gray section-sp2 choose-bx">

				{{-- <div class="container">

					<div class="row">

						<div class="col-md-12 heading-bx text-center">

							<h2 class="title-head text-uppercase m-b0">Pourquoi Choisir <span> Notre Formation </span></h2>

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>

						</div>

					</div>

					<div class="row choose-bx-in">

						<div class="col-lg-4 col-md-4 col-sm-6">

							<div class="service-bx">

								<div class="action-box">

									<img src="assets/images/our-services/pic1.jpg" alt="">

								</div>

								<div class="info-bx text-center">

									<div class="feature-box-sm radius bg-white">

										<i class="fa fa-bank text-primary"></i>

									</div>

									<h4><a href="#">Best Industry Leaders</a></h4>

									<a href="#" class="btn radius-xl">View More</a>

								</div>

							</div>

						</div>

						<div class="col-lg-4 col-md-4 col-sm-6">

							<div class="service-bx">

								<div class="action-box">

									<img src="assets/images/our-services/pic2.jpg" alt="">

								</div>

								<div class="info-bx text-center">

									<div class="feature-box-sm radius bg-white">

										<i class="fa fa-book text-primary"></i>

									</div>

									<h4><a href="#">Learn Courses Online</a></h4>

									<a href="#" class="btn radius-xl">View More</a>

								</div>

							</div>

						</div>

						<div class="col-lg-4 col-md-4 col-sm-12">

							<div class="service-bx m-b0">

								<div class="action-box">

									<img src="assets/images/our-services/pic3.jpg" alt="">

								</div>

								<div class="info-bx text-center">

									<div class="feature-box-sm radius bg-white">

										<i class="fa fa-file-text-o text-primary"></i>

									</div>

									<h4><a href="#">Book Library & Store</a></h4>

									<a href="#" class="btn radius-xl">View More</a>

								</div>

							</div>

						</div>

					</div>

				</div> --}}

			</div>

			<!-- Why Choose END ==== -->

			

			<!-- Our Story ==== -->

			

			<!-- Our Story END ==== -->

			<!-- Testimonials ==== -->

			<div class="section-area section-sp2">

				<div class="container">

					<div class="row">

						<div class="col-md-12 heading-bx left">

							<h2 class="title-head text-uppercase"> Que pense <span>les gens </span></h2>

							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>

						</div>

					</div>

					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">

						<div class="item">

							<div class="testimonial-bx">

								<div class="testimonial-thumb">

									<img src="assets/images/testimonials/pic1.jpg" alt="">

								</div>

								<div class="testimonial-info">

									<h5 class="name">Peter Packer</h5>

									<p>-Art Director</p>

								</div>

								<div class="testimonial-content">

									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>

								</div>

							</div>

						</div>

						<div class="item">

							<div class="testimonial-bx">

								<div class="testimonial-thumb">

									<img src="assets/images/testimonials/pic2.jpg" alt="">

								</div>

								<div class="testimonial-info">

									<h5 class="name">Peter Packer</h5>

									<p>-Art Director</p>

								</div>

								<div class="testimonial-content">

									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<!-- Testimonials END ==== -->

        </div>

		<!-- Page Content Box END ==== -->

    </div>

	<!-- Page Content Box END ==== -->











@endsection