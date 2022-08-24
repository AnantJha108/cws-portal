@extends('admin.adminBase')

@section('content')
    <div class="flex gap-2">
        @include('admin.side')
        <div class="w-4/5 h-screen">
            <table class=" ">
                <div class="flex justify-between px-4 items-center mt-3">
                    <h2 class="text-2xl font-bold font-sans">Manage Courses</h2>
                    <a href="{{ route('course.create') }}"
                        class="bg-green-600 text-white px-3 py-2 rounded hover:bg-green-800">Add New Course</a>
                </div>
                <div class="px-3 mt-4">
                    <table class="border-collapse border border-slate-500 w-full">
                        <tr>
                            <th class="border border-slate-400">Id</th>
                            <th class="border border-slate-400">Name</th>
                            <th class="border border-slate-400">Duration</th>
                            <th class="border border-slate-400">Fees</th>
                            <th class="border border-slate-400">Action</th>
                        </tr>
                        @foreach ($course as $item)
                            <tr>
                                <td class="border border-slate-400 p-1">{{ $item->id }}</td>
                                <td class="border border-slate-400 p-1">{{ $item->title }}</td>
                                <td class="border border-slate-400 p-1">{{ $item->duration }} Months</td>
                                <td class="border border-slate-400 p-1"><del
                                        class="text-red-700 mx-4">{{ $item->discount_price }}</del>{{ $item->price }}</td>
                                <td class="border border-slate-400 p-1 flex gap-3">
                                    <a href="{{route('course.edit',$item)}}" class="bg-green-500 rounded px-3 py-1 text-white hover:bg-green-700">Edit</a>
                                    <form action="{{ route('course.destroy', $item) }}" method="POST">
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
        </div>
    </div>
@endsection
