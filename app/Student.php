<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= "students";
    public $fillable = ['fName','lName','phone','email','teacherId','branchId','course_id','image'];
    public function teacher()
    {
        return $this->belongsTo('App\Teacher','teacherId');
    }
}
