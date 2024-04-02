<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Products::all();
        return view ('admin.products.index',['products'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('admin.products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            // Validate input data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            ]);
        
            // Move the image file to the desired location
            $file = $request->image;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('product/images/'), $fileName);
        
            // Update the image file name in the data array
            $data = $request->all();
            $data['image'] = $fileName;
        
            // Create the product using the updated data
            Products::create($data);
        
            // Redirect to the product list page
            return redirect('/admin/products');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Products::findorfail($id);
        return view ('admin.products.show',['products'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Products::findorfail($id);
        $data -> delete();
        return redirect('/admin/products');
    }
}
