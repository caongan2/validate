@extends('admin.layout.master')
@section('title')
    {{$user->username}}
@endsection
@section('content')

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Information User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputClientCompany">Email</label>
                    <input type="email" value="{{$user->email}}" disabled id="inputClientCompany" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Number phone</label>
                    <input type="number" value="{{$user->phone}}" disabled name="phone" id="inputDescription" class=" form-control">
                </div>
                <div class="form-group">
                    <label for="inputName">Username</label>
                    <input type="text" value="{{$user->username}}" disabled name="username" id="inputName" class="form-control">

                </div>

                <button type="submit" class="btn btn-success">Accept</button>
                <a href="{{route('user.list')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
        <!-- /.card-body -->
    </div>
@endsection
