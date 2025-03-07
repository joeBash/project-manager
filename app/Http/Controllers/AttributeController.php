<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributeResource;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validatedRequest = $request->validate([
            'per_page' => 'integer|min:1|max:20',
        ]);

        $paginatedAttributes = Attribute::latest()->paginate($validatedRequest['per_page'] ?? 5);

        return Inertia::render('Attributes/Index', [
            'attributes' => AttributeResource::collection($paginatedAttributes),
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attribute $attribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attribute)
    {
        //
    }
}
