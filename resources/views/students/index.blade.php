<html>
    <head>
    <title>Table Students</title>
    </head>
    <body>
       <a href="{{ url ('students/create') }}">Tambah Data</a>
       <br> <br>
        <table border ="1">
            <thead>
            <tr>
                <th>#</th> 
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        @php 
            $no = 1;
        @endphp
        @foreach ($query as $students)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$students->nis}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->class}}</td>
             <td>
                  <a href="#">Edit</a>
                   <br>
                    <a href="{{url('students/delete')}}/{{ $students->id}}">Hapus</a>
                    <br>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </body>
</html>