<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeOfficialDetails extends Model
{
   public $table = "emp_official_details";

    public function employeeofiicial(){
    	return $this->hasMany('App\EmployeeDetails','emp_id');
    }
}
