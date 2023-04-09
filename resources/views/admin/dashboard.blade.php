@extends('layouts.app')

@section('content')
    <title>{{ 'Beranda' }}</title>
    <style>
        .circle {
            width: 135px;
            height: 140px;
            padding: 10px;
            border-radius: 50%;
            border: 1px solid #007bff;
            background-color: #E2F4FF;
            color: black;
            font-family: 'Lora';
            font-style: normal;
            text-align: center;
            font-size: 85px;
            font-weight: bold;
            box-sizing: border-box;
            display: inline-block;
        }
    </style>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Beranda') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('Selamat datang') }} {{ auth()->user()->name }} !
                            </p>
                            <div style="display:flex; justify-content:center;">
                                <p class="circle">0</p>
                            </div>
                            <div class="p-1">
                                <p class="text-center"
                                    style="font-family: 'Source Serif Pro'; font-size:'30px'; font-weight:700">
                                    Jumlah Pemandu Wisata
                                <p style="border:1px solid #000000;"></p>
                                </p>
                            </div>
                            <div class="p-3 d-flex justify-content-between align-items-center"
                                style="background-color: #A8D672; border-radius:10px; font-family:'Source Serif Pro'; font-weight:600; text-align:left">
                                <p class="m-0">Nama</p>
                                <div>
                                    <button
                                        style="border-radius:10px; font-family:'Poppins'; font-weight: 600; color:#000000"
                                        class="btn btn-primary gap-2 ml-auto" type="button">Terima</button>
                                    <button
                                        style="border-radius:10px; font-family:'Poppins'; font-weight: 600; color:#000000"
                                        class="btn btn-danger gap-2" type="button">Tolak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
