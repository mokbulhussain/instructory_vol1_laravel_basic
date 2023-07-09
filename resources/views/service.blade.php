@extends('master')


@section('content')
    <h1>{{$page_name}}</h1>
    

    @for ($i=0;$i<4;$i++)

      {{$service_list[$i]}} <br/>
      
    @endfor


@endsection