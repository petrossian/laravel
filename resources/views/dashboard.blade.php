<div class="container mt-5 pt-2">
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
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="/home">
                                <i class="fa fa-home" title="Homepage"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/account">
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