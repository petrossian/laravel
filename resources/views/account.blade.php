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
                                aaa
                            </div>
                            <div class="col-8">
                                <i class="fa fa-phone"></i>&nbsp;{{ $user->phone->phone }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection