@extends('backend/panel')

@section('content')
    <!-- Content Wrapper. Contains page content -->

<br>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Pembina</h3>
    </div>
    <form action="{{ route('pembina.update', $pembina->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Pembina</label>
            <input type="text" class="form-control @error('nama_pembina') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_pembina" value="{{ old('nama_pembina', $pembina->nama_pembina) }}"
            name="nama_pembina">
        </div>
        @error('nama_pembina')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Id Ekstra</label>
            <input type="number" class="form-control @error('id_ekstra') is-invalid @enderror" id="exampleInputEmail1" placeholder="id_ekstra" value="{{ old('id_ekstra', $pembina->id_ekstra) }}"
            name="id_ekstra">
        </div>
        @error('id_ekstra')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">No Hp</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputEmail1" placeholder="no_hp" value="{{ old('no_hp', $pembina->no_hp) }}"
            name="no_hp">
        </div>
        @error('no_hp')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" placeholder="alamat" value="{{ old('alamat', $pembina->alamat) }}"
            name="alamat">
        </div>
        @error('alamat')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-danger" href="{{ route('pembina.index') }}"> Back</a>
            </div>
            <div class="col-6" style="text-align: end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    </form>
</div>
       
@endsection
