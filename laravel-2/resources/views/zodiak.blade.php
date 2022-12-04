@php
    $p = 5;
    $l = 3;
    $luas = $p * $l;
@endphp

@extends('tugas')

@section('content')

<h1>{{ $luas }}</h1>

<h1>{{ $judul }}</h1>

<h1>ZODIAK</h1>

@foreach ($contoh as $key=>$value)
    <h2>{{ $key.' : '.$value }}</h2>
@endforeach

<form action="{{ url('zodiac') }}" method="post">

    @csrf
    Tanggal &nbsp;:&nbsp;
    <input type="number" name="tanggal" placeholder="masukkan tanggal" required>
    <br><br>
    Bulan &emsp;:
    &nbsp;<input type="number" name="bulan" placeholder="masukkan bulan" required>
    <br><br>
    <input type="submit" name="submit" value="kirim">

</form>

@endsection

@section('menu')
    <br>
    <a href="/">home</a>
@endsection

