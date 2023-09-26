@extends('backend/panel')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data kategori</h3>
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
                    <th>Kategori</th>
                    <th>keterangan</th>
                    @if (auth()->user()->role=="admin")
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $kategoris)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kategoris->nama_kategori }}</td>
                    <td>{{ $kategoris->keterangan }}</td>
                    @if (auth()->user()->role=="admin")
                    <td>
                        <form action="{{ route('kategori.destroy', $kategoris->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('kategori.edit', $kategoris->id) }}"><i class="fas fa-pen-nib"></i></a>
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
