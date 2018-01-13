<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{URL('/')}}">
        <img src="{{URL::TO('/logo/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
        Finder Kosan
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if(Auth::guest())
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ROUTE('get.login')}}">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ROUTE('get.register')}}">Register</a>
                </li>
            </ul>
        @else
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ROUTE('get.profile',['id'=>Auth::user()->id])}}">Profile<span class="sr-only">(current)</span></a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ROUTE('get.pokemon')}}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ROUTE('get.register')}}"><i class="fa fa-s///hopping-cart" aria-hidden="true"></i>
                        </a>
                </li>
            </ul>

            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">{{Auth::user()->email}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ROUTE('get.logout')}}">Logout</a>
                </li>
            </ul>
        @endif
    </div>
</nav>