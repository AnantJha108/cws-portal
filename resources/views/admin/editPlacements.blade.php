@extends('admin.adminBase')

@section('content')
    <div class="flex">
        @include('admin.side')
        <div class="w-4/5 h-screen">
            <form action="{{route('placement.update',$placement)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="grid grid-cols-1 px-32 py-5 gap-5">
                    <div class="flex mb-3 flex-col">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{$placement->name}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Position</label>
                        <input type="text" name="position" value="{{$placement->position}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex mb-3 flex-col">
                        <label for="">Company Name</label>
                        <input type="text" name="company_name" value="{{$placement->company_name}}" class="border border-gray-400 px-2 py-2 rounded">
                    </div>
                    <div class="flex">
                        <input type="submit" value="Update" class="bg-green-800 hover:bg-green-900 text-white px-3 py-2 text-2xl rounded">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
