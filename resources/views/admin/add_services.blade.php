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
        <div class="container text-center" style="padding-top: 100px">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert"></button>

            </div>
            @endif
            <form action="{{url('upload_services')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px">
                    <label for="testName">Test Name</label>
                    <select style="color: black;width:200px" name="testName" id="testName" required>
                        <option value="">--select--</option>
                        <option value="cholestrol">cholestrol test</option>
                        <option value="bloodSugar">blood Sugar test</option>
                        <option value="liverFunction">Liver Function test</option>
                        <option value="KidneyFunction">kidney function test</option>
                        <option value="basicMatabolicPanel">basic matabolic panel</option>
                        <option value="Hamatology">Hamatology test</option>
                    </select>
                </div>
                <div style="padding: 15px">
                    <label for="type">Test type</label>
                    <input type="text" style="color: black" name="type" id="type"
                        placeholder="Enter the test type" required>
                </div>
                <div style="padding: 15px">
                    <label for="price">price</label>
                    <input type="number" style="color: black" name="price" id="price"
                        placeholder="Enter the price of test" required>
                </div>

                
                <div style="padding: 15px">
                    <label for="Image">Image</label>
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
