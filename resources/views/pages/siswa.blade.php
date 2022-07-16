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
        <legend>
            Data siswa
        </legend>
        @foreach($siswa as $murid)
        <hr>
            nama : {{$murid['name']}} <br>
            umur : {{$murid['umur']}} <br>
            @if($murid['umur']>= 0 && $murid['umur']<=16)
                belum boleh punya sim <br>
            @elseif($murid['umur']>= 17)
                boleh punya sim <br>
            @endif
            hobi :
            @foreach($murid['hobi'] as $hobi)
                <ul>
                    <li>
                        {{$hobi}}
                    </li>
               </ul>
            @endforeach
        @endforeach
        <hr>
    </fieldset>
</body>
</html>