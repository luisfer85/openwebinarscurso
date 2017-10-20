<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    </head>
    <body>
        <h1>Mi primera plantilla</h1>

        @if (count($posts) > 0)
            <h4>Listado de Posts:</h4>
            <ul>
                @foreach ($posts as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
            </ul>
        @else
            <h4>No hay Posts</h4>
        @endif




    </body>
</html>
