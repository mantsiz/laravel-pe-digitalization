<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'project_id',
        'part_name',
        'part_type'
    ];
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}