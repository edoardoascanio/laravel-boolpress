@extends('layouts.public')

<script src="{{ asset('js/app.js') }}" defer></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>Posts pubblici</strong>
                    <a href="{{ route('posts.create')}}">Crea Post</a>
                </div>

                @foreach($posts as $post)
                    <div class="card-body">
                        {{$post->id}} {{$post->title}}

                        <a href="{{route ('posts.edit', $post)}}">Modifica</a>
                        <a href="{{route('posts.show', $post)}}">Mostra Post</a> 

                        @include('layouts.deleteBtn', $posts)
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection