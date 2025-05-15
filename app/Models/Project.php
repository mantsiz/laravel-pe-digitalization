<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['nama_project'];
    
    public function masterSchedules()
    {
        return $this->hasMany(MasterSchedule::class);
    }
    
    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}