@extends('master')
@section('content')
<div class="container custom-product">
    <div class="trending-wrapper">
        <h4>Cart Products</h4>
        @foreach($products as $item)
        <div class="searched-item row">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <div class="trendingg-items">
                        <img class="trending-image" src="{{$item->gallery}}">

                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="detail/{{$item->id}}">
                    <div class="trendingg-items">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                
                <a href="/removee/{{$item->cart_id}}" class="btn btn-warning"> Remove from Cart</a>
                
            </div>
        </div>

        @endforeach
        <br> <br>
        <a href="/ordernow" class="btn btn-success">Order Now</a>
    </div>

</div>
@endsection