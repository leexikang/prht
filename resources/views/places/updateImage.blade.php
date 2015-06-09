<div class="row">

    <div class="col-sm-3 col-sm-offset-1">
        <img src="{!! asset('images/' . $place->photo) !!}" class="img-responsive"/><br/>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Update Image
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Upload images</h4>
                </div>
                <div class="modal-body">

                    {!! Form::open(['id' => 'updateImage',
                     'action' => ["PlacesController@updateImage", $place->id],
                     'method' => 'PATCH',
                     'files' => 'true']) !!}

                        <div class="form-group">

                        {!! Form::file('photo', null, ['class' => 'form-control']) !!}
                            {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
                            </div>
                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" id ="close-button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>