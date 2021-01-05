@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Create</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.NO</th>
                <th>Category</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @isset($categories)

                @foreach ($categories as $key => $value)
                      <tr>
                        <td>
                          {{  $key + 1 }}
                        </td>
                        <td>
                          {{ $value->name }}
                        </td>
                        <td>
                          <a href="{{ route('categories.edit', $value->id) }}" class="btn btn-info btn-sm">Edit</a>
                          <form action="{{ route('categories.destroy', $value->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                          </form>
                        </td>
                      </tr>
                @endforeach
                    
                @endisset
            </tbody>
          </table>
        </div>


        <div class="col-md-8">
          <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Create</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.NO</th>
                <th>Category</th>
                <th>Firstname</th>
                <th>Mainname</th>
                <th>Price</th>
                <th>Playlength</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @isset($products)

                @foreach ($products as $key => $value)
                      <tr>
                        <td>
                          {{  $key + 1 }}
                        </td>
                        <td>
                          {{ $value->category->name ?? '' }}
                        </td>
                        <td>
                          {{ $value->firstname }}
                        </td>
                        <td>
                          {{ $value->mainname }}
                        </td>
                        <td>
                           {{ $value->price }}
                        </td>
                        <td>
                          {{  $value->playlength  }}
                        </td>
                        <td>
                          <a href="{{ route('products.edit', $value->id) }}" class="btn btn-info btn-sm">Edit</a>
                          <form action="{{ route('products.destroy', $value->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                          </form>
                        </td>
                      </tr>
                @endforeach
                    
                @endisset
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
