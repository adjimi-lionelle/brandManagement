<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $brands = Brand::all()->sortByDesc('rating')->take(10);
        $tab = [];
        $i = 0;

        foreach($brands as $brand){
            $tab[$i]['brand_id'] = $brand->brand_id;
            $tab[$i]['brand_name'] = $brand->brand_name; 
            $tab[$i]['brand_image'] = url(Storage::url($brand->brand_image));
            $tab[$i]['rating'] = $brand->rating;
            $i++;
        }
        return response()->json($tab, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = Brand::create($request->all());
        return response()->json([
            'message' => 'brand successfully create',
            'brand' => $brand], 
            201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $brand = Brand::findOrFail($id);
            return response()->json([
                'message' => 'brand\'s infos',
                'brand' => $brand,
            ],
            201);
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Brand not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return response()->json([
            'message' => 'brand successfullyy update',
            'brand' => $brand], 
        200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        if(!$brand){
            return response()->json([
                'message' => 'brand doesn\'t exist'],
            400);
        }

        Brand::destroy($id);
        return response()->json([
            'message' => "brand successfully delete"
        ], 204);

    }
}
