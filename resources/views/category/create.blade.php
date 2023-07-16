@extends('master')
@section('title','About-page')

@section('content')
<div class="container">
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Category</label>
          <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Slug</label>
            <input type="text" name="category_slug" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <div class="form-check">
            <input class="form-check-input" name="is_active" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Active/Inactive
            </label>
          </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection