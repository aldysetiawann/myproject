<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail Product</h1>
    <div>
        @if ($id ==1)
            <h2>Sanmol <br></h2>
            <p>Harga : Rp. 12.345</p>
        @elseif ($id ==2) 
            <h2>Vicks<br></h2>
            <p>Harga : Rp. 123.456</p>
        @else
            <h2>Xonce<br></h2>
            <p>Harga : Rp. 123.456</p>
        @endif
        {{-- Test {{ $id }} --}}
    </div>
</body>
</html>