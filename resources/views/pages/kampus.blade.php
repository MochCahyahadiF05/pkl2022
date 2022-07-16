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

        @foreach ($kampus as $dosen)
        <fieldset>
            
            nama dosen : {{$dosen['nama_dosen']}} <br>
            Mata kuliah : {{$dosen['mengajar']}} <br>
        </fieldset>
        @php
            $nilai=0;
            @endphp
        @foreach ($dosen['mhsd'] as $data)
        nama mahasiswa : {{$data['nama']}} <br>
        nilai {{$data['nilai']}} <br>
        @php
                $nilai+=$data['nilai'];
                @endphp
        @endforeach
        Nilai Rata rata = {{$nilai / count($dosen['mhsd'])}}
        <hr>
        
        @endforeach
    </fieldset>


</body>
</html>