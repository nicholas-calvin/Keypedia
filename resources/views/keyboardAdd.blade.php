@extends('navbar')
@section('content')
<div class="container-md" style="padding: 2em;">
    <div class="login-form" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Add Keyboard</label>
        </div>

        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;">
            <form action="/addKeyboard" method="post">
                @csrf
                <div class="row justify-content-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Category">Category</label>
                    </div>
                    <div class="col-6">
                        <select aria-label="Default select example">
                            <option selected>Category</option>
                            @foreach ($categories as $category)
                            <option>{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Keyboard Name">Keyboard name</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="rounded-3 w-75" name="keyboardName" id="keyboardName" style="height: 50px">
                    </div>
                </div>
                <div class="row justify-content-center align-items-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Keyboard Price">Keyboard Price ($)</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="rounded-3 w-75" name="keyboardPrice" id="keyboardPrice" style="height: 50px">
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Description">Description</label>
                    </div>
                    <div class="col-6">
                        <textarea name="description" id="description" rows="3" class="rounded-3 w-75"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Keyboard Image">Keyboard Image</label>
                    </div>
                    <div class="col-6">
                        <input class="form-control rounded-3 w-75" type="file" id="formFile">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-end"></div>
                    <div class="col-6" style="margin-top: 1em;">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection