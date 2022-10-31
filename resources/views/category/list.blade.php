@extends('core.core')

@section('content')
    <div class="mt-32 mx-5 rounded-lg">
        <table class="table-auto w-full">
            <thead class="border">
                <tr>
                    <th class="p-5 border">No</th>
                    <th class="p-5 border">Title</th>
                    <th class="p-5 border">Category</th>
                    <th class="p-5 border">Action</th>
                </tr>
            </thead>
            @if ($lists->count())
                <tbody class="border">
                    @foreach ($lists->blogs as $list)
                        <tr>
                            <td class="p-5 border">{{ $loop->iteration }}</td>
                            <td class="p-5 border">{{ $list->title }}</td>
                            <td class="p-5 border">{{ $list->categories->category_name }}</td>
                            <td class="p-5 border flex justify-center">
                                <a href="{{ route('blog.show', $list->id) }}"
                                    class="bg-teal-500 text-white px-4 py-2 rounded-md">
                                    View
                                </a>
                                <a href="{{ route('blog.edit', $list->id) }}"
                                    class="bg-yellow-500 ml-2 text-white px-4 py-2 rounded-md">
                                    Edit
                                </a>
                                <form action="{{ route('blog.destroy', $list->id) }}" class="inline-flex" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="bg-red-500 ml-2 text-white px-4 py-2 rounded-md">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <tbody class="border">
                    <td colspan="3" class="p-5 border text-center text-lg">Teu aya asu</td>
                </tbody>
            @endif
        </table>
        <div class="mt-10 mb-32">
        </div>
    </div>
@endsection
