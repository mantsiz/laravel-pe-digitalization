<?php

namespace App\Http\Controllers;

use App\Models\Gorika;
use Illuminate\Http\Request;

class GorikaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gorikaDetails = Gorika::all();
        return view('pages.gorikaactivity.gorikadetail', compact('gorikaDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gorikaactivity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'departemen' => 'required|string|max:255',
            'total_activity' => 'required|integer',
            'implementasi' => 'required|string|max:255',
        ]);

        Gorika::create($validated);

        return redirect()->route('gorika.index')
            ->with('success', 'Data Gorika berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gorika  $gorika
     * @return \Illuminate\Http\Response
     */
    public function show(Gorika $gorika)
    {
        return view('pages.gorikaactivity.show', compact('gorika'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gorika  $gorika
     * @return \Illuminate\Http\Response
     */
    public function edit(Gorika $gorika)
    {
        return view('pages.gorikaactivity.edit', compact('gorika'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gorika  $gorika
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gorika $gorika)
    {
        $validated = $request->validate([
            'departemen' => 'required|string|max:255',
            'total_activity' => 'required|integer',
            'implementasi' => 'required|string|max:255',
        ]);

        $gorika->update($validated);

        return redirect()->route('gorika.index')
            ->with('success', 'Data Gorika berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gorika  $gorika
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gorika $gorika)
    {
        $gorika->delete();

        return redirect()->route('gorika.index')
            ->with('success', 'Data Gorika berhasil dihapus.');
    }
}