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

                @if( ! isset($place) )
                <div class="form-group">
                    {!! Form::label('photo', 'Upload photo:') !!}
                    {!! Form::file('photo', null, ['class' => 'form-control'] ) !!}
                </div>
                @endif
                <div class="form-group">
                    {!! Form::label('state', 'State:') !!}
                    {!! Form::select('state', [
                    'Yangon' => 'Yangon',
                    'Mandalay' => 'Mandalay',
                    'Sagaing' => 'Sagaing'
                    ], null, ['class' => 'form-control'] ) !!}

                </div>

                <div class="form-group">
                    {!! Form::label('city', 'City:') !!}
                    {!! Form::select('city', [
                    'Yangon' => 'Yangon',
                    'Mandalay' => 'Mandalay',
                    'Sagaing' => 'Sagaing'
                    ], null, ['class' => 'form-control'] ) !!}

                </div>

                <div class="form-group">
                    {!! Form::submit('create', ['class' => 'btn btn-primary']) !!}
                </div>

