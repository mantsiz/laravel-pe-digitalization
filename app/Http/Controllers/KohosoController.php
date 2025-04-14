<?php

namespace App\Http\Controllers;

use App\Models\Kohoso;
use Illuminate\Http\Request;

class KohosoController extends Controller
{
    public function index(Request $request)
    {
        $query = Kohoso::query();
        
        if ($request->start_year && $request->end_year) {
            $query->whereBetween('year', [$request->start_year, $request->end_year]);
        }

        $kohosoProjects = $query->get();
        
        return view('pages.documents.kohoso', compact('kohosoProjects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'project_name' => 'required|string',
            'line' => 'required|string',
            'part' => 'required|string',
        ]);

        Kohoso::create($validated);

        return response()->json(['message' => 'Project created successfully']);
    }

    public function edit(Kohoso $kohoso)
    {
        return response()->json($kohoso);
    }

    public function update(Request $request, Kohoso $kohoso)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'project_name' => 'required|string',
            'line' => 'required|string',
            'part' => 'required|string',
        ]);

        $kohoso->update($validated);

        return response()->json(['message' => 'Project updated successfully']);
    }

    public function destroy(Kohoso $kohoso)
    {
        $kohoso->delete();
        return response()->json(['message' => 'Project deleted successfully']);
    }
}