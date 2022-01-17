@extends('navbar')
@section('content')
<div style="height: 1em;"></div>

<div class="container" style="padding: 2em; width: 1000px;">
        <div class="" style="background-color: #b4a8cb;">

            <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
                <label style="padding: 1em;">Detail Keyboard</label>
            </div>

            <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="d-flex justify-content-around">
                <div class="col-5">
                    <img src="{{asset('asset/image/1.jpg')}}" alt="Could not load image" srcset="" style="width: 380px;">
                </div>
                <div class="col-5" style="margin-left: 2em;">
                    <div class="Judul">
                        <h1>GamaKay K87</h1>
                    </div>
                    <div class="price">
                        $10
                    </div>
                    <div class="desc">
                        Description
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection