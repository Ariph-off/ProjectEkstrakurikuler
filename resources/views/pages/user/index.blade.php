@extends('backend/panel')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pembina</h3>
    </div>
    <br>
    <!-- <div class="container">
        <a class="btn btn-primary btn-md" href="{{ route('pelatih.create') }}"><i class="fas fa-plus"></i></a>
    </div> -->

    <!-- /.card-header -->

    <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama </th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Level</th>
                    @if (auth()->user()->role=="admin")
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->password }}</td>
                    <td>{{ $users->level }}</td>
                    @if (auth()->user()->role=="admin")
                    <td>
                        <form action="{{ route('user.destroy', $users->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('user.edit', $users->id) }}"><i class="fas fa-pen-nib"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
