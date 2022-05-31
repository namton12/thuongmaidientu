<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="/">TRANG CHỦ <span class="sr-only">(current)</span></a></li>
					
					
						@foreach($category as $cate)	
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								{{ $cate->name }}
							</a>
							@if(count($cate->productType)>0)
								<div class="dropdown-menu">
									@foreach($cate->productType as $protype)
									<ul class="multi-column-dropdown">
										<a class="dropdown-item" href="{{ $protype->slug }}.html">{{ $protype->name }}</a>
									</ul>
									@endforeach
									{{-- <div class="dropdown-divider"></div> --}}
								</div>
							@endif	
						</li>
					@endforeach	
					
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						
						<button class="w3view-cart" type="submit" name="submit" value=""><a @if(Auth::check()) href="{{route('cart.index')}}"@else data-toggle="modal" data-target="#myModal"@endif title="Giỏ hàng bạn có {{Cart::count()}} mặt hàng"><i class="fa fa-cart-arrow-down" >	</i></a></button>
					
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>