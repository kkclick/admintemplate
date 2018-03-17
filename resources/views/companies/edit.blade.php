@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Company</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'patch']) !!}

            @include('companies.fields')

            {!! Form::close() !!}
        </div>
@endsection
