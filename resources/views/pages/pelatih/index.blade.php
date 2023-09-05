@extends('backend/panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">

          <button type="button" class="btn btn-success mt-3"><i class="fas fa-plus"></i>Tambah</button>

            <table class="table table-striped table-hover mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pelatih</th>
                        <th scope="col">Id Ekstra</th>
                        <th scope="col">NO Hp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelatihs as $pelatih)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pelatih->nama_pelatih }}</td>
                            <td>{{ $pelatih->id_ekstra }}</td>
                            <td>{{ $pelatih->no_ho }}</td>
                            <td>{{ $pelatih->alamat }}</td>
                            <td>
                                <a href="" class="btn btn-success"><i class="fas fa-pen-nib"></i>Edit</a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</a>
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
