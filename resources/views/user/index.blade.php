 @extends('layouts/layout_fixed') {{-- Page title --}} 

@section('title') Users List 
@stop {{-- local styles --}} 
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/datatables/css/dataTables.bootstrap.css')}}" />@stop {{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Users List</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('home')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Users</li>
        <li class="active">
            Users List
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                @can('add_users')
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                @endcan
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr class="filters">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                @can('edit_users', 'delete_users')
                                <th class="text-center">Actions</th>
                                @endcan
                            </tr>
                        </thead>
                           <tbody>
                            @foreach($result as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->roles->implode('name', ', ') }}</td>
                                    @can('edit_users')
                                        <td class="text-center">
                                            @include('shared._actions', [
                                                'entity' => 'users',
                                                'id' => $item->id
                                            ])
                                        </td>  
                                    @endcan
                                </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>
</div> 
@stop 
@section('footer_scripts')
<script type="text/javascript" src="{{asset('vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom_js/users_custom.js')}}"></script> @stop