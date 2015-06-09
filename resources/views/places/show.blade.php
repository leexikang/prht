@extends('app')

@section('content')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.png">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1> {!! $place->name !!} </h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="fotorama"
                             data-width="100%"
                             data-ratio = "3/2"
                             data-allowfullscreen="true">

                            <img src="{!! asset('images/' . $place->photo) !!}"/>
                            @foreach($images as $image)
                            <img src="{!! asset('images/' . $image->image) !!}"/>
                            @endforeach

                        </div>
                    </div>

                    {{--<img src="{!! asset('images/' . $place->photo ) !!}" class="img-responsive img-rounded" width="600px"/>--}}
                    <div class="col-sm-6">
                        <br/>
                        <h1> Place's Info </h1>
                        <br/>
                        <dl class="dl-horizontal">
                            <dt>Name: </dt>
                            <dd> {{ $place->name }} </dd><br/>
                            <dt> Address:</dt>
                            <dd> {{ $place->address }} </dd><br/>
                            <dt> City:</dt>
                            <dd> {{ $place->city }} </dd><br/>
                            <dt> State:</dt>
                            <dd> {{ $place->state }}</dd><br/>
                        </dl>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h3> Description </h3>
                       <p> {!! $place->description !!}</p>

                        <h3> Creator Inormation</h3>
                        <dl>
                            <dt>Name: </dt>
                            <dd> {!! $place['user']['name'] !!}</dd>
                            <dt>Email: </dt>
                            <dd> {!! $place['user']['email'] !!}</dd>
                        </dl>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.min.js"></script>
@endsection