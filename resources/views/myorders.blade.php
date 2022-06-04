@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Rendeléseim</h4>
                @foreach($orders as $item)
                    <div class=" row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h2>Név: {{$item->name}}</h2>
                                <h5>Szállítási állapot: {{$item->status}}</h5>
                                <h5>Cím: {{$item->address}}</h5>
                                <h5>Fizetés állapota: {{$item->payment_status}}</h5>
                                <h5>Fizetési mód: {{$item->payment_method}}</h5>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
@endsection

