@extends('layout')

@section('title','contact us')


@section('content')

    <div class="contact_us">
        <div class="container">
            @if(session('message'))

                <p class="alert alert-danger">{{ session('message') }}</p>
            @endif
                @if(session('register'))

                    <p class="alert alert-danger">{{ session('register') }}</p>
                @endif
            <form action="{{route('saveContact')}}"  method="POST">
                @if($errors->any())
                    @foreach($errors->all() as $error )
                        <p class="alert alert-danger"> {{$error}}</p>

                    @endforeach
                @endif
                @csrf
                <div class="mb-2">
                    <label>username</label>
                    <input class="form-control" name="username" value="{{old('username')}}">
                    @error('username')
                    <p class="alert alert-danger">username</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label>title</label>
                    <input class="form-control" name="title" value="{{old('title')}}" >
                    @error('title')
                    <p class="alert alert-danger">$title</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label>message</label>
                   <textarea name="message" class="form-control">

                        {{old('message')}}
                   </textarea>
                    @error('message')
                    <p class="alert alert-danger">$message</p>
                    @enderror
                </div>
                <input type="submit" value="save">

            </form>
        </div>
    </div>
@endsection
