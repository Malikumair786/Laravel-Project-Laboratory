<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    @include('user.css')
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    @include('user.topbar')

    @include('user.header')

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        {{-- <button type="button" class="close" data-dismiss="alert"></button> --}}
    </div>
    @endif


    <div class="d-flex justify-content-center" style="padding: 70px">
        <table>
            <tr style="background-color: black">
                <th style="padding: 10px; font-size: 20px; color:white">Doctor Name</th>
                <th style="padding: 10px; font-size: 20px; color:white">Date</th>
                <th style="padding: 10px; font-size: 20px; color:white">Message</th>
                <th style="padding: 10px; font-size: 20px; color:white">Status</th>
                <th style="padding: 10px; font-size: 20px; color:white">Cancel Appointment</th>
            </tr>

            @foreach ($appoint as $appoints)
                <tr class="text-center" style="background-color: black">
                    <td style="padding: 10px; color:white">{{$appoints->doctor}}</td>
                    <td style="padding: 10px; color:white">{{$appoints->date}}</td>
                    <td style="padding: 10px; color:white">{{$appoints->message}}</td>
                    <td style="padding: 10px; color:white">{{$appoints->status}}</td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete the appoinmtent')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
                </tr>
            @endforeach


        </table>
    </div>

    {{-- @include('user.footer') --}}

    @include('user.js')
</body>

</html>
