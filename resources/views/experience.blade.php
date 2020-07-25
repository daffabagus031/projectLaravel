@extends('layout/main')

@section('title', 'Experience')
<style>
    .header {
        border-radius: 20px;
    }

</style>
@section('container')
<div class="container">
    <div class="header mt-4 mb-4 pl-3 pt-3 pb-3 pr-3 bg-light shadow">
        <h1>Experience</h1>
        <div class="content">
            <p>Experience saya di programming adalah saya pernah Kunjungan Industri ke PT. Spasi, belajar membuat
                aplikasi
                android
                di kelas X, mengikuti seminar Developer Student Club di Universitas Indonesia dan lulus kelas Belajar
                Dasar Pemrograman Web di
                <a href="https://dicoding.com">Dicoding</a> dan pemahaman saya kira-kira seperti progress bar di bawah
                ini.
            </p>
            <div class="card-group">
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="{{ ('img/sp.jpg') }}" alt="Card image cap"
                        style="width: 21rem;">
                    <div class="card-body text-center">
                        <h4>Kunjungan Industri</h4>
                        <p class="card-text">
                            Kunjungan industri ke PT. Spasi Indonesia
                        </p>
                    </div>
                </div>
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="{{ ('img/an.jpeg') }}" alt="Card image cap"
                        style="width: 21rem;">
                    <div class="card-body text-center">
                        <h4>Membuat Aplikasi Android</h4>
                        <p class="card-text">
                            Membuat aplikasi android di kelas sepuluh bersama kak Ian.
                        </p>
                    </div>
                </div>

            </div>
            <div class="card-group">
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="{{ ('img/sem.jpeg') }}" alt="Card image cap"
                        style="width: 18rem;">
                    <div class="card-body text-center">
                        <h4>Seminar</h4>
                        <p class="card-text">
                            Seminar Developer Student Club di Universitas Indonesia
                        </p>
                    </div>
                </div>
                <div class="card pt-3" style="width: 18rem;">
                    <img class="card-img-top ml-auto mr-auto" src="{{ ('img/s.png') }}" alt="Card image cap"
                        style="width: 18rem;">
                    <div class="card-body text-center">
                        <h4>Sertifikat</h4>
                        <p class="card-text">
                            Sertifikat kelulusan Belajar Dasar Pemrograman Web di <a
                                href="https://dicoding.com">Dicoding</a>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <h1>Pemahaman</h1>
            <p>Pemahaman saya dalam bahasa pemrograman kira-kira seperti progres bar di bawah ini:</p>
            <h4>Front End</h4>
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
            <h4>Back End</h4>
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
    </div>
</div>
@endsection
