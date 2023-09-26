@extends('backend/panel')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pelatih</h3>
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
                    <th>Nama Pelatih</th>
                    <th>Ekstra</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    @if (auth()->user()->role=="admin")
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($pelatih as $pelatihs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelatihs->nama_pelatih }}</td>
                    <td>{{ $pelatihs->id_ekstra }}</td>
                    <td>{{ $pelatihs->no_hp }}</td>
                    <td>{{ $pelatihs->alamat }}</td>
                    @if (auth()->user()->role=="admin")
                    <td>
                        <!-- <a href="" class="btn btn-success"><i class="fas fa-pen-nib"></i>Edit</a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a> -->
                        <form action="{{ route('pelatih.destroy', $pelatihs->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('pelatih.edit', $pelatihs->id) }}"><i class="fas fa-pen-nib"></i></a>
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
