<?php

namespace App\Http\Controllers\Admin;
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
        if(!Auth::user()->hasRole('admin')){
            return to_route('user.wishlist.index');
        }
        $items = Wishlist::paginate(10);
        return view('admin.wishlist.index')->with('items', $items);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Wishlist::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.wishlist.index')->with('status', 'Selected item removed from wishlist :)');
    }
}