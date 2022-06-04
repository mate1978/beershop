
@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">

                <tbody>
                <tr>
                    <td>Összeg</td>
                    <td>{{$total}} Ft</td>
                </tr>
                <tr>
                    <td>Áfa</td>
                    <td>0 Ft</td>
                </tr>
                <tr>
                    <td>Szállítás</td>
                    <td>990 Ft</td>
                </tr>
                <tr>
                    <td>Végösszeg</td>
                    <td>{{$total+990}} Ft</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="Adja meg a címét" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Fizetési mód: </label> <br> <br>
                        <input type="radio" value="Átutalás" name="payment"><span>Átutalás</span> <br> <br>
                        <input type="radio" value="Online fizetés" name="payment"><span>Online fizetés</span> <br> <br>
                        <input type="radio" value="Átvételkor a futárnak" name="payment"><span>Átvételkor a futárnak</span> <br> <br>

                    </div>

                    <button type="submit" class="btn btn-success">Rendelés</button>
                </form>
            </div>
        </div>
    </div>
@endsection
