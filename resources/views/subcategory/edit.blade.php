@extends('master')
@section('title','Sub Category-page')

@section('content')
<div class="container">


  <div class="row">
    <div class="col-xl-12">
        <a href="{{route('subcategory.index')}}" class="btn btn-primary">Sub Category</a>
    </div>
  </div>

    <form action="{{route('subcategory.update',['subcategory'=>$subcategory->id])}}" method="POST" class="my-5">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" aria-label="Default select example">
                <option >Open this select menu</option>
                @foreach ($categories as $category )
                <option value="{{$category->id}}" @if($category->id==$subcategory->category_id) selected @endif>{{$category->name}}</option>
                @endforeach
              </select>
              @error('category_id')
              <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
              </span>
            @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputText" class="form-label">SubCategory</label>
          <input type="text" name="subcategory_name" value="{{$subcategory->name}}" class="form-control @error('subcategory_name')
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
            <input class="form-check-input" name="is_active" @if($subcategory->is_active) checked @endif type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Active/Inactive
            </label>
          </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

    
@endsection