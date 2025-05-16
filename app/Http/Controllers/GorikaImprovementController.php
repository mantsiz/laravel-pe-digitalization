<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GorikaImprovement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GorikaImprovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $improvements = GorikaImprovement::all();
        return view('pages.gorikaactivity.gorikaimprovement', compact('improvements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gorikaactivity.createimprovement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'rank' => 'required|string|max:50',
            'field_division' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'gm' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'pic' => 'required|string|max:255',
            'detail_activity' => 'required|string',
            'month' => 'required|string|max:20',
            'monthly' => 'required|numeric',
            'effect_period' => 'required|string|max:50',
            'yearly' => 'required|numeric',
            'category_pl_impact' => 'required|string|max:255',
            'c' => 'nullable|string|max:255',
            'continue_current_model' => 'nullable|boolean',
            'continue_new_model' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        GorikaImprovement::create($request->all());

        return redirect()->route('gorika-improvement.index')
            ->with('success', 'Data Gorika Improvement berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $improvement = GorikaImprovement::findOrFail($id);
        return view('gorika-improvement.show', compact('improvement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $improvement = GorikaImprovement::findOrFail($id);
        return view('pages.gorikaactivity.editimprovement', compact('improvement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'rank' => 'required|string|max:50',
            'field_division' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'gm' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'pic' => 'required|string|max:255',
            'detail_activity' => 'required|string',
            'month' => 'required|string|max:20',
            'monthly' => 'required|numeric',
            'effect_period' => 'required|string|max:50',
            'yearly' => 'required|numeric',
            'category_pl_impact' => 'required|string|max:255',
            'c' => 'nullable|string|max:255',
            'continue_current_model' => 'nullable|boolean',
            'continue_new_model' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $improvement = GorikaImprovement::findOrFail($id);
        $improvement->update($request->all());

        return redirect()->route('gorika-improvement.index')
            ->with('success', 'Data Gorika Improvement berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $improvement = GorikaImprovement::findOrFail($id);
        $improvement->delete();

        return redirect()->route('gorika-improvement.index')
            ->with('success', 'Data Gorika Improvement berhasil dihapus.');
    }
}