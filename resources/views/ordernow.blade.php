@extends('master')
@section('content')

<div class="container">
    <table class="table">

        <tbody>
            <tr>
                <th scope="row">Ammount</th>
                <td>{{$total}}₹</td>
            </tr>
            <tr>
                <th scope="row">Tax</th>
                <td>0 ₹</td>
            </tr>
            <tr>
                <th scope="row">Delivery</th>
                <td>50 ₹</td>
            </tr>
            <tr>
                <th scope="row">Total Ammount</th>
                <td>{{$total+50}} ₹</td>
            </tr>
        </tbody>
    </table>
    <div class="container">
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Enter your address here." required></textarea>
            </div>
            <div class="form-group" required>
                <label for="exampleInputPassword1">Payment Method</label><br><br>
                <input type="radio" value="Online" name="payment"> <span>Online Payment</span><br><br>
                <input type="radio" value="EMI" name="payment"> <span>EMI Payment</span><br><br>
                <input type="radio" value="Cash" name="payment" checked> <span>Payment on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection