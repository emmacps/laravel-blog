@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-header">
      categories <a href="{{route('categories.create')}}" class="btn btn-success float-end">Create category</a>
    </div>
    <div class="card-body">
      @if($categories->count() > 0)
        <table class="table">
          <th>Name</th>
          <th>Post Count</th>
          <th>Action</th>
          <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{$category->name}}</td>
              <td>{{$category->posts->count()}}</td>
              <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>
              <a href="#" class="btn btn-danger" onclick="handleDelete({{$category->id}})">Delete</a></td>
            </tr>

          @endforeach
          </tbody>
        </table>
      @else
        <h3>No category available</h3>
      @endif

      <!-- Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form class="" action="" method="post" id="deletecategoryForm">
            @method('DELETE')
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="text-center">Are you sure you want to delete this category...</p>
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
      var form = document.getElementById('deletecategoryForm')
      form.action = '/categories/' + id
      $('#deleteModal').modal('show')
    }
  </script>
@endsection
