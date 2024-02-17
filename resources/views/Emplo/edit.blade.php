<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Edit Data</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    {{-- <form method="post" action="{{ route('Emplo.update',['emplo' => $emplo]) }}"> --}}
    <form method="post" action="/emplos/{{$emplos->id}}/update" >
        
        @csrf
        @method('put')

        <div>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama" value="{{ $emplos->nama }}"/>
        </div>

        <div>
            <label>Umur</label>
            <input type="text" name="umur" placeholder="Umur"  value="{{ $emplos->umur }}"/>
        </div>

        <div>
            <label>Address</label>
            <input type="text" name="address" placeholder="Address"  value="{{ $emplos->address }}"/>
        </div>

        <div>
            <label>Date of Birth</label>
            <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir"  value="{{ $emplos->tanggal_lahir }}"/>
        </div>

        <div>
            <label>Religion</label>
            <input type="text" name="agama" placeholder="Agama"  value="{{ $emplos->agama }}"/>
        </div>

        <div>
            <label>Position</label>
            <input type="text" name="jabatan" placeholder="Jabatan"  value="{{ $emplos->jabatan }}"/>
        </div>

        <div>
            <label>Division</label>
            <input type="text" name="divisi" placeholder="Divisi"  value="{{ $emplos->divisi }}"/>
        </div>

        <div>
            <label>Phone Number</label>
            <input type="text" name="nomor_telepon" placeholder="Nomor Telepon"  value="{{ $emplos->nomor_telepon }}"/>
        </div>

        <div>
            <input type="submit" value="Update"/>            
        </div>

    </form>
</body>
</html>