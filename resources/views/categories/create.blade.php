@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-header">
      {{isset($category) ? 'Edit Category' : 'Create Category'}}
    </div>
    <div class="card-body">
    @include('partials.errors')
      <form class="" action="{{isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" method="post">
        @csrf
        @if(isset($category))
          @method('PUT')
        @endif
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{isset($category) ? $category->name : ''}}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{isset($category) ? 'Update Category' : 'Add Category'}}</button>
      </form>
    </div>
  </div>

@endsection
