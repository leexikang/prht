@extends('app')

@section('content')


    <div class="container-fluid">

        @include('places.updateImage');
        <div class="row">
            <div class="col-sm-6 col-sm-offset-1">

                {!! Form::model($place,
                ['method' => 'PATCH',
                 'route' => ['places.update', $place->id]
                ]) !!}

                @include('places.formElements')

                {!! Form::close() !!}

                @include('errors.placeCreationError')


            </div>
        </div>
    </div>
    <br/><br/>

@endsection