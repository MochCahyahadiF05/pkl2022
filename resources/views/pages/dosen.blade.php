<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @for ($i = 1; $i < $dosen; $i++)
        
    @endfor --}}
        @foreach ($dosen as $data)
        <fieldset>
            <legend>
                <h3>
                    Data Dosen
                </h3>
                
            </legend>
            nama Dosen: {{$data['nama_dosen']}} <br>
            NIP  : {{$data['nip']}} <br>
            @foreach ($data['mhs'] as $mahasiswa)
            <hr>s
                nama Mahasiswa : {{$mahasiswa['nama']}} <br>
                NIM : {{$mahasiswa['nim']}} <br>
                Jurusan : {{$mahasiswa['jurusan']}} <br>
                Mata kuliah :
                @foreach ($mahasiswa['mata_kuliah'] as $makul)
                     <ul>
                        <li>
                            {{$makul}}
                        </li>
                     </ul>
                @endforeach
            @endforeach   
        </fieldset>
        @endforeach
</body>
</html>