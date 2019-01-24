@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Add News
               
                </div>
                <div class="card-body">
                <form method="post" action="{{ route('article.update',$article->id ) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="inputTittle">Tittle</label>
                        <input type="text" class="form-control" placeholder="Enter article tittle" name="tittle" value="{{$article->tittle}}" maxlength="191" required >
                    </div>
                    <div class="my-1">
                        <label class="mr-sm-2" for="categorySelect">Category</label>
                        <select class="custom-select mr-sm-2" id="categorySelect" name="category" required >
                            <option value="1"  {{ $article->categories_id == 1 ? 'selected' : '' }}>Technology</option>
                            <option value="2"  {{ $article->categories_id == 2 ? 'selected' : '' }}>Sport</option>
                            <option value="3"  {{ $article->categories_id == 3 ? 'selected' : '' }}>Life Style</option>
                            <option value="4"  {{ $article->categories_id == 4 ? 'selected' : '' }}>Entertainer</option>
                        </select>
                        </div>
                    <div class="form-group">
                        <label for="contetTextArea">Content</label>
                        <textarea class="form-control" id="contetTextArea" name="content" rows="3" maxlength="191" required>{{$article->content}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
