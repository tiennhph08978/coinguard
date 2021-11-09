@extends('layout-admin.default')
@section('title', 'Add Image')
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
                            <h2 class="content-header-title float-left mb-0" data-i18n="Active Logo">Logo</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('images.index') }}" data-i18n="Logo">Logo</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{ route('images.create') }}" data-i18n="Add Logo">Add Logo</a>
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
                                    <h4 class="card-title" data-i18n="Add Logo">Add Logo</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="logo" data-i18n="Logo">Logo</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="file" id="image" onchange="changeImg(this)" class="form-control" name="image" required />
                                                        <img id="avatar" height="50px" width="50px" src="{{ asset('app-assets/images/logo/image.png') }}">
                                                        @if($errors->first('image'))
                                                            <p class="text-danger">{{ $errors->first('image') }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="title" data-i18n="Title">Title</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" id="title" class="form-control" name="title" placeholder="title" required/>
                                                    @if($errors->first('name'))
                                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" name="submit" class="btn btn-primary mr-1" data-i18n="Submit">Submit</button>
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
                $('#image').click();
            });
        });
</script>
@endsection