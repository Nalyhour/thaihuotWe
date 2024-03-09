@extends('frontend.layouts.master')

@section('meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
	<meta name="description" content="{{$product_detail->summary}}">
	<meta property="og:url" content="{{route('product-detail',$product_detail->slug)}}">
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{$product_detail->title}}">
	<meta property="og:image" content="{{$product_detail->photo}}">
	<meta property="og:description" content="{{$product_detail->description}}">
@endsection
@section('title','Thai Huot || PRODUCT DETAIL')
@section('main-content')

		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="">Shop Details</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Shop Single -->
		<section class="shop single section">
					<div class="container">
						<div class="row"> 
							<div class="col-12">
								<div class="row">
									<div class="col-lg-6 col-12">
										<!-- Product Slider -->
										<div class="product-gallery">
											<!-- Images slider -->
											<div class="flexslider-thumbnails">
												<ul class="slides">
													@php 
														$photo=explode(',',$product_detail->photo);
													// dd($photo);
													@endphp
													@foreach($photo as $data)
														<li data-thumb="{{$data}}" rel="adjustX:10, adjustY:">
															<img src="{{$data}}" alt="{{$data}}">
														</li>
													@endforeach
												</ul>
											</div>
											<!-- End Images slider -->
										</div>
										<!-- End Product slider -->
									</div>
									<div class="col-lg-6 col-12">
										<div class="product-des">
											<!-- Description -->
											<div class="short">
												<h4>{{$product_detail->title}}</h4>
												<div class="rating-main">
													<ul class="rating">
														@php
															$rate=ceil($product_detail->getReview->avg('rate'))
														@endphp
															@for($i=1; $i<=5; $i++)
																@if($rate>=$i)
																	<li><i class="fa fa-star"></i></li>
																@else 
																	<li><i class="fa fa-star-o"></i></li>
																@endif
															@endfor
													</ul>
                                                </div>
                                                @php 
                                                    $after_discount=($product_detail->price-(($product_detail->price*$product_detail->discount)/100));
                                                @endphp
												<p class="price"><span class="discount">${{number_format($after_discount,2)}}</span><s>${{number_format($product_detail->price,2)}}</s> </p>
												<p class="description">{!!($product_detail->summary)!!}</p>
											</div>
											
											@if($product_detail->size)
												
											@endif
											<!--/ End Size -->
											<!-- Product Buy -->
											

											
											<!--/ End Product Buy -->
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="product-info">
											<div class="nav-main">
												<!-- Tab Nav -->
											
												<!--/ End Tab Nav -->
											</div>
											
		<!--/ End Shop Single -->
		
		<!-- Start Most Popular -->
	<div class="product-area most-popular related-product section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Related Products</h2>
					</div>
				</div>
            </div>
            <div class="row">
                {{-- {{$product_detail->rel_prods}} --}}
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach($product_detail->rel_prods as $data)
                            @if($data->id !==$product_detail->id)
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-img">
										<a href="{{route('product-detail',$data->slug)}}">
											@php 
												$photo=explode(',',$data->photo);
											@endphp
                                            <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                            <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                            <span class="price-dec">{{$data->discount}} % Off</span>
                                                                    {{-- <span class="out-of-stock">Hot</span> --}}
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#modelExample" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="{{route('product-detail',$data->slug)}}">{{$data->title}}</a></h3>
                                        <div class="product-price">
                                            @php 
                                                $after_discount=($data->price-(($data->discount*$data->price)/100));
                                            @endphp
                                            <span class="old">${{number_format($data->price,2)}}</span>
                                            <span>${{number_format($after_discount,2)}}</span>
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- End Single Product -->
                                	
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	

<!-- Modal end -->


@endsection
@push('styles')
	<style>
		/* Rating */
		.rating_box {
		display: inline-flex;
		}

		.star-rating {
		font-size: 0;
		padding-left: 10px;
		padding-right: 10px;
		}

		.star-rating__wrap {
		display: inline-block;
		font-size: 1rem;
		}

		.star-rating__wrap:after {
		content: "";
		display: table;
		clear: both;
		}

		.star-rating__ico {
		float: right;
		padding-left: 2px;
		cursor: pointer;
		color: #F7941D;
		font-size: 16px;
		margin-top: 5px;
		}

		.star-rating__ico:last-child {
		padding-left: 0;
		}

		.star-rating__input {
		display: none;
		}

		.star-rating__ico:hover:before,
		.star-rating__ico:hover ~ .star-rating__ico:before,
		.star-rating__input:checked ~ .star-rating__ico:before {
		content: "\F005";
		}

	</style>
	
@endpush
@push('scripts')


@endpush
