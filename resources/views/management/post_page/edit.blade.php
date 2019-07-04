@extends('management.layout.app')
@section('page_title', 'Chỉnh Sửa Bài Viết')
@section('body_class', 'edit_post')
@section('page_description', 'edit_content')
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
                        <input type="text" class="form-control col-12">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Description</label>
                        <textarea type="text" class="form-control col-12"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Content</label>
                        <textarea type="text" class="form-control col-12"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Category</label>
                        <input type="text" class="form-control col-12">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Num Collection</label>
                        <input type="text" class="form-control col-12">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-3">Image</label>
                        <input type="text" class="form-control col-12">
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