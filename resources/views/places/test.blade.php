
@extends('app')

@section('content')
  {!! Form::open(['id' => 'updateImage',
                     'url' => '/updateImage',
                     'method' => 'PATCH']) !!}

                        <div class="form-group">
                        {!! Form::file('photo', null, ['class' => 'form-control']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}

@endsection