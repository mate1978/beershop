@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Kosár</h3>
                <a href="/">Vissza</a>

                <br><br>
                @foreach($products as $item)
                    <div class=" row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                                <h6>{{$item->price}} Ft</h6>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <br><br><a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Eltávolítás a kosárból</a>
                        </div>
                    </div>
                @endforeach
            </div>
        <div class="trending-wrapper">
                <a class="btn btn-success" href="ordernow">Rendelés</a> <br> <br>
        </div>
        </div>
    </div>
@endsection
