@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">

                <div class="card-header">
                    <strong>{{($post->title)}}</strong>

                    <a href="{{ route('posts.index')}}"><strong>Torna ai Posts <i class="fa fa-undo"></i></strong></a>

                    @include('layouts.deleteBtn', $post)

                    <a href="{{route ('posts.edit', $post)}}"> <i class="fa fa-pencil"></i></a>
                </div>

                <div class="card-body">
                    {{$post->post}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
