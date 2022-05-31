@extends('master')
@section("content")
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Vissza</a>
            <h2>{{$product['name']}}</h2>
            <h3>Ár: {{$product['price']}} Ft</h3>
            <h4>Részletek: {{$product['description']}}</h4>
            <h4>Típus: {{$product['category']}}</h4>
            <br><br>
            <button class="btn btn-primary">Kosárba</button>
            <br><br>
            <button class="btn btn-success">Vásárlás</button>
            <br><br>
        </div>
    </div>
    </div>
@endsection


