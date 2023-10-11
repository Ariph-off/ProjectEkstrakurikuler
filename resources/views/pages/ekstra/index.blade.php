@extends('backend/panel')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Ekstra</h3>
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
                    <th>Nama Ekstra</th>
                    <th>Kategori</th>
                    @if (auth()->user()->role=="admin")
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($ekstra as $ekstras)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ekstras->nama_ekstra }}</td>
                    <td>{{ $ekstras->id_kategori }}</td>
                    @if (auth()->user()->role=="admin")
                    <td>
                        <form action="{{ route('ekstra.destroy', $ekstras->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('ekstra.edit', $ekstras->id) }}"><i class="fas fa-pen-nib"></i></a>
                            @csrf
                            @method('DELETE')
                            <a type="submit" class="btn btn-danger"><i class="fas fa-trash" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"></i></a>
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
