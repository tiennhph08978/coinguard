@extends('layout-admin.default')
@section('title', 'Image')
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
                                            <a href="{{ route('images.create') }}" data-i18n="Add Image" class="btn btn-success">
                                                Add Image
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
	                                <table class="table table-striped table-dark">
	                                    <thead>
	                                        <tr>
	                                            <th>#</th>
	                                            <th data-i18n="Image">Image</th>
	                                            <th data-i18n="Name">Name</th>
	                                            <th data-i18n="Status">Status</th>
												@can('role-list')
												<th data-i18n="Actions">Actions</th>
												@endcan
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                    	@foreach($logos as $key => $logo)
	                                        <tr>
	                                            <td>{{ $key+1 }}</td>
	                                            <td><img src="/storage/{{ $logo->image }}" class="mr-75" height="50" alt="Angular" /></td>
	                                            <td>{{ $logo->name }}</td>
	                                            <td>
	                                            	@if($logo->image == $url_logo->image)
	                                            	<span class="badge badge-pill badge-light-success mr-1" data-i18n="Logo">Logo</span>
													@elseif ($logo->image == $url_favicon->image)
													<span class="badge badge-pill badge-light-primary mr-1" data-i18n="Favicon">Favicon</span>
													{{-- @elseif ($logo->image == $url_favicon->image && $logo->image == $url_logo->image)
													<span class="badge badge-pill badge-light-primary mr-1" data-i18n="Favicon">Favicon</span>
													<span class="badge badge-pill badge-light-success ml-1" data-i18n="Logo">Logo</span> --}}
	                                            	@else
	                                            	<span class="badge badge-pill badge-light-danger mr-1" data-i18n="Unset">Unset</span>
	                                            	@endif								
	                                            </td>
												@can('role-list')
													
	                                            <td>
	                                            	<div class="d-flex">
	                                            	<a class="btn btn-success mb-1 activeL"
                                                        href="{{ route('images.active-logo',$logo->id) }}" data-toggle="tooltip" data-placement="top" title="Active Logo" style="padding: 0.5rem;">L</a>
                                                    <a class="btn btn-primary mb-1 ml-1 activeF"
                                                        href="{{ route('images.active-favicon',$logo->id) }}" data-toggle="tooltip" data-placement="top" title="Active Favicon" style="padding: 0.5rem;"> F</a>
                                                    <a class="btn btn-danger mb-1 ml-1 delete"
                                                        href="{{ route('images.delete-image',$logo->id) }}" data-toggle="tooltip" data-placement="top" title="Delete" style="padding: 0.5rem;"><i data-feather='trash-2'></i></a>    
                                                    </div>        
	                                               {{--  <div class="dropdown">
	                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
	                                                        <i data-feather="more-vertical"></i>
	                                                    </button>
	                                                    <div class="dropdown-menu">
	                                                            <a class="dropdown-item" href="{{ route('images.active-logo',$logo->id) }}">
	                                                            <i data-feather="lock" class="mr-50"></i>
				                                            	<span class="badge badge-pill badge-light-primary mr-1" data-i18n="Active Logo">Active Logo</span>
				                                            	</a>
			                                            		<a class="dropdown-item" href="{{ route('images.active-favicon',$logo->id) }}">
				                                            	<i data-feather="lock" class="mr-50"></i>
				                                            	<span class="badge badge-pill badge-light-primary mr-1" data-i18n="Active Favicon">Active Favicon</span>
				                                            	</a>
	                                                        
	                                                        <a class="dropdown-item">
																{!! Form::open(['method' => 'DELETE', 'route' => ['images.destroy', $logo->id], 'style' => 'display:inline']) !!}
																<i data-feather="trash" class="mr-50"></i>
                                                            	{!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
                                                            	{!! Form::close() !!}
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
@section('script')
<script>
	$(".activeL").on('click', function(e){
        e.preventDefault();
        const url = $(this).attr('href')
        Swal.fire({
          title: 'Are you active logo?',
          // text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                // var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false; 
    })
    $(".activeF").on('click', function(e){
        e.preventDefault();
        const url = $(this).attr('href')
        Swal.fire({
          title: 'Are you active favicon?',
          // text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                // var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false; 
    })
</script>
@endsection