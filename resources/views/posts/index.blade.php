@extends('layouts.public')

<script src="{{ asset('js/app.js') }}" defer></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>Posts pubblici</strong>
                    <a href="{{ route('posts.create')}}">Crea Post <i class="fa fa-plus-square-o"></i></a>
                </div>

                @foreach($posts as $post)
                    <div class="card-body">
                        
                       <i class="fa fa-caret-right"></i>{{$post->id}} - {{$post->title}}
                        

                        @include('layouts.deleteBtn', $post)

                        <a href="{{route ('posts.edit', $post)}}"> <i class="fa fa-pencil"></i></a>

                        <a href="{{route('posts.show', $post)}}"><i class="fa fa-chevron-down"></i>Mostra Post</a>

                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection