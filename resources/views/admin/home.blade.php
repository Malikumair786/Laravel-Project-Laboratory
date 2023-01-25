{{-- <x-app-layout>
    <h1>This is admin dashboard</h1>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>

<body>
    @include('admin.sidebar')

    @include('admin.header')
    @include('admin.body')
    @include('admin.js')
</body>

</html>
