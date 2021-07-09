@extends('layouts.public')

@section('content')

<div class="container edit-container">
    <div class="row justify-content-center">
        <form action="" method="post">
         @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $post->title}}">

            <a href="{{ route('posts.index')}}"><strong>Torna ai Posts <i class="fa fa-undo"></i></strong></a>

            <div class="label">
              <label for="description">Modifica Post</label>
            </div>
            <div class="post">    
                <textarea name="description" id="description" cols="60" rows="10" value="{{$post->post}}"></textarea>
            </div>

            <input class="btn btn-primary "type="submit" value="Invia">
        </form>
    </div>
</div>

@endsection
