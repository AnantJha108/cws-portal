@extends('admin.adminBase')

@section('content')
    <div class="flex">
        @include('admin.side')
        <div class="w-4/5 h-screen">
            <form action="{{route('course.update',$course)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="grid grid-cols-3 px-32 py-5 gap-5">
                    <div class="flex mb-3 flex-col">
                        <label for="">Title</label>
                        <input type="text" name="title" value="{{$course->title}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Duration</label>
                        <input type="text" name="duration" value="{{$course->duration}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Price</label>
                        <input type="text" name="price" value="{{$course->price}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Discount Price</label>
                        <input type="text" name="discount_price" value="{{$course->discount_price}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex mb-3 flex-col col-span-3">
                        <label for="">Description</label>
                        <textarea name="description" class="border border-gray-400 px-2 py-2 rounded" cols="30" rows="10">{{$course->description}}</textarea>
                    </div>
                    <div class="flex">
                        <input type="submit" value="Update" class="bg-green-800 hover:bg-green-900 text-white px-3 py-2 text-2xl rounded">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
