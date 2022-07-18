@extends('layouts.app')

@section('content')

  <div class="card card-defauilt">
    <div class="card-header">
      {{isset($tag) ? 'Edit tag' : 'Create tag'}}
    </div>
    <div class="card-body">
    @include('partials.errors')
      <form class="" action="{{isset($tag) ? route('tags.update', $tag->id) : route('tags.store')}}" method="post">
        @csrf
        @if(isset($tag))
          @method('PUT')
        @endif
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{isset($tag) ? $tag->name : ''}}">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{isset($tag) ? 'Update tag' : 'Add tag'}}</button>
      </form>
    </div>
  </div>

@endsection
