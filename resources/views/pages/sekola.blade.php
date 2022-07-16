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
        @foreach($sekola as $siswa)
        <fieldset>

            nama : {{$siswa['nama_siswa']}} <br>
            jurusan : {{$siswa['jurusan']}} <br>
            @foreach ($siswa['nilai'] as $nilai)
                B indonesia : {{$nilai['indo']}}
                B Inggris   : {{$nilai['ing']}}
                Produktif   : {{$nilai['pro']}}
                Matematika  : {{$nilai['mtk']}}
                @php
                    $rata=$nilai['indo']+$nilai['ing']+$nilai['pro']+$nilai['mtk'];
                    $rata_rata=$rata/4;
                @endphp
                <br>
                Rata-rata : {{$rata_rata}}
                @switch($rata_rata)
                    @case($rata_rata >=85 && $rata_rata <=100)
                        Grade (A)
                        @break
                    @case($rata_rata>=75 && $rata_rata<85)
                        Grade (B)
                        @break
                    @case($rata_rata>=60 && $rata_rata<75)
                        Grade (C)
                        @break
                    @case($rata_rata>=50 && $rata_rata<60)
                        Grade (D)
                        @break
                    @case($rata_rata>=0 && $rata_rata<50)
                        Grade (E)
                        @break
                    @default
                        
                @endswitch
                
            @endforeach
        </fieldset>
        @endforeach
    </fieldset>
</body>
</html>