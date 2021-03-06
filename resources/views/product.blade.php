@extends('master')
@section('content')

<div class="product-container">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($products as $item)
                <div class="item {{$item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                        <div class="carousel-caption">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="trending-wrapper">
    <h1>Treanding Products</h1>
    <!-- Wrapper for slides -->
    <div class="trending-div">
        @foreach($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-products-img" src="{{$item['gallery']}}">
                <div class="">
                    <h4>{{$item['name']}}</h4>
                    <h5>{{$item['price']}} ₹</h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection