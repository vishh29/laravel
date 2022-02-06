@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="" srcset="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h3>Name : {{$product['name']}}</h3>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-warning">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>


        </div>
    </div>


</div>
@endsection