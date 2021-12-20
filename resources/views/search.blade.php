@extends('master')
@section('content')
<div class="container custom-product">
    <div class="trending-wrapper">
        <h4>Result for Products</h4>
        @foreach($products as $item)
        <a href="detail/{{$item['id']}}">
            <div class="trendingg-items col-sm-6">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                    <h2>{{$item['name']}}</h2>
                    <h5>{{$item['description']}}</h5>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>
@endsection