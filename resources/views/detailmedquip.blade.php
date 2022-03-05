<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail Medical Equipment</h1>
    <div>
        @if ($id ==1)
            <h2>Kursi Roda <br></h2>
            <p>Harga : Rp. 123.456.789</p>
        @elseif ($id ==2) 
            <h2>Oxygen<br></h2>
            <p>Harga : Rp. 123.456.789</p>
        @else
            <h2>Masker<br></h2>
            <p>Harga : Rp. 123.456.789</p>
        @endif
        {{-- Test {{ $id }} --}}
    </div>
</body>
</html>