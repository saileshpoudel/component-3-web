@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form  action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="category_id" class="form-label">Type</label>
                  <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $key => $value)
                    <option value="{{  $key }}">
                      {{  $value }}
                    </option>
                    @endforeach
                  </select>

                  <label for="firstname" class="form-label">Firstname</label>
                  <input type="text" name="firstname" id="firstname" class="form-control">
                  
                  <label for="mainname" class="form-label">Mainname</label>
                  <input type="text" name="mainname" id="mainname" class="form-control">
                  
                  <label for="price" class="form-label">Price</label>
                  <input type="text" name="price" id="price" class="form-control">

                  <label for="numpages" class="form-label">Numpages</label>
                  <input type="text" name="numpages" id="numpages" class="form-control">

                  <label for="playlength" class="form-label">Playlength</label>
                  <input type="text" name="playlength" id="playlength" class="form-control">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection b