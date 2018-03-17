@extends('layouts.app')

@section('content')
    @include('leave_claims.show_fields')

    <div class="form-group">
           <a href="{!! route('leaveClaims.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
