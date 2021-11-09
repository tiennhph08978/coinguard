@extends('layout-admin.default')
@section('title', 'Coin')
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
                                    <h4 class="card-title" data-i18n="Coin">Coin</h4>
                                </div>
                                <div class="table-responsive">
	                                <table class="table table-striped table-dark">
	                                    <thead>
	                                        <tr>
	                                            <th>#</th>
	                                            <th></th>
                                                <th data-i18n="Name">Name</th>
                                                <th data-i18n="Chain">Chain</th>
                                                <th data-i18n="Symbol">Symbol</th>
                                                <th data-i18n="Market Cap">Market Cap</th>
                                                <th data-i18n="Price">Price</th>
	                                            <th data-i18n="Status">Status</th>
	                                            <th data-i18n="Actions">Actions</th>
	                                        </tr>
	                                    </thead>
                                        <tbody>
                                            @foreach ($coins as $key => $coin)
                                            <tr>
                                                <td class="has-wishlist ignore">
                                                    <span>
                                                        {{ $key + 1 }}
                                                    </span>
                                                </td>
                                                <td class="ignore">
                                                    <div class="flex">
                                                        <img src="/storage/{{ $coin->image }}" alt="" height="24">
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="font-weight-bold">{{ $coin->name }}</span>
                                                </td>
                                                <td class="is-hidden-mobile">
                                                    <span class="badge badge-pill badge-light-primary mr-1">{{ $coin->network }}</span>
                                                </td>
                                                <td>{{ $coin->symbol }}</td>
                                                <td>{{ $coin->presale }}</td>
                                                <td></td>
                                                <td>
                                                    @if($coin->status == 1)
                                                    <span class="badge badge-pill badge-light-primary mr-1" data-i18n="Active">Active</span>
                                                    @else
                                                    <span class="badge badge-pill badge-light-danger mr-1" data-i18n="Unactive">Unactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                    @if($coin->status == 0)
                                                    <a href="{{ route('admin.active-coin',$coin->id) }}" class="btn btn-primary active" style="padding: 0.5rem;" data-toggle="tooltip" data-placement="top" title="UnActive">
                                                        <i data-feather='unlock'></i>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('admin.unactive-coin',$coin->id) }}" class="btn btn-primary unactive" data-toggle="tooltip" data-placement="top" title="Active" style="padding: 0.5rem;">
                                                        <i data-feather='lock'></i>
                                                    </a>
                                                    @endif
                                                    <a href="{{ route('admin.delete-coin',$coin->id) }}" class="btn btn-danger delete ml-1" data-toggle="tooltip" data-placement="top" title="Delete" style="padding: 0.5rem;">
                                                        <i data-feather='trash-2'></i>
                                                    </a>
                                                    </div>
                                                </td>
                                                   {{--  @if($coin->status == 0)
                                                    <a class="btn btn-success mb-1"
                                                        href="{{ route('admin.active-coin',$coin->id) }}" >Active</a>

                                                    @else
                                                        <a class="btn btn-warning mb-1" href="{{ route('admin.unactive-coin',$coin->id) }}" data-i18n="Edit">Unactive</a>
                                                    @endif
                                                        <a class="btn btn-danger" href="{{ route('admin.delete-coin',$coin->id) }}">Delete</a>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                        </tbody>
	                                </table>
                                    <div class="d-flex justify-content-center">
                                        {!! $coins->appends(['sort' => 'science-stream'])->links() !!}
                                    </div>
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