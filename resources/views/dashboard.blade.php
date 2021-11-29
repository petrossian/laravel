<div class="container mt-5 pt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(auth()->user()->profile_image->file != 'NULL')
                        <div style="
                            display:block;
                            width: 40px;
                            height: 40px;
                            border: 3px solid silver;
                            border-radius: 50%;
                            margin-right: 10px;
                            background-image: url('/uploads/{{ auth()->user()->profile_image->file }}');
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

                <div class="card-body">
                    @if (session('status'))
                   
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="/home">
                                <i class="fa fa-home" title="Homepage"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/account/{{ auth()->user()->id }}">
                                <i class="fa fa-user" title="User Account"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">
                                <i class="fa fa-list" title="Posts List"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts/create">Create Post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>