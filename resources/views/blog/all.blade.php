@extends('core.core')

@section('content')
    <div class="mt-32 mx-5 rounded-lg">
        <div class="my-2 flex justify-start">
            <form action="{{ route('blog.index') }}" class="inline-flex">
                <input type="text" id="search" name="search" value="{{ request('search') }}"
                    class="form-input rounded-l-xl border-slate-700 focus:border-slate-700 dark:border-slate-300 transition focus:ring-transparent">
                <button class="px-5 rounded-r-xl bg-slate-400" type="submit">
                    <i class="bi bi-search text-lg"></i>
                </button>
            </form>
        </div>
        <div class="flex my-3">
            <a href="{{ route('blog.create') }}" class="bg-teal-700 text-xl px-5 py-2 flex rounded-md text-white no-underline">
                Tambah Data
            </a>
        </div>
        <table class="table-auto w-full">
            <thead class="border">
                <tr>
                    <th class="p-5 border">No</th>
                    <th class="p-5 border">Title</th>
                    <th class="p-5 border">Action</th>
                </tr>
            </thead>
            @if ($blogs->count())
                <tbody class="border">
                    @foreach ($blogs as $blog)
                        <tr>
                            <td class="p-5 border">{{ $loop->iteration }}</td>
                            <td class="p-5 border">{{ $blog->title }}</td>
                            <td class="p-5 border flex justify-center">
                                <a href="{{ route('blog.show', $blog->id) }}"
                                    class="bg-teal-500 text-white px-4 py-2 rounded-md">
                                    View
                                </a>
                                <a href="{{ route('blog.edit', $blog->id) }}"
                                    class="bg-yellow-500 ml-2 text-white px-4 py-2 rounded-md">
                                    Edit
                                </a>
                                <form action="{{ route('blog.destroy', $blog->id) }}" class="inline-flex" method="POST">
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
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
