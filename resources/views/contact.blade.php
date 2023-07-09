@extends('master')

@section('title','Contact-page')
@section('content')
<h1>{{$page_name}}</h1>
<h2>{{$title}}</h2>


@foreach ($products as $key=>$product )

<ul>
  <li>{{$key}}</li>
  <li>{{$product['name']}}</li>
  <li>{{$product['color']}}</li>
  <li>{{$product['price']}}</li>
</ul>
  
@endforeach


@forelse ($products as $key=>$product)
<ul>
  <li>{{$key}}</li>
  <li>{{$product['name']}}</li>
  <li>{{$product['color']}}</li>
  <li>{{$product['price']}}</li>
</ul>
@empty
  <p>Product Not Found</p>
@endforelse



{{-- conditon with loop --}}
@forelse ($products as $key=>$product)
@include('partial.partial_template')
@empty
  <p>Product Not Found</p>
@endforelse



{{-- conditon with loop --}}
{{-- @forelse ($products as $key=>$product)
<ul>
  @if ($loop>first)
  @continue
  @endif
  <li>{{$key}}</li>
  <li>{{$product['name']}}</li>
  <li>{{$product['color']}}</li>
  <li>{{$product['price']}}</li>
</ul>
@empty
  <p>Product Not Found</p>
@endforelse --}}




@endsection