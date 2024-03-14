<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
    public function __construct(){
        //Auth::user()->authoriseRoles('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Auth::user()->authoriseRoles('admin');
        if(Auth::user()->hasRole('admin')){
            return to_route('admin.books.index');
        }
        $books = Book::paginate(10);
        return view('user.books.index')->with('books', $books);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);

        return view('user.books.show', [
            'book' => $book 
        ]);
    }
}