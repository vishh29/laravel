@extends('master')
@section('content')

<div class="custom-product row">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>{{Session::get('user')['name']}} Orders : {{$total}}₹</h2> <br><br>
            @if(count($orders)>0)
            <div class="cartlist">
                <!-- Wrapper for slides -->
                @foreach($orders as $item)
                <div class="search-item row cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-products-img" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class=" ">
                            <h4>Name :{{$item->name}}</h4>
                            <p>Delivery Status :{{$item->status}}</p>
                            <p>Address :{{$item->address}}</p>
                            <p>Payment Method :{{$item->payment_method}}</p>
                            <p>Payment Status :{{$item->payment_status}}</p>
                            <p>Price :{{$item->price}}</p>
                        </div>
                    </div>


                </div>
                @endforeach

                @else
                <h1>Orders is Empty</h1>
                @endif
            </div>





        </div>
    </div>
</div>

@endsection