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
                <div class="card-body">
                    {{ __('id') }} {{ __('title') }}

                    <a href="{{route('posts.show', $posts)}}">Mostra Post</a>
                    <a href="{{route ('posts.edit', $posts)}}">Modifica</a>

                    @include('layouts.deleteBtn',$posts)
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
