@extends('master')
@section('title','About-page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('subcategory.create')}}" class="btn btn-info">Create SubCategory</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Sub Category Name</th>
                        <th scope="col">Create at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($subcategories as $subcategory)
                            
                     
                      <tr>
                        <th scope="row">{{$subcategory->id}}</th>
                        <td>{{$subcategory->category->name}}</td>
                        <td>{{$subcategory->name}}</td>
                        <td>{{$subcategory->created_at->diffForHumans()}}</td>
                        <td><a href={{route('subcategory.edit',['subcategory'=>$subcategory->id])}} class="btn btn-info">Edit</a></td>
                      </tr>

                      @endforeach
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection