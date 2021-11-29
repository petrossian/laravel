@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($posts as $post)

                <div class="col-md-8 mt-3" id="{{ $post->id }}">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            @if($post->user->profile_image->file != 'NULL')
                            <div style="
                                display:block;
                                width: 40px;
                                height: 40px;
                                border: 3px solid silver;
                                border-radius: 50%;
                                margin-right: 10px;
                                background-image: url('/uploads/{{ $post->user->profile_image->file }}');
                                background-position: center;
                                background-size:cover;
                                background-repeat: no-repeat;
                            ">
                            </div>
                            @else
                            <div style="
                                display:block;
                                width: 40px;
                                height: 40px;
                                border: 3px solid silver;
                                border-radius: 50%;
                                margin-right: 10px;
                                background-image: url('/images/default.png');
                                background-position: center;
                                background-size:cover;
                                background-repeat: no-repeat;
                            ">
                            </div>
                            @endIf
                            <a href="/account/{{ $post->user->id }}" class="mr-3">{{ $post->user->name }}</a>
                            @if(count($post->user->roles)>0)
                                <span class="text-dark">
                                    @foreach($post->user->roles as $role)
                                        <span class="mr-3">
                                            {{ $role->name }}
                                        </span>
                                    @endForeach
                                </span>
                            @endIf
                            <span class="text-success col-6 float-right">
                                @foreach($post->categories as $category)
                                    <span class="mr-3">
                                        {{ $category->category }}
                                    </span>
                                @endForeach
                            </span>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $post->title }}
                            </p>
                            {{ $post->body }}
                        </div>
                        <div class="card-footer d-flex justify-content-around">
                            <a href="/posts/{{ $post->id }}">View Post</a>
                            @if(auth()->user()->id === $post->user->id)
                                <a href="/posts/{{ $post->id }}/edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                            @endIf
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="container-fluid">
            <div class="row mt-5 text-center">
                <div class="col-12">
                    {{ $posts->appends(request()->except('page'))->links('paginate') }}
                </div>
            </div>
        </div>
    </div>
                
@endSection