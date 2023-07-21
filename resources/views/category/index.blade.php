@extends('master')
@section('title','About-page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <a href="{{route('category.create')}}" class="btn btn-info">Create category</a>
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

                        @foreach ($categories as $category)
                            
                     
                      <tr>
                        <th scope="row">{{$category->id}}</th>
                      
                        <td>{{$category->name}}</td>
                        <th>{{$category->subcategories_count}}</th>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>
                          <a href={{route('category.show',['category'=>$category->id])}} class="btn btn-info">show</a>
                          <a href={{route('category.edit',['category'=>$category->id])}} class="btn btn-info">Edit</a>

                          <form action="{{route('category.destroy',['category'=>$category->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Del</button>
                        </td>
                      </tr>

                      @endforeach
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection