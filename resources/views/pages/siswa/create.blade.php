@extends('backend/panel')
@section('content')

<br>        
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Siswa</h3>
    </div>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf


        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Siswa</label>
            <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_siswa" value="{{ old('nama_siswa') }}"
            name="nama_siswa">
        </div>
        @error('nama_siswa')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Kelas</label>
            <input type="text" class="form-control @error('id_kelas') is-invalid @enderror" id="exampleInputEmail1" placeholder="id_kelas" value="{{ old('id_kelas') }}"
            name="id_kelas">
        </div>
        @error('id_kelas')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Nisn</label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="exampleInputEmail1" placeholder="nisn" value="{{ old('nisn') }}"
            name="nisn">
        </div>
        @error('nisn')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">No Hp</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputEmail1" placeholder="no_hp" value="{{ old('no_hp') }}"
            name="no_hp">
        </div>
        @error('no_hp')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">eksra</label>
            <input type="text" class="form-control @error('id_ekstra') is-invalid @enderror" id="exampleInputEmail1" placeholder="id_ekstra" value="{{ old('id_ekstra') }}"
            name="id_ekstra">
        </div>
        @error('id_ekstra')
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
        

@endsection
