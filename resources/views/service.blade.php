@extends('master')

@section('title','service-page')

@section('content')
    <h1>{{$page_name}}</h1>
    

    @for ($i=0;$i<4;$i++)

      {{$service_list[$i]}} <br/>
      
    @endfor


    @if ($product_count<15)
      <p>Product is Low......</p>
    @endif


    @if ($product_count==10)
      <h2>Product is Low</h2>
    @else
      <h2>{{$product_count}}</h2>
    @endif


    @switch($color)
      @case("red")
        <p>color is avalatble</p>
        @break

        @case("blue")
        <p>Not color is avalabile</p>
        @break
    
      @default
        <p>Color is not fund</p>
    @endswitch



    @empty($product)
      <p>product not found</p>
    @endempty


@endsection