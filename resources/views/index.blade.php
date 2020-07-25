@extends('layout/main')

@section('title', 'Daffa Bagus')
<style>
    .w-100 {
        width: 100%;
        height: 65%;
    }

</style>
@section('container')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ ('img/tl.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>The Last Of Us Part II</h5>
                <p>The Last of Us Part II adalah video game aksi-petualangan dan survival horror yang 
                    dikembangkan oleh Naughty Dog dan diterbitkan oleh Sony Interactive Entertainment.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ ('img/c.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-white">
                <h5>Cyberpunk 2077</h5>
                <p>Cyberpunk 2077 adalah permainan video role-playing yang akan datang yang dikembangkan dan diterbitkan oleh CD Projekt.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ ('img/tw.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>The Witcher 3</h5>
                <p>The Witcher 3: Wild Hunt adalah permainan video bermain peran yang dikembangkan oleh CD Projekt 
                    RED pada tahun 2015 dan diterbitkan oleh CD Projekt. </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row text-white">
        <div class="col-10">
            <h1 class="mt-3">Welcome to my Website</h1>
            <p>Selamat datang di website saya. Website ini dibuat dengan framework Laravel.</p>
        </div>
    </div>
</div>
@endsection
