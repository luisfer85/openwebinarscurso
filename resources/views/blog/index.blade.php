@extends('blog.layout')

@section('content')
    @if (count($posts) > 0)
        <h4>Listado de Posts:</h4>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ url('/post') }}/{{ $post->id }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    @else
        <h4>No hay Posts</h4>
    @endif
@endsection

@section('footer')
    <h5>Este es el pie</h5>
@endsection