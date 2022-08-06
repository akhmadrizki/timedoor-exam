<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Rating;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $shown = $request->shown;
        $search = $request->search;

        if ($request->has('shown') && $request->has('search')) {
            $books = Book::with('category', 'author', 'ratings')
                ->where('book_name', 'LIKE', '%' . $search . '%')
                ->orWhereHas('author', function ($query) use ($search) {
                    $query->where('author_name', 'LIKE', '%' . $search . '%');
                })
                ->withAvg('ratings', 'value')
                ->orderBy('ratings_avg_value', 'DESC')
                ->take($shown)
                ->get();
        } elseif ($request->has('search')) {
            $books = Book::with('category', 'author', 'ratings')
                ->where('book_name', 'LIKE', '%' . $search . '%')
                ->orWhereHas('author', function ($query) use ($search) {
                    $query->where('author_name', 'LIKE', '%' . $search . '%');
                })
                ->withAvg('ratings', 'value')
                ->orderBy('ratings_avg_value', 'DESC')
                ->get();
        } elseif ($request->has('shown')) {
            $books = Book::with('category', 'author', 'ratings')
                ->withAvg('ratings', 'value')
                ->orderBy('ratings_avg_value', 'DESC')
                ->take($shown)
                ->get();
        } else {
            $books = Book::with('category', 'author', 'ratings')
                ->withAvg('ratings', 'value')
                ->take(10)
                ->orderBy('ratings_avg_value', 'DESC')
                ->get();
        }

        return view('pages.index', compact('books'));
    }

    public function famous()
    {
        $authors = Author::with('ratings')
            ->withSum('ratings', 'value')
            ->orderBy('ratings_sum_value', 'DESC')
            ->take(10)
            ->get();

        return view('pages.famous', compact('authors'));
    }

    public function input()
    {
        $authors = Author::all();
        return view('pages.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $field = [
            'value' => $request->rating,
            'book_id' => $request->book,
            'author_id' => $request->author,
        ];

        Rating::create($field);

        return redirect()->route('landing')->with([
            'message' => 'Berhasil memberi rating',
            'status'  => 'success',
        ]);
    }

    public function fetch($id)
    {
        $book = Book::where('author_id', $id)->get();
        return response()->json($book);
    }
}
