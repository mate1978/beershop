<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
    {
        $total= ProductController::cartItem();
    }


?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand active" href="/">Sör-shop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Keresés">
                </div>
                <button type="submit" class="btn btn-default">Keresés</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/cartlist">Kosár({{$total}})</a></li>
                        <li class=""><a href="/myorders">Rendeléseim</a></li>
                        <li><a href="/logout">Kijelentkezés</a></li>
                    </ul>
                </li>
                    @else
                    <li><a href="/login">Bejelentkezés</a></li>
                    <li><a href="/register">Regisztráció</a></li>

                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

