{!! Form::open(['route' => ['companies.destroy', $id], 'method' => 'delete']) !!}


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
