 @extends('layouts/layout_fixed') {{-- Page title --}} 

@section('title') Create User
@stop {{-- local styles --}} 
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/datatables/css/dataTables.bootstrap.css')}}" />@stop {{-- Page Header--}} 
@section('page-header')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Create User</h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Users</li>
        <li class="active">
            Create User
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content')

    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['route' => ['users.store'] ]) !!}
                @include('user._form')
                <!-- Submit Form Button -->
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection