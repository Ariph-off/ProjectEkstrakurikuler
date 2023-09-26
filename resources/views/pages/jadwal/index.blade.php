@extends('backend/panel')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Jadwal</h3>
    </div>
    <br>
    <!-- <div class="container">
        <a class="btn btn-primary btn-md" href="{{ route('pelatih.create') }}"><i class="fas fa-plus"></i></a>
    </div> -->

    <!-- /.card-header -->

    <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    @if (auth()->user()->role=="admin")
                    <th>Action</th>
                    @endif

                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $jadwals)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jadwals->hari }}</td>
                    <td>{{ $jadwals->tanggal }}</td>
                    <td>{{ $jadwals->jam }}</td>
                    @if (auth()->user()->role=="admin")
                    <td>
                        <form action="{{ route('jadwal.destroy', $jadwals->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('jadwal.edit', $jadwals->id) }}"><i class="fas fa-pen-nib"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
