<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImprovementActivity;

class ProductionResin3Controller extends Controller
{
    public function index()
    {
        // Ambil data improvement activity dengan pagination
        $improvementActivities = ImprovementActivity::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.productioncontrol.indexresin3', compact('improvementActivities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pengajuan' => 'required|date',
            'nik' => 'required',
            'nama_karyawan' => 'required',
            'jumlah' => 'required|integer',
            'dari_tanggal' => 'required|date',
            'sampai_tanggal' => 'required|date|after_or_equal:dari_tanggal',
            'reason' => 'required|string|max:255',
        ]);

        ImprovementActivity::create($request->only([
            'tanggal_pengajuan', 'nik', 'nama_karyawan', 'jumlah', 
            'dari_tanggal', 'sampai_tanggal', 'reason'
        ]));

        return redirect()->route('productionresin3')->with('success', 'Improvement Activity berhasil diajukan!');
    }

    public function edit($id)
    {
        $improvementActivity = ImprovementActivity::findOrFail($id);
        return response()->json($improvementActivity);
    }

    public function update(Request $request, $id)
    {
        $activity = ImprovementActivity::findOrFail($id);
        $activity->update([
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'nik' => $request->nik,
            'nama_karyawan' => $request->nama_karyawan,
            'jumlah' => $request->jumlah,
            'dari_tanggal' => $request->dari_tanggal,
            'sampai_tanggal' => $request->sampai_tanggal,
            'reason' => $request->reason
        ]);

        return response()->json(['message' => 'Data berhasil diperbarui']);
    }

    public function destroy($id)
    {
        $improvementActivity = ImprovementActivity::findOrFail($id);
        $improvementActivity->delete();

        return response()->json(['message' => 'Improvement Activity berhasil dihapus!']);
    }
}