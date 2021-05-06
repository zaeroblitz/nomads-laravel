<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo_nomads@2x.png') }}" alt="Logo Nomads" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle 
        id=" navbardrop" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                        <a href="#" class="dropdown-item">Link</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>

            @guest
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    @csrf
                    <button class="btn btn-login btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">Login</button>
                </form>

                <!-- Desktop Button -->
                <form action="{{ url('logout') }}" class="form-inline my-2 my-lg-0 d-none d-md-block" method="POST">
                    @csrf
                    <button class="btn btn-login btn-desktop btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">Login</button>
                </form>
            @endguest

            @auth
                <!-- Mobile Button -->
                <form action="{{ url('logout') }}" class="form-inline d-sm-block d-md-none" method="POST">
                    @csrf
                    <button class="btn btn-login btn-login my-2 my-sm-0" type="submit">Logout</button>
                </form>

                <!-- Desktop Button -->
                <form action="{{ url('logout') }}" class="form-inline my-2 my-lg-0 d-none d-md-block" method="POST">
                    @csrf
                    <button class="btn btn-login btn-desktop btn-navbar-right my-2 my-sm-0 px-4"
                        type="submit">Logout</button>
                </form>
            @endauth
        </div>
    </nav>
</div>
