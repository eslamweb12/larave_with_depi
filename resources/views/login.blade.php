@extends('layout')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{$err}}</p>

        @endforeach

    @endif


    @if(session( 'message'))
        <p class="alert alert-success">  {{session('message')}}</p>
    @endif
    <form action="{{ route('storeLogin') }}" method="post">


        @csrf

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

        <input class="btn btn-success" type="submit" value="login">

    </form>



@endsection
