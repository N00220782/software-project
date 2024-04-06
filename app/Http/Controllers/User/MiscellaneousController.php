<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Miscellaneous;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Auth;

class MiscellaneousController extends Controller
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
            return to_route('admin.miscellaneouses.index');
        }
        $miscellaneouses = Miscellaneous::paginate(10);
        return view('user.miscellaneouses.index')->with('miscellaneouses', $miscellaneouses);
    }

    public function like(string $id)
    {

            $user = Auth::user()->id;
            $miscellaneous = Miscellaneous::findOrFail($id)->id;
    
            $item = Wishlist::create([
                'user_id' => $user,
                'miscellaneous_id' => $miscellaneous
            ]);

            return to_route('user.miscellaneouses.index')->with('status', 'Item added to wishlist :)');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $miscellaneous = Miscellaneous::findOrFail($id);

        return view('user.miscellaneouses.show', [
            'miscellaneous' => $miscellaneous 
        ]);
    }

}