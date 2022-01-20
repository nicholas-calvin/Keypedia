@extends('navbar')
@section('content')
<div class="container" style="padding: 2em; padding-top: 3em;">
    <div class="" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">My Cart</label>
        </div>
        
        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="row">
            @if (count($carts) > 0)
            @for ($i = 0; $i < $carts->count(); $i++)
            <div class="card mb-3">
                <div class="card-body d-flex justify-content-around">
                    <div style="margin-right: 150px">
                        <img src="{{asset($keyboards[$i]->imgPath)}}" alt="" class="img-shoppingcart-item" style="width: 200px;">
                    </div>
                    <div class="content-body" style="width: 500px">
                        <div>
                            <p class="fw-bold">{{$keyboards[$i]->name}}</p>
                            <p>$ {{$keyboards[$i]->price}}</p>
                        </div>
                    </div>
                    <div>
                        <form action="/cart/delete/{{$carts[$i]->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-danger" style="color: white; border-radius: 5px; border: none">Delete</button>
                        </form>
                        <p class="pt-3 text-center">x{{$carts[$i]->quantity}}</p>
                    </div>
                </div>
            </div>
            @endfor
            @else
            <strong>Your cart is empty</strong>
            @endif

            <div class="d-flex justify-content-end align-items-center mb-3" >
                <p class="fw-bold pe-4 m-0">Total : $ {{$totalPrice }}</p>
                <a href="" class="btn btn-dark">Checkout</a>
            </div>

        </div>
    </div>
</div>
@endsection