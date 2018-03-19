{!! Form::open(['route' => ['companies.destroy', $id], 'method' => 'delete']) !!}
<!--    <a href="{{ route('companies.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('companies.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="{{ route('companies.show', $id) }}">Show</a>
        <a class="dropdown-item" href="{{ route('companies.edit', $id) }}">Edit</a>
      </div>
    </div>
    -->

    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('companies.show', $id) }}">Show</a></li>
    <li><a href="{{ route('companies.edit', $id) }}">Edit</a></li>
    <li>        {!! Form::button('Delete', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    </li>
  </ul>
</div>




</div>
{!! Form::close() !!}
