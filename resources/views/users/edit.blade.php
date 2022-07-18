@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @include('partials.errors')
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                  <form class="" action="{{ route('users.update-profile')}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="name" value="{{ $user->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">About</label>
                      <input type="text" name="about" value="{{ $user->about}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Update Profile</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
