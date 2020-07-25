@extends('layout/main')

@section('title', 'Profile')
<style>
    .header {
        border-radius: 20px;
    }

    .p {
        border: 3px solid black;
        border-radius: 50%;
        width: 18%;
    }

    .fa {
        padding: 20px;
        font-size: 30px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-google {
        background: #dd4b39;
        color: white;
    }

    .fa-github {
        background: black;
        color: white;
    }

    .fa-instagram {
        background: #125688;
        color: white;
    }

</style>
@section('container')
<div class="container">
    <div class="header mt-4 mb-4 pl-4 pt-3 pb-3 bg-light shadow">
        <h1 style="text-align: center">Profile</h1>
        <br>
        <div class="text-center">
            <img src="{{ ('img/fotoe.jpg') }}" class="p" alt="...">
        </div>
        <br>
        <div class="content">
            <p>Nama saya <b> {{$nama}} </b> umur saya 16 tahun saya lahir
                di Kota <i>Depok </i> pada tanggal 31 Agustus 2003. Saya anak ke 1 dari 2 bersaudara. Saya mempunyai
                adik perempuan bernama Aisha. Ibu saya bernama Isneni dan Ayah saya bernama Ayipudin. Saya sekolah di
                <a href="https://smktarunabhakti.net/">SMK Taruna Bhakti Depok. </a>Jurusan saya Rekayasa Perangkat
                Lunak atau RPL. Hobi saya bermain game dan menonton film. Cita-cita saya adalah untuk menjadi Web
                Developer dan Game Developer.
            </p>
        </div>
        <br>
        <h5 style="text-align: center">My Social Media :</h5>
        <div style="text-align: center">
            <a href="http://daffabagus031@gmail.com" class="fa fa-google" title="Email"></a>
            <a href="https://https://github.com/daffabagus031" class="fa fa-github" title="Github"></a>
            <a href="https://www.instagram.com/bagus_031/" class="fa fa-instagram" title="Instagram"></a>
        </div>
    </div>
</div>
@endsection
