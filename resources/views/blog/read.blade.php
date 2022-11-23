@extends('core.core')

@section('content')
    <div class="mt-16 mb-32 mx-auto container">
        <div class="rounded-xl prose max-w-none shadow-lg px-8 py-14">
            <h1 class="text-4xl font-bold">{{ $blog->title }}</h1>
            <img src="{{ asset('fsdkn.jpg') }}" alt="">
            <div class="text-xl">{!! $blog->body !!}</div>
            <a href="{{ route('blog.index') }}" class="mt-5">Back to home</a>
        </div>
    </div>
@endsection
