@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($users as $user)
            {{$user->first_name.'<br>'}}
        @endforeach
    </div>
@endsection
