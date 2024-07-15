<div>
    <!-- Well begun is half done. - Aristotle -->
</div>
<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
@extends('layout')
@section('title', 'Create book')
@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Cập nhật sách</h2>
        <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <input type="hidden" id="id" name="id"
                   value="{{ $book->id }} ">
            </div>
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề sách</label>
                <input type="text" id="title" name="title"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->title }} ">
            </div>
            <div class="mb-4">
                <label for="thumbnail" class="block text-sm font-medium text-gray-700">Ảnh mô tả</label>
                <input type="text" id="thumbnail" name="thumbnail"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->thumbnail }} ">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">Tác giả</label>
                <input type="text" id="author" name="author"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->author }} ">
            </div>
            <div class="mb-4">
                <label for="publisher" class="block text-sm font-medium text-gray-700">Nhà xuất bản</label>
                <input type="text" id="publisher" name="publisher"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->publisher }} ">
            </div>
            <div class="mb-4">
                <label for="publication" class="block text-sm font-medium text-gray-700">Ngày xuất bản</label>
                <input type="date" id="publication" name="publication"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->publication }} ">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Giá bán</label>
                <input type="number" step="0.01" id="price" name="price"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->price }} ">
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-medium text-gray-700">Số lượng</label>
                <input type="number" id="quantity" name="quantity"
                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md" value="{{ $book->quantity }} ">
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Mã loại</label>
                <select id="category_id" name="category_id" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    <option value="" disabled selected>Chọn mã loại</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id === $book->category_id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-center space-x-4">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg">Cập nhật</button>
                <a href="{{ route('book.index') }}" class="bg-green-500 text-white py-2 px-4 rounded-lg">List</a>
            </div>
        </form>
    </div>
@endsection
