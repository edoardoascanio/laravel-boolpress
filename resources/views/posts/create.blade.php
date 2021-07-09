@extends('layouts.public')

@section('content')

<div class="container create-container">
    <div class="row justify-content-center">
        <form action="{{ route('posts.store')}} " method="post">
         @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Inserisci titolo">

            <a href="{{ route('posts.index')}}"><strong>Torna ai Posts <i class="fa fa-undo"></i></strong></a>

            <div class="label">
                <label for="description">Scrivi Post</label>
            </div>

            <div class="post">    
                <textarea name="description" id="description" cols="60" rows="10" placeholder="Inserisci testo"></textarea>
            </div>

            <input class="btn btn-primary "type="submit" value="Invia">
        </form>
    </div>
</div>

@endsection