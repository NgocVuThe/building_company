@extends('management.layout.app')
@section('page_title', 'Bài Viết')
@section('body_class', 'list_post')

@section('main_page')
    <div class="container page_list">
        <div class="row post_list">
            <div class="col-md-6">
                <h2 class="post_header"><i class="fa fa-list"></i> POST LIST</h2>
            </div>
            <div class="col-md-6 btn-create-new-post">
                <button type="submit" class="btn btn-success btn-create"><i class="fa fa-plus"></i> CREATE NEW POST</button>
            </div>
        </div>

        <div class="row table-data">
            <table class="table table-bordered" style="table-layout: auto; width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Post Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Post User</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($posts as $post)
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category}}</td>
                            <td>{{$post->user_id}}</td>
                            <td>{{$post->content}}</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> </button>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                            </td>
                        @endforeach
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
@endsection