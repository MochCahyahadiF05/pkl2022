<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Output</legend>
    @if($bmi<=17.0)
        Berat Badan : {{$beratbadan}} <br>
        Tinggi Badan : {{$tinggi}} <br>
        kurus,kekurangan berat badan tinggi
    @elseif($bmi>=17.0 && $bmi<=18.4)
        Berat Badan : {{$beratbadan}} <br>
        Tinggi Badan : {{$tinggi}} <br>
        kurus,kekurangan berat badan rendah
    @elseif($bmi>=18.5 && $bmi<=25.0)
        Berat Badan : {{$beratbadan}} <br>
        Tinggi Badan : {{$tinggi}} <br>
        status : Normal
    @elseif($bmi>=25.1 && $bmi<=27.0)
        Berat Badan : {{$beratbadan}} <br>
        Tinggi Badan : {{$tinggi}} <br>
        status :kelebihan berat badan  rendah
    @elseif($bmi>=27.1)
        Berat Badan : {{$beratbadan}} <br>
        Tinggi Badan : {{$tinggi}} <br>
        status :kelebihan berat badan tinggi  <br>  
    @endif

    @if ($umur>= 0 && $umur<=16) 
        keterangan :maka belum boleh punya sim';
    @else
        keterangan='maka boleh punya sim';
    @endif
    </fieldset>

    <hr>
        Berat Badan : {{$beratbadan}} <br>
        Tinggi Badan : {{$tinggi}} <br>
        status : {{$status}} <br>
        BMI : {{$bmi}} <br>
        umur : {{$umur}} <br>
        keterangan : {{$text}} <br>
    <hr>

<center>
    <h1>{{$bmi}}</h1>
</center>
</body>
</html>