@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <p>{{ $post->title }} <a href="/account/{{ $post->user->id }}">{{ $post->user->name }}</a> </p>
                        {{ $post->body }}
                        
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <a href="#" onclick="submitDeleteForm()">
                            <i class="fa fa-trash"></i>
                            <script>
                                function submitDeleteForm(){
                                    document.querySelector('#delete_form button[type="submit"]').click();
                                }
                            </script>
                        </a>
                        <form action="/posts/{{ $post->id }}" method="post" id="delete_form" class="d-none">
                            @csrf
                            @method('DELETE')
                            <button type="submit"></button>
                        </form>
                        <a href="/posts/{{ $post->id }}/edit">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection