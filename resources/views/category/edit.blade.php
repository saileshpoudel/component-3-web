@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form  action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('put')

                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Title" name="name" value="{{ $category->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
