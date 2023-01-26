{{-- <x-app-layout>
    <h1>This is admin dashboard</h1>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')

    @include('admin.header')

    <div class="container-fluid page-body-wrapper">

        <div class=" text-center" style="padding-top: 50px">
            <table>
                <tr style="background-color: black">
                    <th style="padding: 10px; font-size: 15px; color:white">Customer Name</th>
                    <th style="padding: 10px; font-size: 15px; color:white">Customer email</th>
                    <th style="padding: 10px; font-size: 15px; color:white">phone</th>
                    <th style="padding: 10px; font-size: 15px; color:white">doctor Name</th>
                    <th style="padding: 10px; font-size: 15px; color:white">date</th>
                    <th style="padding: 10px; font-size: 15px; color:white">Message</th>
                    <th style="padding: 10px; font-size: 15px; color:white">Status</th>
                    <th style="padding: 10px; font-size: 15px; color:white">Approved</th>
                    <th style="padding: 10px; font-size: 15px; color:white">Cancel</th>
                </tr>

                {{-- @foreach ($appoint as $appoints)
                    <tr class="text-center" style="background-color: black">
                        <td style="padding: 10px; color:white">{{ $appoints->doctor }}</td>
                        <td style="padding: 10px; color:white">{{ $appoints->date }}</td>
                        <td style="padding: 10px; color:white">{{ $appoints->message }}</td>
                        <td style="padding: 10px; color:white">{{ $appoints->status }}</td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete the appoinmtent')"
                                href="{{ url('cancel_appoint', $appoints->id) }}">Cancel</a></td>
                    </tr>
                @endforeach --}}

                @foreach ($data as $appoints)
                    <tr class="text-center" style="background-color: skyblue">
                        <td style="padding: 3px; color:white">{{$appoints->name}}</td>
                        <td style="padding: 3px; color:white">{{$appoints->email}}</td>
                        <td style="padding: 3px; color:white">{{$appoints->phone}}</td>
                        <td style="padding: 3px; color:white">{{$appoints->doctor}}</td>
                        <td style="padding: 3px; color:white">{{$appoints->date}}</td>
                        <td style="padding: 3px; color:white">{{$appoints->message}}</td>
                        <td style="padding: 3px; color:white">{{$appoints->status}}</td>
                        {{-- <button class="btn btn-success"></button> --}}
                        <td><a class="btn btn-success" href="{{url('approved',$appoints->id)}}">Approved</a></td>
                        <td><a class="btn btn-danger" href="{{url('cancelled',$appoints->id)}}">Cancelled</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    @include('admin.js')
</body>

</html>
