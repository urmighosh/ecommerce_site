@extends('website.master')
@section('title')
    Shopping Cart Page
@endsection
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Cart</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="shopping-cart section">
        <div class="container">
            <div class="cart-list-head">

                <div class="cart-list-title">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12">
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>Product Name</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Unit Price</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Quantity</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>Total</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>Remove</p>
                        </div>
                    </div>
                </div>
                @php($sum=0)
                @foreach($cart_products as $cart_product)
                <div class="cart-single-list">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href=""><img src="{{ asset($cart_product->image) }}" alt="#"></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="">{{$cart_product->name}}</a></h5>
                            <p class="product-des">
                                <span><em>Category:</em> {{$cart_product->category}}</span>
                                <span><em>Brand:</em>{{$cart_product->brand}}</span>
                            </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="">
                             {{$cart_product->price}}
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                           <form action="{{route('update-cart-product',['id' => $cart_product->__raw_id])}}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" value="{{$cart_product->qty}}" name="qty" min="1" required/>
                                <input type="submit" class="btn btn-success" value="Update"/>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>{{$cart_product->price * $cart_product->qty}}</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a class="remove-item" href="{{route('remove-cart-product',['id' => $cart_product->__raw_id])}}"><i class="lni lni-close"></i></a>
                        </div>
                    </div>
                </div>
                @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                @endforeach

            </div>
            <div class="row">
                <div class="col-12">

                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <div class="button">
                                                <button class="btn">Apply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>{{$sum}}</span></li>
                                        <li>Tax(15%)<span>{{ $tax = ($sum*15)/100}}</span></li>
                                        <li>Shipping<span>{{$shipping = 100}}</span></li>
                                        <li class="last">Total Payable<span>{{$totalPayable = $sum+$tax+$shipping}}</span></li>
                                    </ul>
                                    <div class="button">
                                        <a href="{{ route('checkout') }}" class="btn">Checkout</a>
                                        <a href="product-grids.html" class="btn btn-alt">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
