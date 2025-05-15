<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\MasterSchedule;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['masterSchedules', 'parts'])->get();
        $partTypes = [
            'FR BUMPER [D-STD]',
            'FR BUMPER [T-HI]',
            // ... daftar part lainnya
        ];
        
        return view('pages.projectpreparation.addproject', compact('projects', 'partTypes'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            // Create Project
            $project = Project::create([
                'nama_project' => $request->nama_project
            ]);

            // Create Master Schedules
            $scheduleItems = [
                'Loading Capacity' => [
                    'start' => $request->loading_capacity_start,
                    'end' => $request->loading_capacity_end
                ],
                // ... tambahkan semua schedule items
            ];

            foreach ($scheduleItems as $name => $dates) {
                MasterSchedule::create([
                    'project_id' => $project->id,
                    'schedule_name' => $name,
                    'start_date' => $dates['start'],
                    'end_date' => $dates['end']
                ]);
            }

            // Create Parts
            if ($request->has('parts')) {
                foreach ($request->parts as $partType) {
                    Part::create([
                        'project_id' => $project->id,
                        'part_type' => $partType
                    ]);
                }
            }

            DB::commit();
            return redirect()->back()->with('success', 'Project berhasil ditambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}