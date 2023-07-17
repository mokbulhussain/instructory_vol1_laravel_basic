@extends('master')
@section('title','About-page')

@section('content')
<div class="container">

    @if(session('status'))
      <div class="bg-danger">
        {{session('status')}}
      </div>
    @endif


    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputText" class="form-label">Category</label>
          <input type="text" name="category_name" class="form-control @error('category_name')
            is-invalid
          @enderror" id="exampleInputText" aria-describedby="emailHelp">
        
          @error('category_name')
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