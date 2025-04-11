<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanLeave;

class AttendanceController extends Controller
{
    public function index()
    {
        // Simulasi data kehadiran (bisa diganti dengan query dari database)
        $attendanceData = [
            'Hadir' => 20,
            'Sakit' => 3,
            'Izin' => 5,
            'Alpha' => 2,
        ];

        // Ambil data plan leave dengan pagination
        $planLeaves = PlanLeave::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.attendance.index', compact('attendanceData', 'planLeaves'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'employee_name' => 'required',
            'jumlah_cuti' => 'required|integer',
            'dari_tanggal' => 'required|date',
            'sampai_tanggal' => 'required|date|after_or_equal:dari_tanggal',
            'reason' => 'required|string|max:255',
        ]);

        PlanLeave::create($request->all());

        return redirect()->route('attendance')->with('success', 'Plan Leave berhasil diajukan!');
    }

    public function edit($id)
    {
        $planLeave = PlanLeave::findOrFail($id);
        return response()->json($planLeave);
    }

    public function update(Request $request, $id)
    {
    $leave = PlanLeave::findOrFail($id);
    $leave->update([
        'nik' => $request->nik,
        'employee_name' => $request->employee_name,
        'jumlah_cuti' => $request->jumlah_cuti,
        'dari_tanggal' => $request->dari_tanggal,
        'sampai_tanggal' => $request->sampai_tanggal,
        'reason' => $request->reason
    ]);

    return response()->json(['message' => 'Data berhasil diperbarui']);
    }

    public function destroy($id)
    {
        $planLeave = PlanLeave::findOrFail($id);
        $planLeave->delete();

        return redirect()->route('attendance')->with('success', 'Plan Leave berhasil dihapus!');
    }
}