@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">
                    <strong>{{($post->title)}}</strong>
                    <a href="{{ route('posts.index')}}"><strong>Torna ai Posts <i class="fa fa-undo"></i></strong></a>
                </div>
                <div class="card-body">
                    {{$post->post}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
