<div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @if( $places->count())
                @foreach( $places as $place)
                    <div class="row">

                        <div class="col-sm-3">
                            <img src="{{ asset('images/'. $place->photo ) }}" class="img-responsive center-block"/>
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
                                @if (Auth::user()->name != $place->user->name)
                                <dt> Creator</dt>
                                <dd> {{ $place->user->name }}</dd>
                                <dt></dt>
                                <dd>
                                    <a href="{{url("places/" . $place->id )}}"> <small> DETAILS >> </small> </a>
                                    <br/>
                                </dd>

                                @else
                                <dt></dt>
                                <dd>
                                    <br/>
                                    <a href="{{url("places/" . $place->id )}}" class="btn btn-primary"> <small> Details  </small> </a>
                                    <a href="{{url("places/" . $place->id . "/edit")}}" class="btn btn-primary"> <small>  EDIT  </small> </a>
                                    <a href="#"
                                       data-link="{{url('places/' . $place->id)}}"
                                       data-confirm ="Are you sure want to delete {!! $place->name !!} ?"
                                       data-toggle="modal"
                                       class="btn btn-danger delete-button"
                                       data-target="#myModal">
                                        <small>  DELETE  </small>
                                    </a>

                                    <br/>
                                </dd>
                                    @endif


                            </dl>



                        </div>

                    </div>
                    <hr/>
                @endforeach

                {!! $places->appends(Request::input())->render() !!}

                     <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    {!! Form::open([
                                    'method' => 'Delete',
                                    'id' => 'confirm-delete'
                                    ]) !!}
                                    <h4 id="confirm-text"></h4>
                                    <div class="form-group">
                                        {!! Form::submit("Yes, I'm Sure.", ['class' => 'btn  btn-danger form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary form-control"  data-dismiss="modal"> No, Cancel this.  </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @else

                     No Places found

                    @endif
            </div>
        </div>
</div>