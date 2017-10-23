<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View create posts</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <h1>View create posts</h1>
            {!! Form::open(['url' => 'post/store']) !!}
                <p>Title:</p>
                <p>{!! Form::text('title', '') !!}</p>
                <p>Body:</p>
                <p>{!! Form::textarea('body', '') !!}</p>
                <p>{!! Form::submit('Save post') !!}</p>
            {!! Form::close() !!}
        </div>
    </div>
</body>
</html>
