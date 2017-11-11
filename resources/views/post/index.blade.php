@extends('layouts/default') {{-- Page title --}} 

@section('title') Posts List 
@stop {{-- local styles --}} 
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/datatables/css/dataTables.bootstrap.css')}}" />@stop {{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Posts List</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Posts</li>
        <li class="active">
            Posts List
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

{{-- @section('content')
    <div class="row">
        <div class="col-md-12 page-action text-right">
            @can('add_posts')
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
            @endcan
        </div>
    </div>

    <div class="result-set">
        <table class="table table-bordered table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Created At</th>
                @can('edit_posts', 'delete_posts')
                    <th class="text-center">Actions</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->user['name'] }}</td>
                    <td>{{ $item->created_at->toFormattedDateString() }}</td>
                    @can('edit_posts', 'delete_posts')
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'posts',
                            'id' => $item->id
                        ])
                    </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

@endsection --}}

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                @can('add_users')
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                @endcan
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Created At</th>
                                @can('edit_posts', 'delete_posts')
                                    <th class="text-center">Actions</th>
                                @endcan
                            </tr>
                        </thead>
                           <tbody>
                           @foreach($result as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->user['name'] }}</td>
                                    <td>{{ $item->created_at->toFormattedDateString() }}</td>
                                    @can('edit_posts', 'delete_posts')
                                    <td class="text-center">
                                        @include('shared._actions', [
                                            'entity' => 'posts',
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