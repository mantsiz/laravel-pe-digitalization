<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterSchedule extends Model
{
    protected $fillable = [
        'project_id',
        'schedule_name',
        'start_date',
        'end_date'
    ];
    
    protected $dates = ['start_date', 'end_date'];
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}