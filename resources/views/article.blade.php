@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container">
    <form method="POST" action="{{asset('home')}}">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
