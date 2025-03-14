<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach ($categoryParents as $categoryParentsItem)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear_{{$categoryParentsItem->id}}">
                            @if($categoryParentsItem->categoryChildren->count())
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            @endif
                            {{ $categoryParentsItem->name }}
                        </a>
                    </h4>
                </div>
                <div id="sportswear_{{$categoryParentsItem->id}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($categoryParentsItem->categoryChildren as $categoryChildrenItem)
                            <li><a href="#">{{ $categoryChildrenItem->name }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/category-products-->  
    </div>
</div>