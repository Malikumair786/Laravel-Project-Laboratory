<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="user/images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="#home">Home</a></li>
                    <li><a class="nav-link" href="#about">About Us</a></li>
                    {{-- <li><a class="nav-link" href="#services">Services</a></li> --}}
                    <li><a class="nav-link" href="#appointment">Appointment</a></li>
                    <li><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link" href="#team">Doctor</a></li>
                    <li><a class="nav-link" href="#Services">Services</a></li>

                    @if (Route::has('login'))
                        @auth
                            <li><a class="nav-link" href="{{ url('my_appointment') }}">My appointment</a></li>
                            <x-app-layout>
                            </x-app-layout>
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
