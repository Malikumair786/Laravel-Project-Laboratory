<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    <base href="/public">
    @include('admin.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>

<body>
    @include('admin.sidebar')

    @include('admin.header')



    <div style="color: white" class="container-fluid page-body-wrapper">




        <div class="text-center" style="padding-top: 30px">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close btn-close-white" aria-label="Close" data-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ url('edit_doctor', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px">
                    <label for="doctorName">Doctor Name</label>
                    <input type="text" style="color: black" name="name" id="doctorName"
                        value="{{ $doctor->name }}" required>
                </div>
                <div style="padding: 15px">
                    <label for="phone">phone</label>
                    <input type="number" style="color: black" name="phone" id="phone"
                        value="{{ $doctor->phone }}" required>
                </div>
                <div style="padding: 15px">
                    <label for="Speciality">Speciality</label>
                    <select style="color: black; width:220px" name="speciality" id="speciality" required>
                        <option value="{{ $doctor->speciality }}">{{ $doctor->speciality }}</option>
                        <option value="general">general</option>
                        <option value="surgery">Surgery</option>
                        <option value="Neurologists">Neurologists</option>
                        <option value="padiatric">padiatric</option>
                    </select>
                </div>
                <div style="padding: 15px">
                    <label for="RoomNo">Room</label>
                    <input type="text" style="color: black" name="room" id="RoomNo" value="{{ $doctor->room }}"
                        required>
                </div>
                <div style="padding: 15px">
                    <label>old Image</label>
                    <img style="margin-left: 200px" height="150px" width="150px" src="doctorImage/{{ $doctor->image }}"
                        alt="">
                </div>
                <div style="padding: 15px">
                    <label for="Image">change Image</label>
                    <input type="file" name="file" id="Image">
                 </div>
                <div style="padding: 15px">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>

        </div>
    </div>

    @include('admin.js')
</body>

</html>
