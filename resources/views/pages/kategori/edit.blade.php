@extends('backend/panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->

<br>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Kategori</h3>
    </div>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Kategori</label>
            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
            name="nama_kategori">
        </div>
        <!-- @error('nama_pelatih')
            <span class="text-danger">{{ $message }}</span>
        @enderror -->

        <div class="form-group">
            <label for="exampleInputEmail1">keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="exampleInputEmail1" placeholder="keterangan" value="{{ old('keterangan', $kategori->keterangan) }}"
            name="keterangan">
        </div>
        @error('keterangan')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-danger" href="{{ route('pelatih.index') }}"> Back</a>
            </div>
            <div class="col-6" style="text-align: end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    </form>
</div>
        
       
@endsection
