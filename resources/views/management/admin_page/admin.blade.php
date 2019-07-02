@extends('management.layout.app')
@section('page_title', 'Trang Quản Trị')
@section('body_class', 'admin_page')

@section('main_page')
    <div class="row admin_layout"> {{-- admin_layout --}}
        <div class="col-md-8 content_information">  {{-- content_information --}}    
            <div class="row first_infor">  {{-- first_infor --}}
                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                    </div>
                </div>
            </div>  {{-- end first_infor --}}
            <div class="row second_infor">
                <div class="col-md-6 ">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-star-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-bookmark-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-star-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end content_information --}}
        <div class="col-md-4 calendar">
            @include('management.partials.calendar')
        </div>
    </div>  {{-- end admin_layout --}}
@endsection