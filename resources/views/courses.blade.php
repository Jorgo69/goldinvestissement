



@extends('same')



@section('body')



@include('header')



	

	<!-- Content -->

    <div class="page-content bg-white">

        <!-- inner page banner -->

        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">

            <div class="container">

                <div class="page-banner-entry">

                    <h1 class="text-white">Nos Formations</h1>

				 </div>

            </div>

        </div>

		<!-- Breadcrumb row -->

		<div class="breadcrumb-row">

			<div class="container">

				<ul class="list-inline">

					<li><a href="#">Accueil</a></li>

					<li>Nos Formations</li>

				</ul>

			</div>

		</div>

		<!-- Breadcrumb row END -->

        <!-- inner page banner END -->

		<div class="content-block">

            <!-- About Us -->

			<div class="section-area section-sp1">

                <div class="container">

					 <div class="row">

		

						<div class="col-lg-12 col-md-8 col-sm-12">

							<div class="row">

              @foreach($formation as $courses)

								<div class="col-md-6 col-lg-4 col-sm-6 m-b30">

									<div class="cours-bx">

										<div class="action-box">

											<img src="{{asset('/storage/public/images/url_images/'. $courses-> url_image)}}" alt="img">

			

						<a href="{{ route('ourCourses' , ['courses'=> $courses->id]) }}"class="btn">Voir Plus</a>

			

											

									

										</div>



										<div class="info-bx text-center">

											<h5><a href="#">{{$courses -> titre_cours }}</a></h5>

											<span> {{$courses -> categorie_cours }} </span>

										</div>

										<div class="cours-more-info">

											<div class="review">

												<span>Note</span>

												<ul class="cours-star">

													<li class="active"><i class="fa fa-star"></i></li>

													<li class="active"><i class="fa fa-star"></i></li>

													<li class="active"><i class="fa fa-star"></i></li>

													<li><i class="fa fa-star"></i></li>

													<li><i class="fa fa-star"></i></li>

												</ul>

											</div>

											<div class="price">

												<del>$190</del>

												<h5>$120</h5>

											</div>

										</div>

									</div>

								</div>



@endforeach





								{{-- <div class="col-lg-12 m-b20">

									<div class="pagination-bx rounded-sm gray clearfix">

										<ul class="pagination">

											<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>

											<li class="active"><a href="#">1</a></li>

											<li><a href="#">2</a></li>

											<li><a href="#">3</a></li>

											<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>

										</ul>

									</div>

								</div> --}}

							</div>

						</div>

					</div>

				</div>

            </div>

        </div>

		<!-- contact area END -->

		

    </div>

    <!-- Content END-->



@endsection

