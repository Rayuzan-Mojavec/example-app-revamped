@extends('core.core')

@section('content')
    <div class="mt-16 mb-32 flex justify-center">
        <div class="px-14 py-14 border rounded-lg shadow-lg w-4/5  text-lg">
            <form action="{{ route('blog.update', $blog->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-5">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select px-4 py-2 w-full rounded-md" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $blog->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-input px-4 py-2 w-full rounded-md" id="title" name="title"
                        value="{{ old('title', $blog->title) }}">
                    @error('title')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="body" class="form-label">Body</label>
                    <input id="body" type="hidden" name="body" value="{{ old('body', $blog->body) }}">
                    <trix-editor input="body" class="trix-editor"></trix-editor>
                    @error('body')
                        <div class="text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="px-4 py-2 bg-teal-400 rounded-md">Submit</button>
            </form>
        </div>
    </div>
@endsection
