<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pannel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-gray-50">
    <div class="shadow-sm bg-black py-4 justify-between flex">
        <div class="flex gap-6 items-center">
            {{-- <img src="assets/logo.svg" class="ml-10" width="25%" alt=""> --}}
            <a href="{{route('admin.dashboard')}}" class="font-semibold ml-6 bold text-white text-xl">CWS || Admin Pannel</a>
        </div>
        <ul class="flex gap-5 items-center">
            <li><a href="{{route('admin.logout')}}" class="border bg-white py-1 px-3 hover:bg-gray-100 font-semibold rounded mr-10">Logout</a>
            </li>
        </ul>
    </div>
    @section('content')
       @show
</body>

</html>
