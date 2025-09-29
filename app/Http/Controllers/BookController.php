<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'  => 'required|string|max:150',
            'author' => 'required|string|max:100',
            'year'   => 'nullable|integer|max:' . date('Y'),
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    public function show($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }
        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title'  => 'sometimes|required|string|max:150',
            'author' => 'sometimes|required|string|max:100',
            'year'   => 'nullable|integer|max:' . date('Y'),
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $book->update($request->all());
        return response()->json($book);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Buku tidak ditemukan'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Buku dihapus']);
    }
}
