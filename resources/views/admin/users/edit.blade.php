@extends('layout-admin.default')
@section('title', 'Edit User')
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
                            <h2 class="content-header-title float-left mb-0" data-i18n="User">User</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" data-i18n="User">User</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#" data-i18n="Edit User">Edit User</a>
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
                                    <h4 class="card-title" data-i18n="Edit User">Edit User</h4>
                                </div>
                                @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                    <strong data-i18n="Whoops">Whoops!</strong><span data-i18n="There were some problems with your input.">There were some problems with your input.</span> <br><br>
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                  </div>
                                @endif
                                <div class="card-body">
                                    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="name-column" data-i18n="Name">Name</label>
                                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-column" data-i18n="Mail">Email</label>
                                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password-column" data-i18n="Password">Password</label>
                                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password-column" data-i18n="Confirm Password">Confirm Password</label>
                                                    {!! Form::password('confirm-password', array('placeholder' => 'Password','class' => 'form-control')) !!}

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="role-country" data-i18n="Roles">Roles</label>
                                                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                                                </div>
                                            </div>
                                            <div class="col-12">
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