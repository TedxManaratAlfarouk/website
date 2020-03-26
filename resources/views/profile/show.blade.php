@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label>First Name</label>
            <p class="form-control">{{$user->first_name}}</p>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <p class="form-control">{{$user->last_name}}</p>
        </div>
        <div class="form-group">
            <label>bio</label>
            <p class="form-control">{{$user->bio}}</p>
        </div>
        @can('update', $user)
            <a href="{{route('profile.edit', $user->username)}}" class="btn btn-success">Edit</a>
        @endcan
        @can('delete', $user)
            <form action="{{route('profile.destroy', $user->username)}}" method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
                @method('DELETE')
            </form>
        @endcan
    </div>
@endsection
