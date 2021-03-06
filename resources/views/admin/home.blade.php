@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Benvenuto Admin '. Auth::user()->name .' !') }}
                </div>
            </div>

            <div class="link-post">
                <div class="text-center">
                    <a href="{{ route('posts.index')}}">
                        <h4>Vai ai Posts</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
