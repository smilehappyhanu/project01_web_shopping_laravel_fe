<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach ($categoryParents as $keyCategoryParent => $categoryParentsItem)
            <li class="{{$keyCategoryParent == 0 ? 'active' : '' }}"><a href="#{{$categoryParentsItem->name}}" data-toggle="tab">{{ $categoryParentsItem->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content">
        @foreach ($categoryParents as $keyCategoryProductParent => $categoryParentsProductItem)
        <div class="tab-pane fade {{ $keyCategoryProductParent == 0 ? 'active in' : ''}}" id="{{$categoryParentsProductItem->name}}" >
            @foreach($categoryParentsProductItem->products as $key => $productItem)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ config('app.base_url') . $productItem->feature_image_path }}" alt="" />
                            <h2>{{ number_format($productItem->price) }} VND</h2>
                            <p>{{ $productItem->name }}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach      
    </div>
</div>