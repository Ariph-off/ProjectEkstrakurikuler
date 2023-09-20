@extends('backend/panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->

        <div class="container">
<br>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Pelatih</h3>
    </div>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Siswa</label>
            <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}"
            name="nama_siswa">
        </div>
        @error('nama_siswa')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Kelas</label>
            <input type="number" class="form-control @error('id_kelas') is-invalid @enderror" id="exampleInputEmail1" placeholder="id_kelas" value="{{ old('id_kelas', $siswa->id_kelas) }}"
            name="id_kelas">
        </div>
        @error('id_kelas')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Nisn</label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="exampleInputEmail1" placeholder="nisn" value="{{ old('nisn', $siswa->nisn) }}"
            name="nisn">
        </div>
        @error('nisn')
            <span class="text-danger">{{ $message }}</span>
        @enderror


        <div class="form-group">
            <label for="exampleInputEmail1">No Hp</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputEmail1" placeholder="no_hp" value="{{ old('no_hp', $siswa->no_hp) }}"
            name="no_hp">
        </div>
        @error('no_hp')
            <span class="text-danger">{{ $message }}</span>
        @enderror

      
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-danger" href="{{ route('siswa.index') }}"> Back</a>
            </div>
            <div class="col-6" style="text-align: end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    </form>
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
@endsection
