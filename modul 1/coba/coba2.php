<a href="{{url('mahasiswa/create')}}">Tambah Data +</a>
<form action="/mahasiswa" method="GET">
    <input type="search" name="search">
</form>

<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Nilai</th>
        <th>Action</th>
    </tr>
    @foreach($datas as $key=>$value)
    <tr>
        <td>{{$value->nim}}</td>
        <td>{{$value->nama}}</td>
        <td>{{$value->umur}}</td>
        <td>{{$value->alamat}}</td>
        <td>{{$value->nilai}}</td>
        <td><button><a href="{{url('mahasiswa/'.$value->id.'/edit')}}">Update</a></button></td>
        <td>
            <form action="{{url('mahasiswa/'.$value->id)}}" method="POST">
                @csrf 
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit">DELETE</button>
            </form>
        </td>
        <td><button><a href="{{url('mahasiswa2/'.$value->id.'/edit')}}">Nilai</a></button></td>
    </tr>
    @endforeach
</table>