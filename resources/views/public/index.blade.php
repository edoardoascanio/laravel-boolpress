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

                <div class="card-body">

                    <i class="fa fa-caret-right"></i>{{('id')}} - {{('title')}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
