<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="">
    @include('include/header')
    {{--<div class="mx-28">
            <h1 class="text-3xl font-bold font-mono mt-9 text-gray-800">A broad selection of courses</h1>
            <p class="mt-1 text-xl text-gray-900">Choose from 204,000 online video courses with new additions published
                every month</p>
            <ul class="flex gap-5 font-semibold mt-2">
                <li class="text-black"><a href="">Python</a></li>
                <li class="text-gray-600 hover:text-black"><a href="">Excel</a></li>
                <li class="text-gray-600 hover:text-black"><a href="">Web Development</a></li>
                <li class="text-gray-600 hover:text-black"><a href="">JavaScript</a></li>
                <li class="text-gray-600 hover:text-black"><a href="">Data Science</a></li>
                <li class="text-gray-600 hover:text-black"><a href="">AWS Certification</a></li>
                <li class="text-gray-600 hover:text-black"><a href="">Drawing</a></li>
            </ul> --}}
    {{-- <div class="border border-gray-400 mt-4 mb-10 p-6">
                <h1 class="text-2xl font-bold font-sans text-gray-700">Expand your career opportunities with Python</h1>
                <p class="mt-1 w-3/4 text-black">Take one of Udemy’s range of Python courses and learn how to code using
                    this incredibly useful language. Its simple syntax and readability makes Python perfect for Flask,
                    Django, data science, and machine learning. You’ll learn how to build everything from games to sites
                    to apps. Choose from a range of courses that will appeal to</p>
                <a href="" class="border border-black py-1 px-3 hover:bg-gray-100 font-semibold mt-3">Explore
                    Python</a>
            </div>
        </div> --}}
    @section('content')
       @show

    @include('include/footer')
</body>

</html>
