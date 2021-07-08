@extends('layouts.public')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('posts.store')}} " method="post">

            <label for="title">Title</label>
            <input type="text" name="title" id="title">

            <label for="description">Description</label>
            <input type="text" name="description" id="description">

            <input type="submit" value="Invia">
        </form>
    </div>

    <div class="text-center">
            <a href="{{ route('posts.index')}}"><strong>Torna ai Posts</strong></a>
    </div>
</div>

@endsection
