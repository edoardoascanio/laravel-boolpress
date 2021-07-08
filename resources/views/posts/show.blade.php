@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('title') }}</strong>
                </div>
                <div class="card-body">
                    {{$posts->post}}
                </div>
            </div>

            <div class="link">
                <a href="{{ route('posts.index')}}"><strong>Torna ai Posts</strong></a>
            </div>
        </div>
    </div>
</div>
@endsection