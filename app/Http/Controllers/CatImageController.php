<?php

namespace App\Http\Controllers;

use App\Models\CatImage;
use App\Http\Requests\StoreCatImageRequest;
use App\Http\Requests\UpdateCatImageRequest;
use Illuminate\Http\Request;


class CatImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tag = $request->query('tag');
        $query = CatImage::query();
    
        // Si hi ha un filtre per tag, aplica'l
        if ($tag) {
            $query->whereJsonContains('tags', $tag);
        }
    
        // Paginació de 9 elements
        $catImages = $query->paginate(6);
    
        // Passa la variable $tag a la vista
        return view('cat_images.index', compact('catImages', 'tag'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CatImage $catImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatImage $catImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatImageRequest $request, CatImage $catImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatImage $catImage)
    {
        //
    }
}
