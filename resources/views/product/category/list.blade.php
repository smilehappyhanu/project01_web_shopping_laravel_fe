
@extends ('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
    <title>Home | E-Shopper</title>
    @endsection   
    
    @section('css')
        <link rel="stylesheet/css" href="{{ asset('home/home.css') }}" />
    @endsection

    @section('js')
        <script type="text/javascript" src="{{ asset('home/home.js') }}"></script>
    @endsection
</head><!--/head-->

<body>
    @section('content')
	<section>
		<div class="container">
			<div class="row">
				@include('components.sidebar')
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        @foreach ($products as $productItem)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{ config('app.base_url') .$productItem->feature_image_path }}" alt="" />
										<h2>{{ number_format($productItem->price) }} VND</h2>
										<p>{{$productItem->name }}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>{{ number_format($productItem->price) }} VND</h2>
											<p>{{$productItem->name }}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
                        @endforeach
						{{ $products->links() }}
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
    @endsection
</body>
</html>







	
