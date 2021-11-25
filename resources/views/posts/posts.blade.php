@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)

                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <a href="/account/{{ $post->user->id }}">{{ $post->user->name }}</a>
                            {{ $post->user->profile_image->file }}
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $post->title }}
                            </p>
                            {{ $post->body }}
                        </div>
                        <div class="card-footer d-flex justify-content-around">
                            <a href="/posts/{{ $post->id }}">View Post</a>
                            <a href="/posts/{{ $post->id }}/edit">
                                <i class="fa fa-edit"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endSection