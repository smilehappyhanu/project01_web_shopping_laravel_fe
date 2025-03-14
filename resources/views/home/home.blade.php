@php
$baseUrl = config('app.base_url');
@endphp

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
	@include('home.components.slider')
	<section>
		<div class="container">
			<div class="row">
				@include('components.sidebar')
				
				<div class="col-sm-9 padding-right">
					<!--features_items-->
					@include('home.components.feature_product')
					<!--features_items-->
					
					<!--category-tab-->
					@include('home.components.category_tab')
					<!--/category-tab-->
					
					<!--recommended_items-->
					@include('home.components.recommend_product')
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
    @endsection
</body>
</html>