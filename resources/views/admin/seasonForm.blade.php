{!! Form::label('name', 'Jmeno') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
{!! Form::label('published', 'Published?') !!}
{!! Form::checkbox('published') !!}
{!! Form::submit('Save') !!}
