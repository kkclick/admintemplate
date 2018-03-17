@extends('layouts.app')

@section('content')
        <h1 class="pull-left">Leave Claims</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('leaveClaims.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('leave_claims.table')
        
@endsection
