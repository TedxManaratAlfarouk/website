@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('auth.register')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" name="key" class="form-control">
                @error('key')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
            <input type="submit" name="submit" value="Find Key" class="btn btn-primary">
        </form>

    </div>
@endsection
