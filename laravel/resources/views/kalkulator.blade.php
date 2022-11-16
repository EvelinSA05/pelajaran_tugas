@extends('tugas')

@section('content')

<h1>KALKULATOR</h1>

<form action="{{ url('calculator') }}" method="post">

    @csrf
    Bilangan 1 &nbsp;:&ensp;
    <input type="number" name="bil1" placeholder="masukkan bilangan 1" required>
    <br><br>
    Bilangan 2 &nbsp;:&ensp;
    <input type="number" name="bil2" placeholder="masukkan bilangan 2" required>
    <br><br>
    <input type="submit" value="tambah" name="tambah">
    <br><br>
    <input type="submit" value="kurang" name="kurang">
    <br><br>
    <input type="submit" value="kali" name="kali">
    <br><br>
    <input type="submit" name="bagi" value="bagi">
    <br><br>
    <input type="submit" name="modulus" value="modulus">
    <br><br>
    <input type="submit" name="pangkat" value="pangkat">

</form>

@endsection

@section('menu')
    <a href="/">home</a>
@endsection
