@extends('base')

@section('content')
   
    <div class="flex place-content-center items-center p-12">
        <div class="w-96 bg-teal-200 rounded-xl p-3 border h-auto">
            <h2 class="text-black mb-5 text-3xl">Register Here</h2>
            <form action="{{route("register")}}" method="POST" class="space-y-5">
                @csrf
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="border w-full px-3 py-3 rounded" placeholder="Enter Name Here">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="border w-full px-3 py-3 rounded" placeholder="Enter email Here">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="Password" name="password" class="border w-full px-3 py-3 rounded" placeholder="Enter Password Here">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Create an Account" class="bg-teal-600 rounded text-white font-bold hover:bg-teal-700 w-full py-2 px-2">
                </div>
            </form>
        </div>
    </div>

@endsection
