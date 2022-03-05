<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Hello {{$pname}}</h1> --}}
    <div>
        Hasil dari {{$a1}} X {{$a2}} = {{$a1*$a2}}
        <br>
        Keterangan : 
        @if($a1 < $a2)
            {{$a1}} lebih kecil dari {{$a2}}
        @elseif($a1 > $a2)
            {{$a1}} lebih besar dari {{$a2}}
        @else
            sama
        @endif
        
        @for ($i = 0; $i <= $a1; $i++)
            the current value is {{$i}} <br>
        @endfor
    </div>
</body>
</html>