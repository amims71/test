<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];

    public function customerDepartment()
    {
        return $this->hasOne(CustomerDepartment::class);
    }
}
