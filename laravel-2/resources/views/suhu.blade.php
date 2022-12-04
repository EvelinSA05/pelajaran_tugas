@extends('tugas')

@section('content')

<h1>Suhu</h1>

<form action="{{ url('temperature') }}" method="post">
    @csrf
        Suhu Awal :
        <input type="number" name="suhu" placeholder="°Suhu (ketikkan angka)">
            <input type="radio" value="C" name="awal" required>Celcius
            <input type="radio" value="F" name="awal">Fahrenheit
            <input type="radio" value="K" name="awal">Kelvin
            <input type="radio" value="R" name="awal">Reamur
            <input type="radio" value="Ra" name="awal">Rankine
            <br><br>
        Konversi ke : <br>
            <input type="radio" value="C" name="konversi" required>Celcius<br>
            <input type="radio" value="F" name="konversi">Fahrenheit<br>
            <input type="radio" value="K" name="konversi">Kelvin<br>
            <input type="radio" value="R" name="konversi">Reamur<br>
            <input type="radio" value="Ra" name="konversi">Rankine<br><br>
            <input type="submit" name="submit" value="kirim">
</form>

@endsection

@section('menu')
    <br>
    <a href="/">home</a>
@endsection



