@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>{{Session::get('user')['name']}} Cart</h2> <br><br>
            <a href="ordernow" class="btn btn-success">Order Now</a>

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
                        <h3>{{$item->price}}</h3>
                        <p>{{$item->description}}</p>
                    </div>

                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                </div>

            </div>
            @endforeach
            <a href="ordernow" class="btn btn-success">Order Now</a>


        </div>
    </div>
</div>

@endsection