<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded=[];
    public function process(){
        return $this->hasMany(Process::class);
    }
    public function repairMaintenance(){
        return $this->hasMany(RepairMaintenance::class);
    }
}
