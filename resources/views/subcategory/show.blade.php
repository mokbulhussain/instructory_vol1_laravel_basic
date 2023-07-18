@extends('master')
@section('title','About-page')

@section('content')
    <h1>{{$subcategory->name}}</h1>
    <h3>{{$subcategory->category->name}}</h3>
    <p>{{$subcategory->created_at->format('d-m-Y')}}</p>
@endsection