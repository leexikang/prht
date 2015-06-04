@extends('app')

@section('content')

    <div class="container-fluid center-block">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                {!! Form::open(['route' => 'uploadimages_path',
                'method' => 'POST',
                'files' => 'true'])
                !!}

                    <div class="form-group">
                        <label for="photos"> Please upload photo( <small> ** At least 1 photo and not more than 8 photos *:* </small> ) </label>
                        <input type="file" name="photos[]" id="photos" multiple/>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="Upload">
                    </div>

                    <div id="thumbnail-list">
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection

