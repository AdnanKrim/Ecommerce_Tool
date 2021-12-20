@extends('master')
@section('content')
<div class="container ">
<table class="table">
    
    <tbody>
      <tr>
        <td>Product price</td>
        <td>{{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
        <td>Delivery charge</td>
        <td>$ 10</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total + 10}}</td>
        
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea type="text" name="address" placeholder="Enter Address" class="form-control" > </textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label> <br> <br>
    <input type="radio" value="cash" name="payment" > <span>Card payment</span> <br> <br>
    <input type="radio" value="cash" name="payment" > <span>Bkash Payment</span> <br> <br>
    <input type="radio" value="cash" name="payment" > <span>Payment On delvery</span> <br> <br>
  </div>
 
  <button type="submit" class="btn btn-success">OrderNow</button>
</form> 
    
  </div>

</div>
@endsection