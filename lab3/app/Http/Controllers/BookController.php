<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->select('books.*', 'name')
            ->orderByDesc('id')
            ->get();
        return view('books.index', compact('books'));
    }

    // Hiển thị form create
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('books.create', compact('categories'));
    }

    // lưu dữ liệu của form create
    public function store(Request $request)
    {
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
        DB::table('books')->insert($data);
        return redirect()->route('book.index');
    }

    // Xoá Sách
    public function destroy($id)
    {
        DB::table('books')->delete($id);
        return redirect()->route('book.index');
    }

    // hiển thị form edit 
    public function edit($id){
        $book = DB::table('books')
            ->where('id', $id)
            ->first();

        $categories = DB::table('categories')->get();
        return view('books.edit', compact('book', 'categories'));

    }

    // Cập nhập dữ liệu lên databases
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
