@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 m-auto">
            <div class="card">
                 <h4 class="card-title p-2">Registeration Forms</h4>
                 <div class="card-body">
                    <form action="{{route('register.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-lable">Name</label>
                            <input class="form-control" type="text" name="name" id="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-lable">Email</label>
                            <input class="form-control" type="email" name="email" id="">
                        </div>
                        <div class="mb-3">
                            <label for="Phone" class="form-lable">Phone</label>
                            <input class="form-control" type="tel" name="phone" id="">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-lable">Password</label>
                            <input class="form-control" type="password" name="password" id="">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-lable">Password Confirmation</label>
                            <input class="form-control" type="password" name="password_confirmation" id="">
                        </div>
                        <div class="mb-3">
                            <button class="form-control btn btn-primary" type="submit"  id="">Register</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
