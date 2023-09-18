@extends('backend/panel')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pembina</h3>
    </div>
    <br>
    <!-- <div class="container">
        <a class="btn btn-primary btn-md" href="{{ route('pelatih.create') }}"><i class="fas fa-plus"></i></a>
    </div> -->

    <!-- /.card-header -->
    <form class="form-inline">
        <div class="form-group">
            <form action="/pelatih" method="get">
                <input type="search" id="inputPassword6" name="search" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </form>

    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pembina</th>
                    <th>Kelas</th>
                    <th>NISN</th>
                    <th>No HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswas)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswas->nama_siswa }}</td>
                    <td>{{ $siswas->id_kelas }}</td>
                    <td>{{ $siswas->nisn }}</td>
                    <td>{{ $siswas->no_hp }}</td>
                    <td>
                        <form action="{{ route('siswa.destroy', $siswas->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('siswa.edit', $siswas->id) }}"><i class="fas fa-pen-nib"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection