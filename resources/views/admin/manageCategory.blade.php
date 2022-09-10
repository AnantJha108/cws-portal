@extends('admin.adminBase')

@section('content')
    <div class="flex gap-2">
        @include('admin.side')
        <div class="w-3/5 h-screen">
            <table class="w-3/4 bg-red-700">
                <div class="flex justify-between px-4 items-center mt-3">
                    <h2 class="text-2xl font-bold font-sans">Manage Courses</h2>
                </div>
                <div class="px-3 mt-4">
                    <table class="border-collapse border border-slate-500 w-full">
                        <tr>
                            <th class="border border-slate-400">Id</th>
                            <th class="border border-slate-400">Title</th>
                            <th class="border border-slate-400">Description</th>
                            <th class="border border-slate-400">Action</th>
                        </tr>
                        @foreach ($category as $item)
                            <tr>
                                <td class="border border-slate-400 p-1">{{$item->id}}</td>
                                <td class="border border-slate-400 p-1">{{$item->cat_title}}</td>
                                <td class="border border-slate-400 p-1">{{$item->cat_description}}</td>
                                <td class="border border-slate-400 border-b-0 p-2 flex gap-3">
                                    <a href="{{route('category.edit',$item)}}" class="bg-green-500 rounded px-3 py-1 text-white hover:bg-green-700">Edit</a>
                                    <form action="{{route('category.destroy',$item)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="bg-red-500 rounded px-3 py-1 text-white hover:bg-red-700" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </table>
            <div class="w-1/5 py-10 px-4">
                <form action="" method="POST"
                    class="space-y-3 shadow-xl border border-gray-300 p-3 rounded-lg bg-gray-50">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="cat_title" class="border w-full px-3 py-3 rounded" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="cat_description" class="border w-full px-3 py-3 rounded" cols="30" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Add Category"
                            class="bg-green-600 rounded text-white font-bold hover:bg-green-800 w-full py-2 px-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
