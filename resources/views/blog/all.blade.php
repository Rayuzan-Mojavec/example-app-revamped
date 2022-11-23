@extends('core.core')

@section('content')
    <div class="mt-32 mx-5 rounded-lg">
        <div class="my-2 flex justify-start">
            <form action="{{ route('blog.index') }}" class="inline-flex">
                @if (request('categories'))
                    <input type="hidden" name="categories" value="{{ request('categories') }}">
                @endif
                <input type="text" id="search" name="search" value="{{ request('search') }}"
                    class="form-input rounded-l-xl border-slate-700 focus:border-slate-700 dark:border-slate-300 transition focus:ring-transparent">
                <button class="px-5 rounded-r-xl bg-slate-400" type="submit">
                    <i class="bi bi-search text-lg"></i>
                </button>
            </form>
        </div>
        <div class="flex my-3">
            <a href="{{ route('blog.create') }}"
                class="bg-teal-700 text-xl px-5 py-2 flex rounded-md text-white no-underline">
                Tambah Data
            </a>
        </div>
        @if ($blogs->count())
            <div class="grid grid-cols-3 gap-6 justify-center">
                @foreach ($blogs as $blog)
                    <div class="rounded overflow-hidden shadow-lg">
                        <img src="{{ asset('Chinese.jpg') }}" alt="" class="w-full">
                        <div class="px-6 py-6">
                            <a href="{{ route('blog.show', $blog->id) }}"
                                class="font-bold text-2xl mb-2">{{ $blog->title }}</a>
                            <p class="text-gray-700 text-base">
                                {{ $blog->categories->category_name }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h1 class="text-center font-extrabold text-7xl py-6">LAWAK LO</h1>
        @endif
        <div class="mt-10 mb-32">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
