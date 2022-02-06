@extends('master')
@section('content')

<div class="product-container">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="search-wrapper">
            <h3>Search Results</h3>
            <!-- Wrapper for slides -->
            <div class="search-div">
                @foreach($products as $item)
                <div class="search-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-products-img" src="{{$item['gallery']}}">
                        <div class="search-details">
                            <h4>{{$item['name']}}</h4>
                            <h5>{{$item['price']}} ₹</h5>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection