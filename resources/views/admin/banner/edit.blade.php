@extends('layout-admin.default')
@section('title', 'Edit Banner')
@section('content')
	<!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        {{-- <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            	<div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0" data-i18n="Banner">Banner</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('banner.index') }}" data-i18n="Banner">Banner</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{ route('banner.create') }}" data-i18n="Edit Banner">Edit Banner</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
            	<section id="basic-horizontal-layouts">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" data-i18n="Edit Banner">Edit Banner</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('banner.edit-banner-post',$banner->id) }}" method="POST" enctype="multipart/form-data" class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="logo" data-i18n="Banner">Banner</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-file">
                                                            {{-- <input type="file" class="custom-file-input" id="banner" name="banner" onchange="changeImg(this)" required /> --}}
                                                            {{-- <label class="custom-file-label" for="customFile" data-i18n="File banner">File banner</label> --}}
                    										<img id="avatar" class="thumbnail" height="60px" src='/storage/{{ $banner->banner }}'>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-1">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="title" data-i18n="Link">Link</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="link" placeholder="https://....." class="form-control" name="link"  pattern="^(https|http):\/\/[\S]+$"  value="{{ $banner->link }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" name="submit" class="btn btn-primary mr-1" data-i18n="Submit">Update</button>
                                                <button type="reset" class="btn btn-outline-secondary" 
                                                onclick="window.history.go(-1); return false;" data-i18n="Cancel">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('script')
<script>
	function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#banner').click();
		    });
		});
</script>
@endsection