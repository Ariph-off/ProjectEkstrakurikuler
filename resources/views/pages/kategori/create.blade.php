@extends('backend/panel')
@section('content')

<br>        
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Detail Pesanan</h3>
    </div>
    <form action="{{ route('pelatih.store') }}" method="POST">
        @csrf


        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Pelatih</label>
            <input type="text" class="form-control @error('nama_pelatih') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_pelatih" value="{{ old('nama_pelatih') }}"
            name="nama_pelatih">
        </div>
        @error('nama_pelatih')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Id Ekstra</label>
            <input type="text" class="form-control @error('id_ekstra') is-invalid @enderror" id="exampleInputEmail1" placeholder="id_ekstra" value="{{ old('id_ekstra') }}"
            name="id_ekstra">
        </div>
        @error('id_ekstra')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">No Hp</label>
            <input type="text" class="form-control @error('no_ho') is-invalid @enderror" id="exampleInputEmail1" placeholder="no_ho" value="{{ old('no_ho') }}"
            name="no_ho">
        </div>
        @error('no_ho')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" placeholder="alamat" value="{{ old('alamat') }}"
            name="alamat">
        </div>
        @error('alamat')
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
