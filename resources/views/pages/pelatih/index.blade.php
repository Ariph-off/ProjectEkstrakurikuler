@extends('backend/panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
<br>
        <a class="btn btn-primary" href="{{ route('pelatih.create') }}"> Create</a>

            <table class="table table-striped table-hover mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pelatih</th>
                        <th scope="col">Ekstra</th>
                        <th scope="col">NO Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelatih as $pelatihs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pelatihs->nama_pelatih }}</td>
                            <td>{{ $pelatihs->id_ekstra }}</td>
                            <td>{{ $pelatihs->no_ho }}</td>
                            <td>{{ $pelatihs->alamat }}</td>
                            <td>
                                <!-- <a href="" class="btn btn-success"><i class="fas fa-pen-nib"></i>Edit</a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a> -->
                                <form action="{{ route('pelatih.destroy', $pelatihs->id) }}" method="POST">
                        <a class="btn btn-success" href="{{ route('pelatih.edit', $pelatihs->id) }}"><i class="fas fa-pen-nib"></i>Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </section>
    <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
