@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                     
                    </div>
                    <div class="card-footer">
                        <form action="/posts" method="POST" class="pb-5">
                            @csrf
                            <div class="input-group mt-3">
                                <label for="category_id" class="mr-3 text-dark font-weight-bold">Category Id</label>
                                <input class="form-control" id="category_id" type="text" name="category_id" placeholder="Category Id">
                            </div>
                            <div class="input-group mt-3">
                                <label for="title" class="mr-3 text-dark font-weight-bold">Title</label>
                                <input class="form-control" id="title" type="text" name="title" placeholder="New Post Title">
                            </div>
                            <div class="input-group mt-3">
                                <label for="body" class="mr-3 text-dark font-weight-bold">Body</label>
                                <textarea class="form-control" id="body" type="text" name="body" placeholder="New Post Body"></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success d-block float-right mt-3">Go</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection