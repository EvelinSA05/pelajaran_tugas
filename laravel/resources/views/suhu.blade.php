@extends('tugas')

@section('content')

<h1>Suhu</h1>

<form action="{{ url('temperature') }}" method="post">

    @csrf
    Suhu :
    {{-- <input type="number" name="suhu1" placeholder="suhu1" id="">
    <br><br>
    <input type="radio" name="celcius" value="HTML">
    <label for="celcius">Celcius</label><br>
    <input type="radio" id="css" name="fahrenheit" value="CSS">
    <label for="fahrenheit">Fahrenheit</label><br>
    <input type="radio" name="reamur" value="JavaScript">
    <label for="reamur">Reamur</label><br>
    <input type="radio" name="kelvin" value="JavaScript">
    <label for="kelvin">Kelvin</label><br><br>
    <input type="submit" name="submit" value="kirim" id=""> --}}

    <input type="number" name="suhu" placeholder="suhu" id="">
    {{-- <input type="text" name="ket" placeholder="ket" id=""> --}}
    <br><br>
    <input type="submit" name="celcius" value="Celcius" id="">
    <br><br>
    <input type="submit" name="fahrenheit" value="Fahrenheit" id="">
    <br><br>
    <input type="submit" name="reamur" value="Reamur" id="">
    <br><br>
    <input type="submit" name="kelvin" value="Kelvin" id="">

</form>

@endsection

@section('menu')
    <br><br>
    <a href="/">home</a>
@endsection

