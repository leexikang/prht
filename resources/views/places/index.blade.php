@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-sm-offset-1">
                @foreach( $places as $place)
                    <div class="row">

                        <div class="col-sm-3">
                            <img src="{{ asset('images/'. $place->photo ) }}" class="img-responsive"/>
                        </div>

                        <div class="col-sm-8">
                            <dl class="dl-horizontal">
                                <dt>Name</dt>
                                <dd> {{ $place->name }} </dd>
                                <dt> Address</dt>
                                <dd> {{ $place->address }} </dd>
                                <dt> Description</dt>
                                <dd> {{  $place->description }} </dd>
                                <dt> City</dt>
                                <dd> {{ $place->city }} </dd>
                                <dt> State</dt>
                                <dd> {{ $place->state }}</dd>
                                <dt> Creator</dt>
                                <dd> {{ $place['user']['name'] }}</dd>
                                <dt></dt>
                                <dd> <a href="{{url("places/" . $place->id )}}"> <small> READ MORE>> </small> </a> </dd>
                            </dl>
                        </div>

                    </div>
                    <hr/>
                @endforeach
                {!! $places->render() !!}
            </div>


        </div>
    </div>

@stop