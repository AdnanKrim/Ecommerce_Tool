@extends('master')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-image" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h3>{{$product['name']}}</h3>
            <h3>{{$product['price']}}</h3>
            <h3>{{$product['description']}}</h3>
            <br><br>
            <form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
    
</div>
@endsection