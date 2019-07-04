@extends('management.layout.app')
@section('page_title', 'Thêm Mới Bài Viết')
@section('body_class', 'edit_post')
@section('page_description', 'create_new_post')
@section('main_page')
    <div class="row page_title">
        <div class="col-md-9">
            <div class="row post_title">
                <h2><i class="fa fa-edit"></i> POST EDIT</h2>
            </div>
            <div class="row">
                <div class="container">
                    <form action="" method="post" enctype="multipart/form-data" id="main_form">
                        <div class="form-group">
                            <label for="" class="col-3"><span>Title</span></label>
                        <input type="text" class="form-control col-12">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-3">Description</label>
                            <textarea type="text" rows="4" class="form-control col-12"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-3">Content</label>
                            <textarea type="text" rows="8" class="form-control col-12"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-3">Category</label>
                            <select name="category" class="form-control col-12">
                                <option value="1" >Cate 1</option>
                                <option value="0" >Cate 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-3">Num Collection</label>
                            <input type="text" class="form-control col-12" value="">
                        </div>
                        {{-- img_1 --}}
                        <div class="form-group">
                            <label for="" class="col-12">Image</label>
                            <input type="file" name="image-1" id="image-1"> 
                            <img id="preview-image-1" width="50%">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-12">Description of Image</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- img_2 --}}
                        <div class="form-group">
                            <label for="" class="col-12">Image</label>
                            <input type="file" name="image-2" id="image-2">
                            <img id="preview-image-2" width="50%">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-12">Description of Image</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- img_3 --}}
                        <div class="form-group">
                            <label for="" class="col-12">Image</label>
                            <input type="file" name="image-3" id="image-3">
                            <img id="preview-image-3" width="50%">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-12">Description of Image</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- img_4 --}}
                        <div class="form-group">
                            <label for="" class="col-12">Image</label>
                            <input type="file" name="image-4" id="image-4">
                            <img id="preview-image-4" width="50%">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-12">Description of Image</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- img_5 --}}
                        <div class="form-group">
                            <label for="" class="col-12">Image</label>
                            <input type="file" name="image-5" id="image-5">
                            <img id="preview-image-5" width="50%">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-12">Description of Image</label>
                            <input type="text" class="form-control">
                        </div>
                        {{-- MultiImage --}}
                        <div class="form-group">
                            <label for="" class="col-12">Multi Image</label>
                            <input type="file" id="image-6" name="multi_image" multiple="multiple" onchange="readURL_MultiImage(this)">
                            <div id="gallery"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            @include('management.partials.menu_right')
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/manager.js')}}"></script> 
@endsection