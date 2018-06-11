@if (Auth::user()->is_favor($micropost->id))
    {!! Form::open(['route' => ['user.unfavor', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavor', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favor', $micropost->id]]) !!}
        {!! Form::submit('Favor', ['class' => "btn btn-success btn-block"]) !!}
    {!! Form::close() !!}
@endif