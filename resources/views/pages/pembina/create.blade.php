@extends('backend/panel')
@section('content')

<br>        
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Detail Pesanan</h3>
    </div>
    <form action="{{ route('pembina.store') }}" method="POST">
        @csrf


        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama pembina</label>
            <input type="text" class="form-control @error('nama_pembina') is-invalid @enderror" id="exampleInputEmail1" placeholder="nama_pembina" value="{{ old('nama_pembina') }}"
            name="nama_pembina">
        </div>
        @error('nama_pembina')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
                            <label for="exampleInputEmail1">Ekstra </label>
                            <select name="id_ekstra" id="" class="form-control select2">
                                <option value="">-- Pilih Ekstra --</option>
                                @foreach ($ekstra as $ekstras)
                                    <option value="{{ $ekstras->id }}"> {{ $ekstras->nama_ekstra }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('nama')
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
