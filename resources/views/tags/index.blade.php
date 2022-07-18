@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-header">
      tags <a href="{{route('tags.create')}}" class="btn btn-success float-end">Create tag</a>
    </div>
    <div class="card-body">
      @if($tags->count() > 0)
        <table class="table">
          <th>Name</th>
          <th>Post Count</th>
          <th>Action</th>
          <tbody>
          @foreach ($tags as $tag)
            <tr>
              <td>{{$tag->name}}</td>
              <td>{{ $tag->posts->count()}}</td>
              <td><a href="{{route('tags.edit', $tag->id)}}" class="btn btn-warning">Edit</a>
              <a href="#" class="btn btn-danger" onclick="handleDelete({{$tag->id}})">Delete</a></td>
            </tr>

          @endforeach
          </tbody>
        </table>
      @else
        <h3>No tag available</h3>
      @endif

      <!-- Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form class="" action="" method="post" id="deletetagForm">
            @method('DELETE')
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="text-center">Are you sure you want to delete this tag...</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, go back</button>
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



@endsection

@section('scripts')
  <script type="text/javascript">
    function handleDelete(id){
      var form = document.getElementById('deletetagForm')
      form.action = '/tags/' + id
      $('#deleteModal').modal('show')
    }
  </script>
@endsection
