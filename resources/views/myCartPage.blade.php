@extends('navbar')
@section('content')
<div class="container" style="padding: 2em; padding-top: 3em; width: 1000px">
    <div class="" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">My Cart</label>
        </div>
        <div style="background-color: #baaed1;" class="d-flex justify-content-around">
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div  class="row" style="background-color: #baaed1;margin-left: 0; margin-right: 0; padding: 2em;">
            @if (count($carts) > 0)
            @for ($i = 0; $i < $carts->count(); $i++)
            <div class="card mb-4" style="background-color: #baaed1; border: none">
                <div class="card-body d-flex justify-content-around">
                    <div style="margin-right: 150px">
                        <img src="{{asset($keyboards[$i]->imgPath)}}" alt="" class="img-shoppingcart-item" style="width: 300px;">
                    </div>
                    <div class="content-body" style="width: 500px">
                        <div>
                            <p class="fw-bold">{{$keyboards[$i]->name}}</p>
                            <p>Subtotal: $ {{$keyboards[$i]->price * $carts[$i]->quantity}}</p>
                            <form action="{{route('updateQuantityItem', ['keyboardId'=>$keyboards[$i]->id])}}" method="post">
                                @csrf
                                <label for="Quantity" style="margin-right: 2em;">Quantity : </label>
                                <input type="number" name="quantity" id="quantity" style="border: none; border-radius: 5px; height: 40px;" placeholder="{{$carts[$i]->quantity}}">
                            <div class="d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary" style="margin-top: 1em">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3" >
                <a href="{{route('transactionHistoryPage')}}" class="btn btn-primary">Checkout</a>
            </div>
            @endfor
            @else
            <strong>Your cart is empty</strong>
            @endif
        </div>
    </div>
</div>
@endsection