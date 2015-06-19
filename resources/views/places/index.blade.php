@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                {!! Form::open([
                'method' => 'Get',
                'class' => 'form-inline'
                ]) !!}

                <div class="form-group">
                    {!! Form::label('state', 'State:') !!}
                    {!! Form::select('state', [
                    'Yangon' => 'Yangon',
                    'Mandalay' => 'Mandalay',
                    'Sagaing' => 'Sagaing'
                    ], Request::get('state'), ['class' => 'form-control'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('city', 'City:') !!}
                    {!! Form::select('city', [
                    'All' => 'All',
                    'Yangon' => 'Yangon',
                    'Mandalay' => 'Mandalay',
                    'Sagaing' => 'Sagaing'
                    ], Request::get('city'), ['class' => 'form-control', 'disabled'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit( 'Search', ['class' => 'btn btn-primary', 'disabled', 'id' => 'search'] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br/><br/>


    @include('places.showPlaces')
@stop