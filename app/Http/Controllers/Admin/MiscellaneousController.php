<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Miscellaneous;
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
        if(!Auth::user()->hasRole('admin')){
            return to_route('user.miscellaneouses.index');
        }
        $miscellaneouses = Miscellaneous::paginate(10);
        return view('admin.miscellaneouses.index')->with('miscellaneouses', $miscellaneouses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Auth::user()->authoriseRoles('admin');
        return view('admin.miscellaneouses.create');
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
                'condition' =>'required|in:Brand New,Excellent,Good,Fair',
                'image' => 'file|image'
            ]);

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = date('Y-m-d-His') . '.' . $extension;

            $image->storeAs('public/images', $filename);
    
            $miscellaneous = Miscellaneous::create([
                'name' => $request->name,
                'price' => $request->price,
                'original_website' => $request->original_website,
                'description' => $request->description,
                'condition' => $request->condition,
                'image' => $filename
            ]);

            return to_route('admin.miscellaneouses.index')->with('status', 'Item created successfully :)');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $miscellaneous = Miscellaneous::findOrFail($id);

        return view('admin.miscellaneouses.show', [
            'miscellaneous' => $miscellaneous 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $miscellaneous = Miscellaneous::findOrFail($id);
        return view('admin.miscellaneouses.edit', [
            'miscellaneous' => $miscellaneous 
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
                'condition' =>'required|in:Brand New,Excellent,Good,Fair',
                'image' => 'file|image'
        ]);

        $miscellaneous = Miscellaneous::findOrFail($id);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '.' . $extension;

        $image->storeAs('public/images', $filename);

        $miscellaneous = Miscellaneous::where('id',$id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'original_website' => $request->original_website,
            'description' => $request->description,
            'condition' => $request->condition,
            'image' => $filename
        ]);

        return to_route('admin.miscellaneouses.index')->with('status', 'Item updated successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $miscellaneous = Miscellaneous::findOrFail($id);
        $miscellaneous->delete();

        return redirect()->route('admin.miscellaneouses.index')->with('status', 'Item deleted successfully :)');
    }
}