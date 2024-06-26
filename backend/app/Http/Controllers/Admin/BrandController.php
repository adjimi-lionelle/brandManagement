<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $brands = brand::all()->sortByDesc('rating')->paginate(15);
        $brands = Brand::orderByDesc('rating')->paginate(15);
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(BrandFormRequest $request)
    {
        $validated = $request->validated();
        //dd($validated);

        if ($request->hasFile('brand_image')) {
            $path = $request->file('brand_image')->store('brands', 'public');
            $validated['brand_image'] = $path;
        }

        Brand::create($validated);
            return redirect()->route('admin.brand.index')->with('success', 'Brand created successfully');
       
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandFormRequest $request, Brand $brand)
    {
        $validated = $request->validated();

        if ($request->hasFile('brand_image')) {
            if ($brand->brand_image) {
                Storage::disk('public')->delete($brand->brand_image);
            }
            $path = $request->file('brand_image')->store('brands', 'public');
            $validated['brand_image'] = $path;
        }

        $brand->update($validated);

        return redirect()->route('admin.brand.index')->with('success', 'Brand updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if ($brand->brand_image) {
           
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }

        }

        $brand->delete();

        return redirect()->route('admin.brand.index')->with('success', 'Brand deleted successfully');
    }
}
