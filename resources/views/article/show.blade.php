@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                {{ $article->tittle }}
                <a class="btn btn-secondary btn-float-right" href="{{ URL::to('article/' . $article->id . '/edit') }}">Update</a>
                <form method="POST" action="/article/{{$article->id}}" class="btn-float-right btn-margin">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger delete-user" value="Delete">
                    </div>
                </form>
                </div>
                <div class="card-body">
                {{ $article->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
