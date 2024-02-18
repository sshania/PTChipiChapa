<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/createstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
<div class="img-bg-index">
    <div class="head-idx">
        <h1>Data Employee</h1>
    </div>

    <div class="text-idx">
        <div>
            @if(session()->has('sucess'))
                <div>
                    {{ session('sucess') }}
                </div>
            @endif
        </div>

    <div class="container">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Address</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Jabatan</th>
                <th>Divisi</th>
                <th>Nomor Telepon</th>
                <th>Edit</th> 
                <th>Delete</th>                  
            </tr>

            @foreach ($emplo as $emplo )
                <tr>

                    <td>{{ $emplo->id }}</td>
                    <td>{{ $emplo->nama }}</td>
                    <td>{{ $emplo->umur }}</td>
                    <td>{{ $emplo->address }}</td>
                    <td>{{ $emplo->tanggal_lahir }}</td>
                    <td>{{ $emplo->agama }}</td>
                    <td>{{ $emplo->jabatan }}</td>
                    <td>{{ $emplo->divisi }}</td>
                    <td>{{ $emplo->nomor_telepon }}</td>
                    <td>
                        <a href="{{ route('Emplo.edit', ['emplo' => $emplo])}}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{ route('Emplo.destroy', ['emplo' => $emplo]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    
        <div class="act-butt">
            <div class="inp-butt">
                <a class="view-butt" href="{{route('activity')}}">Back</a>
                <a class="input-butt" href="{{route('Emplo.create')}}">Insert Data</a>
            </div>
    </div>
    </div>
</div>
</body>
</html>