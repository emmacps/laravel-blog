@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-header">
      {{isset($post) ? 'Edit Post' : 'Create Post'}}
    </div>
    <div class="card-body">
    @include('partials.errors')
      <form action="{{isset($post) ? route('posts.update', $post->id) : route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(isset($post))
          @method('PUT')
        @endif
        <div class="mb-3">
          <label for="" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" value="{{isset($post) ? $post->title : ''}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Discription</label>
          <input type="text" class="form-control" name="description" value="{{isset($post) ? $post->description : ''}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Content</label>
          <input type="hidden" name="content" id="content" value="{{isset($post) ? $post->content : ''}}">
          <trix-editor input="content"></trix-editor>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Published At</label>
          <input type="text" class="form-control" name="published_at" id="published_at" value="{{isset($post) ? $post->published_at : ''}}">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Select Category</label>
          <select name="category" class="form-control">
            @foreach ($categories as $category)
              <option value="{{$category->id}}"
                @if(isset($post))
                  @if($category->id === $post->category_id)
                    selected
                  @endif
                @endif
                >
                {{ $category->name }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Select Tage</label>
          <select name="tags[]" class="form-control" multiple>
            @foreach ($tags as $tag)
              <option value="{{$tag->id}}">
                {{ $tag->name }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="md-3">
          <img src="" alt="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Image</label>
          <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" name="submit" class="btn btn-success">{{isset($post) ? 'Update post' : 'Add post'}}</button>
      </form>
    </div>
  </div>

@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    flatpickr('#published_at', {
      enableTime: true
    });

  </script>
@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
