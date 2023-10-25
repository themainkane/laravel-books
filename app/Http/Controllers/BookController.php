<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function details($book_id)
    {
        $book = Book::findOrFail($book_id);

        return view("details.details", compact("book"));
    }
}
