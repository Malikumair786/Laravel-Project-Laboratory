<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    @include('user.css')
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    @include('user.topbar')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
            {{-- <button type="button" class="close" data-dismiss="alert"></button> --}}
        </div>
    @endif

    @include('user.header')

    @include('user.startBanner')

    @include('user.about')

    @include('user.appointment')


    @include('user.gallery')

    @include('user.team')

    @include('user.services');

    @include('user.footer');

    @include('user.js');
</body>

</html>
