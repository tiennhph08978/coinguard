@extends('layout-admin.default')
@section('title', 'Setting')
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
                        <h2 class="content-header-title float-left mb-0" data-i18n="Setting">Setting</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" data-i18n="Setting">Setting</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" data-i18n="Edit Site">Edit Site</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.setting-update')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-12">
                                            <div class="form-group">
                                                <label for="name-column" data-i18n="Site Name">Site Name</label>
                                                <input placeholder="Name" class="form-control" name="site_name" type="text" value="{{ $site_name->site_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-12">
                                            <div class="form-group">
                                                <label data-i18n="Description">Description</label>
                                                <textarea  class="form-control" style="color: black" name="site_description">{{ $site_description->site_description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-12">
                                            <div class="form-group">
                                                <label data-i18n="Telegram Link">Telegram Link</label>
                                                <textarea  class="form-control" style="color: black" name="telegram_link">{{ $telegram_link->telegram_link}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-12">
                                            <div class="form-group">
                                                <label data-i18n="Twitter Link">Twitter Link</label>
                                                <textarea  class="form-control" style="color: black" name="twitter_link">{{ $twitter_link->twitter_link}}</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light" data-i18n="Submit">Submit</button>
                                            <button type="button" onclick="window.history.go(-1); return false;" class="btn btn-outline-secondary waves-effect" data-i18n="Cancel">Cancel</button>
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