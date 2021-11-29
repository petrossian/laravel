@extends('layouts.app')
@section('content')
    <div class="container mt-5 pt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                @if($user->profile_image->file != 'NULL')
                                    <div style="
                                        display:block;
                                        width: 40px;
                                        height: 40px;
                                        border: 3px solid silver;
                                        border-radius: 50%;
                                        margin-right: 10px;
                                        background-image: url('/uploads/{{ $user->profile_image->file }}');
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
                            </div>
                            <div class="col-8">
                                <i class="fa fa-user"></i>&nbsp;{{ $user->name }} <br>
                                <i class="fa fa-phone"></i>&nbsp;{{ $user->phone->phone }} <br>
                                <i class="fa fa-envelope"></i>&nbsp;{{ $user->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection