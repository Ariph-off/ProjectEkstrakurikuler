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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ekstra as $ekstras)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ekstras->nama_ekstra }}</td>
                    <td>{{ $ekstras->id_kategori }}</td>
                    <td>
                        <form action="{{ route('ekstra.destroy', $ekstras->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('ekstra.edit', $ekstras->id) }}"><i class="fas fa-pen-nib"></i></a>
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