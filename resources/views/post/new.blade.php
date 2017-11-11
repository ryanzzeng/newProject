@extends('layouts/default') {{-- Page title --}} 

@section('title') Posts Create 
@stop {{-- local styles --}} 
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/datatables/css/dataTables.bootstrap.css')}}" />@stop {{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Posts</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Posts</li>
        <li class="active">
            Posts Create
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content')

    <div class="row">
        <div class="col-md-5">
            <h3>Create</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('posts.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['route' => ['posts.store'] ]) !!}
                @include('post._form')
                <!-- Submit Form Button -->
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection