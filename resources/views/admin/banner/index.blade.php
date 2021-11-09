@extends('layout-admin.default')
@section('title', 'Banner')
@section('content')
		<!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        {{-- <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
            	<section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="card card-statistics">
                                <div class="card-header d-flex">
                                    <h4 class="card-title" data-i18n="Title">Title</h4>
                                    <div class="float-right">
                                    	<div class="form-modal-ex">
                                            <!-- Button trigger modal -->
                                            <a href="{{ route('banner.create') }}" class="btn btn-success" data-i18n="Add Banner">
                                                Add Banner
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th data-i18n="Banner">Banner</th>
                                            <th data-i18n="Link">Link</th>
                                            <th data-i18n="Status">Status</th>
                                            <th data-i18n="Actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($banner_alls as $key => $banner)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <img src="/storage/{{ $banner->banner }}" class="mr-75" height="50" alt="Angular" />
                                            </td>
                                            <td>{{ $banner->link }}</td>
                                            <td>
                                            	@if($banner->banner == $url_banner->banner)
                                            	<span class="badge badge-pill badge-light-primary mr-1" data-i18n="Active">Active</span>
                                            	@else
                                            	<span class="badge badge-pill badge-light-danger mr-1" data-i18n="Unset">Unset</span>
                                            	@endif								
                                            </td>
											@can('role-list')
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('banner.active-banner',$banner->id) }}" class="btn btn-primary active" data-toggle="tooltip" data-placement="top" title="Active" style="padding: 0.5rem;">
                                                        <i data-feather='lock'></i>
                                                    </a>
                                                    <a href="{{ route('banner.edit-banner',$banner->id) }}" class="btn btn-secondary ml-1" data-toggle="tooltip" data-placement="top" title="Edit" style="padding: 0.5rem;">
                                                        <i data-feather='edit'></i>
                                                    </a>
                                                    <a href="{{ route('banner.delete',$banner->id) }}" class="btn btn-danger delete ml-1" data-toggle="tooltip" data-placement="top" title="Delete" style="padding: 0.5rem;">
                                                        <i data-feather='trash-2'></i>
                                                    </a>
                                                </div>    
                                                {{-- <a class="btn btn-primary mb-1"
                                                        href="{{ route('banner.active-banner',$banner->id) }}" >Active</a>
                                                    <a class="btn btn-danger mb-1"
                                                        href="{{ route('banner.delete',$banner->id) }}" >Delete</a>  --}}
                                                {{-- <div class="dropdown">
                                                    <button type="button" class="btn btn-sm text-white dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('banner.active-banner',$banner->id) }}">
                                                            <i data-feather="unlock" class="mr-50"></i>
                                                            <span data-i18n="Active">Active</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('banner.delete',$banner->id) }}">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            <span data-i18n="Delete">Delete</span>
                                                        </a>
                                                    </div>
                                                </div> --}}
                                            </td>
											@endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
{{-- @section('script')
<script>
    
    
</script>
@endsection --}}