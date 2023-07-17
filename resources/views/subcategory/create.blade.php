@extends('master')
@section('title','Sub Category-page')

@section('content')
<div class="container">
    <form action="{{route('subcategory.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <select class="form-select" name="category_id" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              
 
              </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputText" class="form-label">SubCategory</label>
          <input type="text" name="subcategory_name" class="form-control @error('subcategory_name')
            is-invalid
          @enderror" id="exampleInputText" aria-describedby="emailHelp"
          value="{{ old('subcategory_name') }}"
          >
        
          @error('subcategory_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
          @enderror
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