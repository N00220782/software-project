<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Clothes;
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
        if(!Auth::user()->hasRole('admin')){
            return to_route('user.clothes.index');
        }
        $clothes = Clothes::paginate(10);
        return view('admin.clothes.index')->with('clothes', $clothes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Auth::user()->authoriseRoles('admin');
        return view('admin.clothes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate([
                'name' => 'required|string|min:2|max:150',
                'price' => 'required',
                'original_website' => 'required',
                'description' => 'required',
                'size' => 'required',
                'brand' => 'required|string|min:5|max:1000',
                'color' => 'required|in:Black,Grey,White,Brown,Tan,Cream,Yellow,Red,Burgundy,Orange,Pink,Purple,Blue,Navy,Green,Khaki,Silver,Gold,Multi',
                'condition' =>'required|in:Brand New,Excellent,Good,Fair',
                'image' => 'file|image'
            ]);

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = date('Y-m-d-His') . '.' . $extension;

            $image->storeAs('public/images', $filename);
    
            $cloth = Clothes::create([
                'name' => $request->name,
                'price' => $request->price,
                'original_website' => $request->original_website,
                'description' => $request->description,
                'size' => $request->size,
                'brand' => $request->brand,
                'color' => $request->color,
                'condition' => $request->condition,
                'image' => $filename
            ]);

            return to_route('admin.clothes.index')->with('status', 'Clothing item created successfully :)');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cloth = Clothes::findOrFail($id);

        return view('admin.clothes.show', [
            'cloth' => $cloth 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cloth = Clothes::findOrFail($id);
        return view('admin.clothes.edit', [
            'cloth' => $cloth 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:150',
            'price' => 'required',
            'original_website' => 'required',
            'description' => 'required',
            'size' => 'required',
            'brand' => 'required|string|min:5|max:1000',
            'color' => 'required|in:Black,Grey,White,Brown,Tan,Cream,Yellow,Red,Burgundy,Orange,Pink,Purple,Blue,Navy,Green,Khaki,Silver,Gold,Multi',
            'condition' =>'required|in:Brand New,Excellent,Good,Fair',
            'image' => 'file|image'
        ]);

        $cloth = Clothes::findOrFail($id);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '.' . $extension;

        $image->storeAs('public/images', $filename);

        $cloth = Clothes::where('id',$id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'original_website' => $request->original_website,
            'description' => $request->description,
            'size' => $request->size,
            'brand' => $request->brand,
            'color' => $request->color,
            'condition' => $request->condition,
            'image' => $filename
        ]);

        return to_route('admin.clothes.index')->with('status', 'Selected clothing item updated successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clothes = Clothes::findOrFail($id);
        $clothes->delete();

        return redirect()->route('admin.clothes.index')->with('status', 'Selected clothing item deleted successfully :)');
    }
}