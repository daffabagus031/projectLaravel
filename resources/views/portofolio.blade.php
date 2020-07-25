@extends('layout/main')

@section('title', 'Profile')
<style>
    .jumbotron {
        background-image: url("{{ ('img/b.jpg') }}");
        background-size: 100%;

    }

    img {
        width: 15%
    }

    .h {
        font-family: 'Sarina';
        font-size: 65px;
    }

    .p {
        font-family: 'Baskervville';
        font-size: 25px;
    }

    .header {
        border-radius: 25px;
    }


</style>
@section('container')
<div class="jumbotron jumbotron-fluid text-white shadow">
    <div class="container">
        <img src="{{ ('img/fotoe.jpg') }}" class="rounded-circle float-right border border-dark " alt="...">
        <br>
        <p class="h" style="">Daffa Bagus</p>
        <p class="p">Front End Developer</p>
    </div>
</div>
<div class="container" style="">
    <div class="header mt-4 mb-4 pl-3 pt-3 pb-3 pr-3 bg-#222831 shadow-lg text-white">
    <h1>Karya</h1>
        <div class="card-group shadow-lg">
            <div class="card pt-3 bg-dark" style="width: 18rem;">
                <img class="card-img-top ml-auto mr-auto" src="{{ ('img/bm.png') }}" alt="Card image cap"
                    style="width: 21rem;">
                <div class="card-body text-center">
                    <h4>Aplikasi Kasir</h4>
                    <p class="card-text">
                        Aplikasi Bagus Mart menggunakan bahasa pemrograman Java
                    </p>
                </div>
            </div>
            <div class="card pt-3 bg-dark" style="width: 18rem;">
                <img class="card-img-top ml-auto mr-auto" src="{{ ('img/bot.png') }}" alt="Card image cap"
                    style="width: 12rem;">
                <div class="card-body text-center">
                    <h4>Bot Telegram</h4>
                    <p class="card-text">
                        Membuat bot telegram dengan bahasa Python
                    </p>
                </div>
            </div>
            <div class="card pt-3 bg-dark" style="width: 18rem;">
                <img class="card-img-top ml-auto mr-auto" src="{{ ('img/xd.png') }}" alt="Card image cap"
                    style="width: 18rem; height: 14rem;">
                <div class="card-body text-center">
                    <h4>Mockup Web JBL</h4>
                    <p class="card-text">
                        Membuat mockup web JBL dengan Adobe XD
                    </p>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
</div>
@endsection
