<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    function index(){
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data =Product::find($id);
        return view('detail',['product'=> $data]);
    }
    function addToCart(Request $req){
        if(session()->has('user')){
           $cart = new Cart;
           $cart->user_id=session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId =session()->get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function search(Request $req){
       
       $data= Product::where('name','like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    
    }
    function cartList(){
        $userId= session()->get('user')['id'];
        $data= DB::table('carts')
       ->join('products','carts.product_id','=','products.id')
       ->where('carts.user_id',$userId)
       ->select('products.*','carts.id as cart_id')
       ->get();
       return view('cart',['products'=>$data]);
        
    }
    function reMove($id){
        Cart::destroy($id);
        return redirect('cartlist');

    }
    function orderNow(){
        $userId= session()->get('user')['id'];
      $total= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->sum('products.price');
        return view('orderlist',['total'=>$total]); 
    }
    function orderPlace(Request $req){
        $userId= session()->get('user')['id'];
        $cartItem=Cart::where('user_id',$userId)->get();
        foreach($cartItem as $cart){
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status='pending';
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();

        }
        return redirect('/');
       
    }
    function orderView(){
        $userId= session()->get('user')['id'];

    }
    
}