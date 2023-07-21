@extends('master')

@section('title','Home-page')
@section('content')
    <h1>{{$page_name}}</h1>

    <h2>User List</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            {{-- ?? - mane hosse jodi data na take tokkon null string value nebe --}}
            <td>{{$user->nidcard->card_number ?? ''}}</td>
            <td>{{$user->phone}}</td>
          </tr>

          @endforeach
         
        </tbody>
      </table>

@endsection