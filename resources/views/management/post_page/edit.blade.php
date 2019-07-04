@extends('management.layout.app')
@section('page_title', 'Chỉnh Sửa Bài Viết')
@section('body_class', 'edit_post')
@section('page_description', 'edit_post')
@section('main_page')
    <div class="row page_title">
        <div class="col-md-9">
            <div class="row post_title">
                <h2><i class="fa fa-edit"></i> POST EDIT</h2>
            </div>
            <div class="row">
                <div class="container">
                    <div class="form-group">
                        <label for="" class="col-3"><span>Title</span></label>
                    <input type="text" class="form-control col-12" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Description</label>
                        <textarea type="text" rows="4" class="form-control col-12">{{$post->description}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Content</label>
                        <textarea type="text" rows="8" class="form-control col-12">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Category</label>
                        <input type="text" class="form-control col-12" value="{{ $post->category }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Num Collection</label>
                        <input type="text" class="form-control col-12" value="{{ $post->num_collection }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Image</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="container right_column">
                    <div class="row">
                        <p>Tùy Biến</p>
                    </div>
            </div>
        </div>
    </div>
@endsection