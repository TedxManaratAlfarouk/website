@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('auth.registrationForm', $user->key)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control"
                       value="{{old('first_name', $user->first_name)}}">
                @error('first_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{old('last_name', $user->last_name)}}">
                @error('last_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}">
                @error('email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" id="editor"> {{old('bio')}} </textarea>
                @error('bio')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
                @error('password')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
                @error('password_confirmation')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <input type="hidden" name="key" value="{{$user->key}}">
            <input type="submit" name="submit" id="" value="Register" class="btn btn-primary">
        </form>
    </div>
@endsection
