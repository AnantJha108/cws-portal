@extends('base')

@section('content')
    <div class="bg-gradient-to-br from-indigo-500 to-pink-500 h-96">
        <div class="px-12 p-5">
            <div class="bg-white shadow-lg w-1/2 rounded-lg p-5 mt-12">
                <h1 class="font-bold mb-3 font-sans text-4xl">First Course 100% Free</h1>
                <p class="text-gray-600 font-semibold text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Repudiandae explicabo saepe eum nulla facilis maxime velit corporis culpa corrupti ullam consequatur,
                    animi inventore odio deleniti accusamus eos nihil autem laborum.</p>
                <div class="flex justify-end">
                    <a href="{{route('viewAll')}}"
                        class="bg-teal-600 text-white px-3 py-2 rounded-lg font-sans text-xl mt-2 hover:bg-teal-900">Explore
                        Courses</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="h-96 mx-28 shadow-sm" style="background: url('assets/bg.png')">
        <div class="card p-20">
            <div class="w-2/5 bg-white p-5 shadow-lg">
                <h4 class="text-3xl font-semibold font-mono text-gray-800">Sale ends today</h4>
                <p class="mt-1 text-gray-900">Log in and start exploring new possibilities for your future. Save on
                    courses now.</p>
            </div>
        </div>
    </div> --}}
    <div>
        <h2 class="font-semibold text-3xl px-10 py-6">Our Courses</h2>
        <div class="flex gap-6 px-10">
            @foreach ($course as $item)
                <div class="w-1/6 ">
                    <a href="{{route('view',$item->id)}}">
                        <div class="bg-white rounded border shadow">
                            <div class="p-2">
                                <img src="{{asset('/images/'.$item->image)}}" class="rounded-lg object-cover h-52" alt="loading">
                                <hr>
                                <h2 class="text-center"><a href="{{route('view',$item->id)}}">{{$item->title}}</a></h2>
                            </div>
                            <div class="bg-teal-800 w-full p-3 rounded text-center text-white">Duration : {{$item->duration}} Months</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <h2 class="font-semibold text-3xl px-14 py-4">Our Achievements</h2>
        <div class="flex gap-5 py-4 px-20">
            <div class="w-1/5 ">
                <div class="bg-white rounded border shadow">
                    <div class="p-2">
                        <div class="grid justify-items-center">
                            <img src="https://codewithsadiq.com/public/images/placement/1639918531.jpg" class="rounded-lg object-cover h-72" alt="">
                        </div>
                        <h2 class="text-center font-semibold text-lg">Alok Kumar</h2>
                        <p class="text-center text-sm font-semibold">Backend Devloper</p>
                        <p class="text-center text-gray-600 text-sm">@ uipro</p>
                    </div>
                </div>
            </div>
            <div class="w-1/5 ">
                <div class="bg-white rounded border shadow">
                    <div class="p-2">
                        <div class="grid justify-items-center">
                            <img src="https://codewithsadiq.com/public/images/placement/1639918531.jpg" class="rounded-lg object-cover h-72" alt="">
                        </div>
                        <h2 class="text-center font-semibold text-lg">Alok Kumar</h2>
                        <p class="text-center text-sm font-semibold">Backend Devloper</p>
                        <p class="text-center text-gray-600 text-sm">@ uipro</p>
                    </div>
                </div>
            </div>
            <div class="w-1/5 ">
                <div class="bg-white rounded border shadow">
                    <div class="p-2">
                        <div class="grid justify-items-center">
                            <img src="https://codewithsadiq.com/public/images/placement/1639918531.jpg" class="rounded-lg object-cover h-72" alt="">
                        </div>
                        <h2 class="text-center font-semibold text-lg">Alok Kumar</h2>
                        <p class="text-center text-sm font-semibold">Backend Devloper</p>
                        <p class="text-center text-gray-600 text-sm">@ uipro</p>
                    </div>
                </div>
            </div>
            <div class="w-1/5 ">
                <div class="bg-white rounded border shadow">
                    <div class="p-2">
                        <div class="grid justify-items-center">
                            <img src="https://codewithsadiq.com/public/images/placement/1639918531.jpg" class="rounded-lg object-cover h-72" alt="">
                        </div>
                        <h2 class="text-center font-semibold text-lg">Alok Kumar</h2>
                        <p class="text-center text-sm font-semibold">Backend Devloper</p>
                        <p class="text-center text-gray-600 text-sm">@ uipro</p>
                    </div>
                </div>
            </div>
            <div class="w-1/5 ">
                <div class="bg-white rounded border shadow">
                    <div class="p-2">
                        <div class="grid justify-items-center">
                            <img src="https://codewithsadiq.com/public/images/placement/1639918531.jpg" class="rounded-lg object-cover h-72" alt="">
                        </div>
                        <h2 class="text-center font-semibold text-lg">Alok Kumar</h2>
                        <p class="text-center text-sm font-semibold">Backend Devloper</p>
                        <p class="text-center text-gray-600 text-sm">@ uipro</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
