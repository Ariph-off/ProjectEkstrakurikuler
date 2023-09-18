@extends('backend/panel')
@section('content')

<br>        
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Ekstra</h3>
    </div>
    <form action="{{ route('ekstra.store') }}" method="POST">
        @csrf


        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Ekstra</label>
            <input type="text" class="form-control @error('nama_ekstra') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_ekstra" value="{{ old('nama_ekstra') }}"
            name="nama_ekstra">
        </div>
        @error('nama_ekstra')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Kategori</label>
            <input type="text" class="form-control @error('id_kategori') is-invalid @enderror" id="exampleInputEmail1" placeholder="id_kategori" value="{{ old('id_kategori') }}"
            name="id_kategori">
        </div>
        @error('id_kategori')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-danger" href="{{ route('ekstra.index') }}"> Back</a>
            </div>
            <div class="col-6" style="text-align: end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    </form>
</div>
        

@endsection
