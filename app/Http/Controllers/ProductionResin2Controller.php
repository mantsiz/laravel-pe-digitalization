<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Abnormality;

class ProductionResin2Controller extends Controller
{
    /**
     * Menampilkan halaman utama
     */
    public function index()
    {
        $machinesF2 = Machine::where('factory', 'F2')->get();
        $machinesF3 = Machine::where('factory', 'F3')->get();
        $machinesF4 = Machine::where('factory', 'F4')->get();
        $machinesPlant2Krw = Machine::where('factory', 'Plant-2 Krw')->get();

        $abnormalities = Abnormality::all();

        return view('pages.productioncontrol.indexresin2', compact(
            'machinesF2', 'machinesF3', 'machinesF4', 'machinesPlant2Krw', 'abnormalities'
        ));
    }

    /**
     * Menyimpan data abnormalitas
     */
    public function storeAbnormality(Request $request)
    {
        $request->validate([
            'mc_no' => 'required|string',
            'part_name' => 'required|string',
            'abnormal' => 'required|string',
            'factory' => 'required|string'
        ]);

        Abnormality::create($request->all());

        return redirect()->route('productionresin2.index')->with('success', 'Abnormalitas berhasil ditambahkan');
    }
}