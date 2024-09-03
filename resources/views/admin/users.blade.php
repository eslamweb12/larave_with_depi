@extends('layout')

@section('content')
    <h1 class="text-center">all users</h1>
    <table class="table table-hover table-striped table-bordered">
        <thead>
        <tr>
            <td>image</td>
            <td>username</td>
            <td>email</td>
            <td>date</td>
            <td>control</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)

            <tr>
                <td>
                    @if($item->image && $item->image->name)
                        <img src="{{ asset('images/users/' . $item->image->name) }}" alt="">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" alt="">
                    @endif
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <button class="btn btn-primary">edit</button>
                    <button class="btn btn-danger">delete</button>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>



@endsection
