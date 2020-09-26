<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeDetails;
use App\EmployeeOfficialDetails; 
use Session;
class EmployeeController extends Controller
{
   public function getEmployeeDetails(){
   	  if(session::has('adminSession')){
        $employee=EmployeeOfficialDetails::with('employeeofiicial')->get();
         return view('employee.employee')->with(compact('employee'));
          }else{
        return redirect('/login')->with('flash_message_error','please login to access');
      }
   }

   public function changestatus($id){
      $employee=EmployeeOfficialDetails::find($id);
       $employee->status=!$employee->status;
       if($employee->save()){
        return redirect('admin/employee');
       }else{
        return redirect('/employee/changestatus');
       }
   }
}
