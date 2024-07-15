<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
@extends('layout')
@section('title', 'List book')
@section('content')
<h1 class="font-bold text-center mb-4 text-2xl">Book list</h1>
<table class="table-auto">
    <thead>
      <tr class="bg-gray-200">
        <th class="w-1/12 p-2 border border-gray-300">ID</th>
        <th class="w-2/12 p-2 border border-gray-300">Title</th>
        <th class="w-1/12 p-2 border border-gray-300">URL Thumbnail</th>
        <th class="w-1/12 p-2 border border-gray-300">Author</th>
        <th class="w-1/12 p-2 border border-gray-300">Publisher</th>
        <th class="w-1/12 p-2 border border-gray-300">Publication</th>
        <th class="w-1/12 p-2 border border-gray-300">Price</th>
        <th class="w-1/12 p-2 border border-gray-300">Quantity</th>
        <th class="w-1/12 p-2 border border-gray-300">Category_id</th>
        <th class="w-2/12 p-2 border border-gray-300">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
      <tr class="hover:bg-gray-100">
        <td class="p-2 border border-gray-300">{{$book->id}}</td>
        <td class="p-2 border border-gray-300">{{$book->title}}</td>
        <td class="p-2 border border-gray-300">
          <img src="{{$book->thumbnail}}" alt="">
        </td>
        <td class="p-2 border border-gray-300">{{$book->author}}</td>
        <td class="p-2 border border-gray-300">{{$book->publisher}}</td>
        <td class="p-2 border border-gray-300">{{$book->publication}}</td>
        <td class="p-2 border border-gray-300">{{$book->price}}</td>
        <td class="p-2 border border-gray-300">{{$book->quantity}}</td>
        <td class="p-2 border border-gray-300">{{$book->category_id}}</td>
        <td class="p-2 border border-gray-300">
           <form action="{{route('book.destroy', $book->id)}}" method="post"  >
            @csrf
            @method('DELETE')
            <button class="text-white bg-red-500 py-2 px-4 hover:bg-red-700 rounded-lg" onclick="return confirm('Bạn có muốn xóa không?')">Del</button>
           </form>
            <a href="{{route('book.edit', $book->id)}}" class="text-white bg-yellow-300 py-2 px-4 hover:bg-yellow-500 rounded-lg">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center mt-10">
    <a href="{{ route('book.create') }}" class="text-white bg-blue-500 py-2 px-4 hover:bg-blue-300 rounded-lg">Create New</a>
  </div>
@endsection