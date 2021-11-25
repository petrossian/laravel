@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Current State</div>
                    <div class="card-body">
                        <p>{{ $post->title }}</p>
                        {{ $post->body }}
                    </div>
                    <div class="card-footer">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                    <i class="fa fa-edit"></i>Edit This Post
                                </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <form action="/posts/{{ $post->id }}" method="post" class="pb-5">
                                            @csrf
                                            @method('PUT')
                                            <div class="input-group mt-3">
                                                <label for="title" class="mr-3 text-dark font-weight-bold">Title</label>
                                                <input class="form-control" id="title" type="text" name="title" placeholder="New Post Title" value="{{ $post->title }}">
                                            </div>
                                            <div class="input-group mt-3">
                                                <label for="body" class="mr-3 text-dark font-weight-bold">Body</label>
                                                <textarea class="form-control" id="body" type="text" name="body" placeholder="New Post Body">{{ $post->body }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-success d-block float-right mt-3">Go</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection