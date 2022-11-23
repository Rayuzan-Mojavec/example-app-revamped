@extends('core.core')

@section('content')
    <div class="mt-16 mb-32 mx-auto container">
        <div class="rounded-xl prose max-w-none shadow-lg px-8 py-14">
            <h1 class="text-4xl font-bold">{{ $blog->title }}</h1>
            <img src="{{ asset('fsdkn.jpg') }}" alt="">
            <div class="text-xl">{!! $blog->body !!}</div>
            <a href="{{ route('blog.index') }}" class="bg-blue-500 p-2 rounded-md text-2xl"><i
                    class="bi bi-arrow-left text-white"></i></a>
            <a href="{{ route('blog.edit', $blog->id) }}" class="bg-yellow-500 p-2 rounded-md text-2xl"><i
                    class="bi bi-vector-pen"></i></a>
            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" class="inline-block">
                @method('delete')
                @csrf
                <button type="submit" class="bg-red-500 p-2 rounded-md text-2xl text-white"><i class="bi bi-trash"></i></button>
            </form>
        </div>
    </div>
@endsection
