@extends('admin_header')



@section('admin')



{{-- Table Different Color --}}



<div class="mobile-menu-overlay"></div>



<div class="main-container">

    <div class="pd-ltr-20 xs-pd-20-10">

        <div class="min-height-200px">

            <div class="page-header">

                <div class="row">

                    <div class="col-md-6 col-sm-12">

                        <div class="title">

                            <h4> Tous les Cours </h4>

                        </div>

                        <nav aria-label="breadcrumb" role="navigation">

                            <ol class="breadcrumb">

                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page"> Tous les Cours </li>

                            </ol>

                        </nav>

                    </div>

                </div>

            </div>



            

            <!-- Responsive tables Start -->

          	<div class="card-box mb-30">

				<h2 class="h4 pd-20">Best Selling Products</h2>

				<table class="data-table table nowrap">

					<thead>

						<tr>

							<th class="table-plus datatable-nosort">Product</th>

							<th>Nom du client</th>

							<th>Formation achetée</th>

							<th>Montant </th>

							<th>Id transaction</th>

							<th>Status</th>

							<th class="datatable-nosort">Action</th>

						</tr>

					</thead>

					<tbody>

						<tr>

							<td class="table-plus">

								<img src="vendors/images/product-1.jpg" width="70" height="70" alt="">

							</td>

							<td>

								<h5 class="font-16">Shirt</h5>

								by John Doe

							</td>

							<td>Black</td>

							<td>M</td>

							<td>$1000</td>

							<td>1</td>

							<td>

								<div class="dropdown">

									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">

										<i class="dw dw-more"></i>

									</a>

									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>

										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>

									</div>

								</div>

							</td>

						</tr>

						<tr>

							<td class="table-plus">

								<img src="vendors/images/product-2.jpg" width="70" height="70" alt="">

							</td>

							<td>

								<h5 class="font-16">Boots</h5>

								by Lea R. Frith

							</td>

							<td>brown</td>

							<td>9UK</td>

							<td>$900</td>

							<td>1</td>

							<td>

								<div class="dropdown">

									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">

										<i class="dw dw-more"></i>

									</a>

									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>

										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>

									</div>

								</div>

							</td>

						</tr>

						<tr>

							<td class="table-plus">

								<img src="vendors/images/product-3.jpg" width="70" height="70" alt="">

							</td>

							<td>

								<h5 class="font-16">Hat</h5>

								by Erik L. Richards

							</td>

							<td>Orange</td>

							<td>M</td>

							<td>$100</td>

							<td>4</td>

							<td>

								<div class="dropdown">

									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">

										<i class="dw dw-more"></i>

									</a>

									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>

										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>

									</div>

								</div>

							</td>

						</tr>

						<tr>

							<td class="table-plus">

								<img src="vendors/images/product-4.jpg" width="70" height="70" alt="">

							</td>

							<td>

								<h5 class="font-16">Long Dress</h5>

								by Renee I. Hansen

							</td>

							<td>Gray</td>

							<td>L</td>

							<td>$1000</td>

							<td>1</td>

							<td>

								<div class="dropdown">

									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">

										<i class="dw dw-more"></i>

									</a>

									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>

										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>

									</div>

								</div>

							</td>

						</tr>

						<tr>

							<td class="table-plus">

								<img src="vendors/images/product-5.jpg" width="70" height="70" alt="">

							</td>

							<td>

								<h5 class="font-16">Blazer</h5>

								by Vicki M. Coleman

							</td>

							<td>Blue</td>

							<td>M</td>

							<td>$1000</td>

							<td>1</td>

							<td>

								<div class="dropdown">

									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">

										<i class="dw dw-more"></i>

									</a>

									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>

										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>

										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>

									</div>

								</div>

							</td>

						</tr>

					</tbody>

				</table>

			</div>

            <!-- Responsive tables End -->



            

        </div>

        <div class="footer-wrap pd-20 mb-20 card-box">

            &copy; All Right Reserve Jak Investisseur 

        </div>

    </div>

</div>











{{-- End Table --}}





@endsection