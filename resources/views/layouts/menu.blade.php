<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Home</a>
</li>
<li class="{{ Request::is('leaveClaims*') ? 'active' : '' }}">
    <a href="{!! route('leaveClaims.index') !!}">LeaveClaims</a>
<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.index') !!}">Employees</a>    
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{!! route('companies.index') !!}">Companies</a>
</li>

