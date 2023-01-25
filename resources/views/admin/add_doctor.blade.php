{{-- <x-app-layout>
    <h1>This is admin dashboard</h1>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        label { 
            display:inline-block;
            width:200px;
        }
    </style>
    @include('admin.css')
</head>

<body>
    @include('admin.sidebar')

    @include('admin.header')

    <div class="container-fluid page-body-wrapper">
        {{-- <h1>Hello</h1> --}}
        <div class="container text-center" style="padding-top: 100px">

            
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert"></button>

            </div>
            @endif
            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px">
                    <label for="doctorName">Doctor Name</label>
                    <input type="text" style="color: black" name="DoctorName" id="doctorName"
                        placeholder="Enter the doctor Name" required>
                </div>
                <div style="padding: 15px">
                    <label for="phone">phone</label>
                    <input type="number" style="color: black" name="phone" id="phone"
                        placeholder="Enter the doctor phone number" required>
                </div>
                <div style="padding: 15px">
                    <label for="Speciality">Speciality</label>
                    <select style="color: black;width:220px" name="speciality" id="speciality" required>
                        <option value="">--select--</option>
                        <option value="general">general</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Neurologists">Neurologists</option>
                        <option value="padiatric">padiatric</option>
                    </select>
                </div>
                <div style="padding: 15px">
                    <label for="RoomNo">Room</label>
                    <input type="text" style="color: black" name="room" id="RoomNo"
                        placeholder="Enter the doctor Room No" required>
                </div>
                <div style="padding: 15px">
                    <label for="Image">Doctor Image</label>
                    <input type="file" name="file" id="Image" required>
                </div>
                <div style="padding: 15px">
                    <button type="submit" class="btn btn-success" required>Submit</button>
                </div>

            </form>
        </div>
    </div>
    @include('admin.js')
</body>

</html>
