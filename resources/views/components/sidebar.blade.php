<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach ($categoryParents as $categoryParentsItem)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        @if($categoryParentsItem->categoryChildren->count())
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{$categoryParentsItem->name}}">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            {{ $categoryParentsItem->name }}
                        </a>
                        @else
                        <a href="{{ route('category.product',['slug' => $categoryParentsItem->slug , 'id' => $categoryParentsItem->id ]) }}">
                            {{ $categoryParentsItem->name }}
                        </a>
                        @endif
                    </h4>
                </div>
                <div id="{{$categoryParentsItem->name}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($categoryParentsItem->categoryChildren as $categoryChildrenItem)
                            <li><a href="{{ route('category.product',['slug' => $categoryChildrenItem->slug , 'id' => $categoryChildrenItem->id ]) }}">{{ $categoryChildrenItem->name }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/category-products-->  
    </div>
</div>