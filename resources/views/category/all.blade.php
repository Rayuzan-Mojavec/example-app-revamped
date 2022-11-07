@extends('core.core')

@section('content')
    <div class="mt-24 flex justify-center">
        <div class="grid grid-cols-3 gap-3">
            @foreach ($categories as $category)
                <div class="grid grid-cols-1 shadow-md rounded-lg overflow-hidden">
                    <a href="{{ route('blog.index', ['categories' => $category->category_name]) }}"
                        class="bg-[url('/public/sin.jpg')] bg-cover overflow-hidden">
                        <div class="px-36 py-20 flex items-center justify-center bg-black/30 w-full h-full">
                            <p class="flex text-2xl font-bold text-center text-white">{{ $category->category_name }}</p>
                        </div>
                    </a>
                    <div class="bg-gray-300 p-5">
                        <a href="{{ route('category.edit', $category->id) }}"
                            class="px-4 py-2 bg-yellow-300 text-center rounded-lg mr-2 shadow-md">
                            Edit
                        </a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="inline-flex">
                            @csrf
                            @method('delete')
                            <button type="submit" class="px-4 py-2 bg-red-300 rounded-lg shadow-md">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mb-24 mt-8 flex justify-center">
        <a href="{{ route('category.create') }}" class="px-4 py-2 bg-purple-400 rounded-lg shadow-md">
            Create new category
        </a>
    </div>
@endsection
