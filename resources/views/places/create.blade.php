@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-1">
            {!! Form::open(['method' => 'POST',
                'files'=> 'true',
                'action' => 'PlacesController@store'
                ]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control'] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('state', 'State:') !!}
                {!!   Form::select('state', [
                'Yangon' => 'Yangon',
                'Mandalay' => 'Mandalay',
                'Sagaing' => 'Sagaing'
                ], null, ['class' => 'form-control'] ) !!}

            </div>

            <div class="form-group">
                {!! Form::label('city', 'City:') !!}
                {!!   Form::select('city', [
                'Yangon' => 'Yangon',
                'Mandalay' => 'Mandalay',
                'Sagaing' => 'Sagaing'
                ], null, ['class' => 'form-control'] ) !!}

            </div>

            <div class="form-group">
                {!! Form::submit('create', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

                @include('errors.placeCreationError')


                </div>
        </div>
    </div>
    <br/><br/>

@endsection
