@extends('base')

@section('content')
   
    <div class="flex place-content-center items-center p-12">
        <div class="w-96 bg-blue-400 rounded-xl p-3 border h-auto">
            <h2 class="text-black mb-5 text-3xl">Login Here</h2>
            <form action="" method="POST" class="space-y-5">
                @csrf
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="border w-full px-3 py-3 rounded" placeholder="Enter email Here">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="Password" class="border w-full px-3 py-3 rounded" placeholder="Enter Password Here">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Login" class="bg-blue-600 rounded text-white font-bold hover:bg-blue-700 w-full py-2 px-2">
                </div>
            </form>
        </div>
    </div>

@endsection
