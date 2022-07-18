@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-body">
      @if($users->count() > 0)
        <table class="table">
          <th>Image</th>
          <th>Name</th>
          <th>Emmanuel</th>
          <th>Action</th>
          <tbody>
          @foreach ($users as $user)
            <tr>
              <td><img src=""></td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                @if(!$user->isAdmin())
                  <form class="" action="{{ route('users.make-admin', $user->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Make Admin</button>
                  </form>
                @endif
              </td>

          @endforeach
          </tbody>
        </table>
      @else
        <h3>No user available</h3>
      @endif
    </div>
  </div>



@endsection

{{-- @section('scripts')
  <script type="text/javascript">
    function handleDelete(id){
      var form = document.getElementById('deleteCategoryForm')
      form.action = '/categories/' + id
      $('#deleteModal').modal('show')
    }
  </script>
@endsection --}}
