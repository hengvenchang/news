@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                Trending
                <a class="btn btn-secondary btn-float-right"  href="{{ route('article.create') }}">Add News</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($articles as $article)
                        <div class="row article-card">
                            <div class="col-md-8">
                                <h3>{{ $article->tittle }}</h3>
                                <span>{{ $article->published_at}}</span>
                                <div class = "text-ellipsis">
                                    {{ $article->content }}
                                </div>
                            </div>
                            <div class="col-md-4" style="position:relative;">
                                <a href="{{ URL::to('article/' . $article->id) }}" class="btn btn-primary btn-float-right btn-align-middle">View</a>
                            </div>
                        </div>
                    @endforeach

                    @if (count($articles) == 0)
                        <div class="alert alert-success">
                           sorry there's no news please create new one
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
