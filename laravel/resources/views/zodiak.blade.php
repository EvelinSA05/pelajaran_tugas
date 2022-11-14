<h1>ZODIAK</h1>

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