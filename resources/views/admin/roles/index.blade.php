@extends('layout-admin.default')
@section('title', 'Role')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        {{-- <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="card card-statistics">
                                <div class="card-header d-flex">
                                    <h4 class="card-title" data-i18n="Roles">Roles</h4>
                                    <div class="float-right">
                                        <div class="form-modal-ex">
                                            <!-- Button trigger modal -->
                                            @can('role-create')
                                                <a href="{{ route('roles.create') }}" class="btn btn-success" data-i18n="Add Role">
                                                    Add Role
                                                </a>
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                                {{-- @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif --}}
                                <div class="table-responsive">
                                    <table class="table table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-i18n="Roles">Roles</th>
                                                {{-- <th>Status</th> --}}
                                                <th data-i18n="Actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $key => $role)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                        @can('role-edit')
                                                            {{-- <a class="btn btn-primary"
                                                                href="{{ route('roles.edit', $role->id) }}" data-i18n="Actions">Edit</a> --}}
                                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit" style="padding: 0.5rem;"><i data-feather='edit'></i></a>    
                                                        @endcan
                                                        @can('role-delete')
                                                            <a href="{{ route('role.delete-role', $role->id) }}" class="btn btn-danger ml-1 delete" data-toggle="tooltip" data-placement="top" title="Delete" style="padding: 0.5rem;"><i data-feather='trash-2'></i></a> 
                                                            {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!} --}}
                                                        @endcan
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {!! $roles->render() !!}
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
