@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{asset('home/'.$article->id.'/edit')}}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input name="name" class="form-control" id="name" value="{{$article->name}}" placeholder="name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="body" class="form-control" id="body" rows="3">{{$article->body}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input name="picture1" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <img width="200" height="250" src="{{asset('storage/'.$article->picture)}}">
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection

