<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\Miscellaneous;
use App\Models\Clothes;
use App\Models\Book;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
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
            return to_route('admin.wishlist.index');
        }
        $items = Wishlist::paginate(4);
        return view('user.wishlist.index')->with('items', $items);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Wishlist::findOrFail($id);
        $item->delete();

        return redirect()->route('user.wishlist.index')->with('status', 'Selected item removed from wishlist :)');
    }
}