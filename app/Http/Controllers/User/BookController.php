<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Wishlist;
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

    public function like(string $id)
    {

            $user = Auth::user()->id;
            $book = Book::findOrFail($id)->id;
    
            $item = Wishlist::create([
                'user_id' => $user,
                'book_id' => $book
            ]);

            return to_route('user.books.index')->with('status', 'Item added to wishlist :)');
        
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