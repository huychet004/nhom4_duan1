<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // Danh sach sach
    public function index()
    {
        $books = DB::table('books')
        ->join('categories', 'category_id', '=', 'categories.id')
        ->select('books.*', 'name')
        ->orderByDesc('id')
        ->get();
        return view('admin.index', compact('books'));
    } 
    //Form create
    public function create(){
        $categories = DB::table('categories')
        ->get();
        return view('admin.create', compact('categories'));
    }
    //Lưu dữ liệu của form create
    public function store(Request $request){
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        //$request->except('_token');
        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }
    //Xóa
    public function destroy($id){
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }
    //Hiển thị form edit
    public function edit($id){
        $book = DB::table('books')->where('id', $id)
        ->first();
        $categories = DB::table('categories')
        ->get();
          return view('admin.edit', compact('book', 'categories'));
    }
    //Cap nhat
    public function update(Request $request){
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],
        ];
        DB::table('books')->where('id', $request['id'])->update($data);
        return redirect()->route('book.index');
    }
}
