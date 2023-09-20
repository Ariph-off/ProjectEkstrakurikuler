@extends('backend/panel')
@section('content')

<br>        
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Jadwal</h3>
    </div>
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf


        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Hari</label>
            <input type="text" class="form-control @error('hari') is-invalid @enderror" id="exampleInputEmail1" placeholder="hari" value="{{ old('hari') }}"
            name="hari">
        </div>
        @error('hari')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Tanngal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="exampleInputEmail1" placeholder="tanggal" value="{{ old('tanggal') }}"
            name="tanggal">
        </div>
        @error('tanggal')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Jam</label>
            <input type="text" class="form-control @error('jam') is-invalid @enderror" id="exampleInputEmail1" placeholder="jam" value="{{ old('jam') }}"
            name="jam">
        </div>
        @error('jam')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-danger" href="{{ route('jadwal.index') }}"> Back</a>
            </div>
            <div class="col-6" style="text-align: end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    </form>
</div>
        

@endsection
