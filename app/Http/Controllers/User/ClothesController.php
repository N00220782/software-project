<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Clothes;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Auth;

class ClothesController extends Controller
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
            return to_route('admin.clothes.index');
        }
        $clothes = Clothes::paginate(10);
        return view('user.clothes.index')->with('clothes', $clothes);
    }

    public function like(string $id)
    {

            $user = Auth::user()->id;
            $cloth = Clothes::findOrFail($id)->id;
    
            $item = Wishlist::create([
                'user_id' => $user,
                'clothes_id' => $cloth
            ]);

            return to_route('user.clothes.index')->with('status', 'Item added to wishlist :)');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cloth = Clothes::findOrFail($id);

        return view('user.clothes.show', [
            'cloth' => $cloth 
        ]);
    }

}