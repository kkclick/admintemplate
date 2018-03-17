@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Leave Claim</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($leaveClaim, ['route' => ['leaveClaims.update', $leaveClaim->id], 'method' => 'patch']) !!}

            @include('leave_claims.fields')

            {!! Form::close() !!}
        </div>
@endsection
