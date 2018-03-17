@extends('layouts.app')

@section('content')
    @include('companies.show_fields')

    <div class="form-group">
           <a href="{!! route('companies.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
