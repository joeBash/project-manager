<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttributeValueResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validatedRequest = $request->validate([
            'per_page' => 'integer|min:1|max:50',
            'filters' => 'array',
        ]);

        $filters = $validatedRequest['filters'] ?? [];
        $projects = Project::with('attributeValues');

        foreach ($filters as $key => $value) {
            if (in_array($key, ['name', 'status'])) {
                $projects->where($key, $value);
            } else {
                $projects->whereHas('attributeValues.attribute', function ($query) use ($key, $value) {
                    $query->where('attributes.name', $key)
                        ->whereLike('attribute_values.value', '%' . $value . '%');
                });
            }
        }

        $paginatedProjects = $projects->latest()
            ->paginate($validatedRequest['per_page'] ?? 5);

        $paginatedAttributeValues = $paginatedProjects->pluck('attributeValues')->flatten()->unique('id');

        return Inertia::render('Projects/Index', [
            'projects' => ProjectResource::collection($paginatedProjects),
            'attributeValues' => AttributeValueResource::collection($paginatedAttributeValues),
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
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
