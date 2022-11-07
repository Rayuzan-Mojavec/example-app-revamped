@extends('core.core')

@section('content')
    <div class="mt-16 mb-32 flex justify-center">
        <div class="px-14 py-14 border rounded-lg shadow-lg w-4/5  text-lg">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" class="form-input px-4 py-2 w-full rounded-md" id="category_name" name="category_name"
                        value="{{ old('category_name') }}">
                    @error('category_name')
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
