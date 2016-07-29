@extends('layout.master')

@section('namauser')
    @foreach ($users as $user) 
        {{$user->USER_USERNAME}}
    @endforeach
@stop

@section('profiluser')
    @foreach ($comps as $comp)
        <p>
                  {{$comp->PERUSAHAAN_NAMA}}
                  <small>Member since Nov. 2012</small>
                </p>
    @endforeach
@stop

@section('content')
    <style>
            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    <div class="content">
        <div class="title">Selamat Datang Di GEN1 Mini FA</div>
    </div>
@stop