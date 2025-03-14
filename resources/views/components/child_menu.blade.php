@if($categoryItem->categoryChildren->count())
<ul role="menu" class="sub-menu">
    @foreach($categoryItem->categoryChildren as $categoryChildren)
    <li>
        <a href="shop.html">{{$categoryChildren->name}}</a>
        @if($categoryChildren->categoryChildren->count())
            @include('components.child_menu',['categoryItem' => $categoryChildren ])
        @endif
    </li>

    @endforeach
</ul>
@endif