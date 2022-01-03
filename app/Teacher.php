<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table= "teachers";
    public $fillable = ['fName','lName','phone','branchId','course_id','image'];


}
