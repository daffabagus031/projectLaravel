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

    .header{
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
        <h1>Front End</h1>
        HTML <i class="fa fa-html5" aria-hidden="true"></i>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%"
                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
        CSS <i class="fa fa-css3" aria-hidden="true"></i>
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
        </div>
        JavaScript
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%"
                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
        <br>
        <h1>Back End</h1>
        Java
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">65%</div>
        </div>
        PHP
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 40%"
                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">40%</div>
        </div>
        Python
        <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 15%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">15%</div>
        </div>
    </div>
    <br>
</div>
@endsection
