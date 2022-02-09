@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>{{Session::get('user')['name']}} Cart</h2>
            <!-- Wrapper for slides -->
            @foreach($products as $item)
            <div class="search-item row cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-products-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div class="search-details ">
                        <h4>{{$item->name}}</h4>
                        <p>{{$item->description}}</p>
                    </div>

                </div>
                <div class="col-sm-3">
                    <button class="btn btn-warning">Remove from Cart</button>

                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection