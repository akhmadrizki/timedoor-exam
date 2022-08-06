<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $books = Book::with('category', 'author', 'ratings')
            ->take(10)
            ->get();
        // return $books;

        return view('pages.index', compact('books'));
    }
}
