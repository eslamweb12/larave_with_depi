@extends('layout')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>

        @endforeach

    @endif

    @if(session( 'register'))
        <p class="alert alert-success">  {{session('register')}}</p>
    @endif
    <form action="{{ route('userStore') }}" method="post" enctype="multipart/form-data">


        @csrf
        <div class="mb-2">
            <label>
                name
            </label>
            <input class="form-control" name="name">


        </div>
        <div class="mb-2">
            <label>
                email
            </label>
            <input class="form-control" name="email">


        </div>
        <div class="mb-2">
            <label>
                password
            </label>
            <input class="form-control" type="password" name="password">


        </div>
        <div class="mb-2">
            <label>
                image
            </label>
            <input class="form-control" type="file" name="image">


        </div>

        <input class="btn btn-success" type="submit" value="register">

    </form>



@endsection
