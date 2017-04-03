@extends('partials/ansari_traders/app')

@section('title')
    Home
@endsection

@section('content')

        <!-- content-section-starts -->
    <div class="container">
        <div class="products-grid">
            @if($recipes != null)
                @foreach($recipes as $recipe)
                    <div class="col-md-4 product simpleCart_shelfItem text-center">
                        <a href="/recipe_images/{{$recipe->image}}"><img src="/recipe_images/{{$recipe->image}}" alt="" width="384px" height="350px"/></a>
                        <div class="mask">
                            <a href="/recipe-detail/{{$recipe->name}}/{{$recipe->id}}/{{$recipe->slug}}">Quick View</a>
                        </div>
                        <a class="product_name" href="/recipe-detail/{{$recipe->name}}/{{$recipe->id}}/{{$recipe->slug}}">{{$recipe->name}}</a>
                        <p class="product_name">
                            {{substr($recipe->description,0,150)."..."}} <a class="product_name" href="/recipe-detail/{{$recipe->name}}/{{$recipe->id}}/{{$recipe->slug}}">Read More</a>
                        </p>
                    </div>
                @endforeach
            @endif
            <div class="clearfix"></div>
        </div>
    </div>

@endsection