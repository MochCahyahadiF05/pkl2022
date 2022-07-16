<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <legend><h2>pesanan anda</h2></legend>
    
    @if($makanan == null)
        <strong>{{$makanan}}</strong>
    @elseif($makanan == 'mie goreng')
        makanan : {{$makanan}} <br>
        harga : 5.000 <br>
    @elseif($makanan == 'seblak')
        makanan : {{$makanan}} <br>
        harga : 7.500 <br>
    @elseif($porsi == 'nasi padang')
        makanan : {{$makanan}} <br>
        harga : 15.000 <br>
    @else
        makanan : {{$makanan}} <br>
        
    @endif

    @if($minuman == null)
        <strong>{{$minuman}}</strong>
    @elseif($minuman == 'teh')
            minuman : {{$minuman}}  <br>
            harga : 5.000 <br>
    @elseif($minuman == 'kopi')
            minuman : {{$minuman}}  <br>
            harga : 7.500 <br>
    @elseif($minuman == 'jus')
            minuman : {{$minuman}}  <br>
            harga : 10.000 <br>
    @else
        minuman : {{$minuman}} <br>
        
    @endif

    @if($porsi == null)
        <strong>{{$porsi}}</strong>
    @elseif($porsi == 'kecil')
        Porsi : {{$porsi}} <br>
            harga : 2.500 <br>
    @elseif($porsi == 'sedang')
        Porsi : {{$porsi}} <br>
            harga : 5.000 <br>
    @elseif($porsi == 'besar')
        Porsi : {{$porsi}} <br>
            harga : 10.000 <br>
    @else
        porsi : {{$porsi}} <br>
                
    @endif

    
</body>
</html>