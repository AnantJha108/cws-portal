@extends('admin.adminBase')

@section('content')
    <div class="flex gap-2">
        @include('admin.side')
        <div class="w-3/5 h-screen">
            <table class="w-full bg-red-700">
                <div class="flex justify-between px-4 items-center mt-3">
                    <h2 class="text-2xl font-bold font-sans">Manage Courses</h2>
                </div>
            </table>
            <div class="w-3/5 mx-auto py-10 px-4">
                <form action="{{route('category.update',$category)}}" method="POST"
                    class="space-y-3 shadow-xl border border-gray-300 p-3 rounded-lg  bg-gray-50">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" value="{{$category->cat_title}}" name="cat_title" class="border w-full px-3 py-3 rounded" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="cat_description" class="border w-full px-3 py-3 rounded" cols="30" rows="4">{{$category->cat_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Update"
                            class="bg-green-600 rounded text-white font-bold hover:bg-green-800 w-full py-2 px-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
