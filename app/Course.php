<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table= "courses";
    public $fillabel = array('coursName','branchId');
    public function Branch()
    {
        return $this->belongsTo('App\Branch','branchId');
    }
}
