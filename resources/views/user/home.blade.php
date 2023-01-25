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
    <!-- End top bar -->

    <!-- Start header -->
    @include('user.header')
    <!-- End header -->

    <!-- Start Banner -->
    @include('user.startBanner')
    <!-- End Banner -->

    <!-- Start About us -->
    @include('user.about')
    <!-- End About us -->



    <!-- Start Appointment -->
    @include('user.appointment')
    <!-- End Appointment -->

    <!-- Start Gallery -->
    @include('user.gallery');
    <!-- End Gallery -->

    <!-- Start Team -->
    @include('user.team');

    <!-- End Team -->



    <!-- Start Contact -->
    @include('user.services');
    <!-- End Contact -->


    <!-- Start Footer -->
    @include('user.footer');
    <!-- End Footer -->

    @include('user.js');
</body>

</html>
