<?php

namespace App\Http\Controllers\Admin;
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
        if(!Auth::user()->hasRole('admin')){
            return to_route('user.books.index');
        }
        $books = Book::paginate(10);
        return view('admin.books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Auth::user()->authoriseRoles('admin');
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate([
                'name' => 'required|string|min:2|max:150',
                'author' => 'required',
                'price' => 'required',
                'original_website' => 'required',
                'description' => 'required',
                'rating' => 'required',
                'cover' => 'required|in:Hardback,Paperback,',
                'condition' =>'required|in:Brand New,Excellent,Good,Fair',
                'image' => 'file|image'
            ]);

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = date('Y-m-d-His') . '.' . $extension;

            $image->storeAs('public/images', $filename);
    
            $book = Book::create([
                'name' => $request->name,
                'author' => $request->author,
                'price' => $request->price,
                'original_website' => $request->original_website,
                'description' => $request->description,
                'rating' => $request->rating,
                'cover' => $request->cover,
                'condition' => $request->condition,
                'image' => $filename
            ]);

            return to_route('admin.books.index')->with('status', 'Book created successfully :)');
        
    }

    public function like(string $id)
    {

            $user = Auth::user()->id;
            $book = Book::findOrFail($id)->id;
    
            $item = Wishlist::create([
                'user_id' => $user,
                'book_id' => $book
            ]);

            return to_route('admin.books.index')->with('status', 'Item added to wishlist :)');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);

        return view('admin.books.show', [
            'book' => $book 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('admin.books.edit', [
            'book' => $book 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:150',
            'author' => 'required',
            'price' => 'required',
            'original_website' => 'required',
            'description' => 'required',
            'rating' => 'required',
            'cover' => 'required|in:Hardback,Paperback,',
            'condition' =>'required|in:Brand New,Excellent,Good,Fair',
            'image' => 'file|image'
        ]);

        $book = Book::findOrFail($id);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '.' . $extension;

        $image->storeAs('public/images', $filename);

        $book = Book::where('id',$id)->update([
            'name' => $request->name,
            'author' => $request->author,
            'price' => $request->price,
            'original_website' => $request->original_website,
            'description' => $request->description,
            'rating' => $request->rating,
            'cover' => $request->cover,
            'condition' => $request->condition,
            'image' => $filename
        ]);

        return to_route('admin.books.index')->with('status', 'Selected book updated successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.books.index')->with('status', 'Selected book deleted successfully :)');
    }
}