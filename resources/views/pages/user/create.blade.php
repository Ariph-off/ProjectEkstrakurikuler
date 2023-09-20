@extends('backend/panel')
@section('content')

<br>        
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create Detail Pesanan</h3>
    </div>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf


        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="name" value="{{ old('name') }}"
            name="name">
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="email" value="{{ old('email') }}"
            name="email">
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" placeholder="password" value="{{ old('password') }}"
            name="password">
        </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Level</label>
            <input type="text" class="form-control @error('level') is-invalid @enderror" id="exampleInputEmail1" placeholder="level" value="{{ old('level') }}"
            name="level">
        </div>
        @error('level')
            <span class="text-danger">{{ $message }}</span>
        @enderror

   

    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-danger" href="{{ route('user.index') }}"> Back</a>
            </div>
            <div class="col-6" style="text-align: end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    </form>
</div>
        

@endsection
