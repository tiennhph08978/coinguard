@extends('layout-admin.default')
@section('title', 'Edit Role')
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
                            <h2 class="content-header-title float-left mb-0" data-i18n="Permission">Permission</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" data-i18n="Permission">Permission</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#" data-i18n="Edit Permission">Edit Permission</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong data-i18n="Whoops">Whoops!</strong><span  data-i18n="There were some problems with your input.">There were some problems with your input.</span> <br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <div class="content-body">
            	<section id="basic-horizontal-layouts">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" data-i18n="Edit Permission">Edit Permission</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}   
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="title" data-i18n="Name">Name</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-3 col-form-label">
                                                        <label for="title" data-i18n="Roles">Roles</label>
                                                    </div>
                                                    <div class="col-sm-9">
            											@foreach($permission as $value)
                                                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                            {{ $value->name }}</label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 offset-sm-3">
                                                <button type="submit" class="btn btn-primary mr-1" data-i18n="Submit">Submit</button>
                                                <button type="button" onclick="window.history.go(-1); return false;"
                                                 class="btn btn-outline-secondary" data-i18n="Cancel">Cancel</button>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
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