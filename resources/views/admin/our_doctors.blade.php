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

        <div class=" text-center" style="padding-top: 30px">
            <table>
                <tr style="background-color: black">
                    <th style="padding: 10px; font-size: 15px; color:white">Name</th>
                    <th style="padding: 10px; font-size: 15px; color:white">phone</th>
                    <th style="padding: 10px; font-size: 15px; color:white">speciality</th>
                    <th style="padding: 10px; font-size: 15px; color:white">room</th>
                    <th style="padding: 10px; font-size: 15px; color:white;">image</th>
                    <th style="padding: 10px; font-size: 15px; color:white;">Update</th>
                    <th style="padding: 10px; font-size: 15px; color:white;">Delete</th>
                </tr>

                @foreach ($doctor as $doctors)
                    <tr class="text-center" style="background-color: skyblue">
                        <td style="padding: 3px; color:white">{{$doctors->name}}</td>
                        <td style="padding: 3px; color:white">{{$doctors->phone}}</td>
                        <td style="padding: 3px; color:white">{{$doctors->speciality}}</td>
                        <td style="padding: 3px; color:white">{{$doctors->room}}</td>
                        {{-- <td style="padding: 3px; color:white  height: 100px; width: 100px">doctorImage/{{$doctors->image}}</td> --}}
                        <td class="padding: 3px; color:white">
                            <img style="  height: 70px; width: 70px" src="doctorImage/{{ $doctors->image }}" alt="">
                        </td>
                        {{-- <button class="btn btn-success"></button> --}}
                        <td><a  class="btn btn-success" href="{{url('updateDoctor',$doctors->id)}}">update</a></td>
                        <td><a onclick="return confirm('Are you sure, you want to delete the doctor')" class="btn btn-danger" href="{{url('deleteDoctor',$doctors->id)}}">delete</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    @include('admin.js')
</body>

</html>
