@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-header">
      Posts <a href="{{route('posts.create')}}" class="btn btn-success float-end">Create Post</a>
    </div>
    <div class="card-body">
      @if($posts->count() > 0)
        <table class="table">
          <th>Image</th>
          <th>Title</th>
          <th>Category</th>
          <th>Action</th>
          <tbody>
          @foreach ($posts as $post)
            <tr>
              <td><img src="{{ asset($post->image) }}" alt="" class="img-fluid"></td>
              <td>{{$post->title}}</td>
              <td>{{$post->category->name}}</td>
              @if($post->trashed())
              <td>
                <form action="{{ route('restore-posts', $post->id)}}" method="post">
                  @csrf
                  @method('PUT')
                  <button type="submit" class="btn btn-warning">Restore</button>
                </form>
              </td>
            @else
              <td>
                <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
              </td>
            @endif
              <td>
                <form class="" action="{{ route('posts.destroy', $post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">{{ $post->trashed() ? 'Delete':'Trash' }}</button>
                </form>
              </td>
            </tr>

          @endforeach
          </tbody>
        </table>
      @else
        <h3>No post available</h3>
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
