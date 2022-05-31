@extends('client.layout.master')
@section('slide')
@include('client.layout.slide')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">Mới <span>Điểm Đến </span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> @if(isset($prodt)) {{ $prodt[0]->categories->name}}@endif</li>
							<li> @if(isset($proloa)) {{ $proloa[0]->categories->name }} @endif</li>
							<li>@if(isset($promaytinh)){{ $promaytinh[0]->categories->name }} @endif</li>
							<li> @if(isset($prododung)) {{ $prododung[0]->categories->name }} @endif </li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
											<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
										
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
							<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
                            <div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
							<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
							<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
							<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
								<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
								<div class="col-md-3 product-men">
										 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="men-pro-item simpleCart_shelfItem">

									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif

							</div>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
							 <div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
						    <div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
							 	@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
					 <!--//tab_two-->
						<div class="tab3">
								
						<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
                            <div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
						<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
													

							<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
													<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
													<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
								<div class="col-md-3 product-men">
								@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="tab4">
							
							    <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="tab4">
							
							    <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							 <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							 <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							 <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							 <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							 <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
								 <div class="col-md-3 product-men">
							    	@if(isset($prododung))
									@foreach($prododung as $pro)
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-front">
										<img src="img/upload/product/{{$pro->image}}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Xem Lướt Qua</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{$pro->name}}</a></h4>
										<div class="info-product-price">
											@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										</div>
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
																			
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="single.html">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
@endsection