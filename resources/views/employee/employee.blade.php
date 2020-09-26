@extends('layouts.adminLayout.admin_design')

@section('content')
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Employee</a> </div>
    <h1>Employee</h1>
      
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Employee Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table" id="myTable">
              <thead>
                <tr>
                  <th>Employee Id</th>
                  <th>Employee Name</th>
                  <th>Employee Age</th>
                  <th>Employee Mobile</th>
                  <th>Employee Email</th>
                  <th>Employee Salary</th>
                  <th>Employee Department</th>
                  <th>Employee Designation</th>
                  @if(!Auth::user()->admin==0)
                  <th>Status</th>
                  
                   @endif
                </tr>
              </thead>
              <tbody>
                    @foreach($employee as $emp)
                    @foreach($emp->employeeofiicial as $employee)

                    @if($emp->status=="1")
                <tr class="gradeU">
                  <td>{{$emp->emp_id}}</td>
                  <td>{{$employee->emp_name}}</td>
                  <td>{{$employee->emp_age}}</td>
                  <td>{{$employee->emp_mobile}}</td>
                  <td>{{$employee->emp_email}}</td>
                  <td>{{$emp->emp_salary}}</td>
                  <td>{{$emp->emp_department}}</td>
                  <td>
                   {{$emp->emp_designation}}
                  </td>
                  @else 
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  @endif

                  @if(!Auth::user()->admin==0)
                  <td>
                      @if($emp->status==1)
                 <a href="{{url('employee/changestatus/'.$emp->id)}}" class="btn btn-success">Enable</a>
                 @else
                <a href="{{url('employee/changestatus/'.$emp->id)}}" class="btn btn-warning">Disable</a>
                 @endif
                 @endif
                  </td>
            
                </tr>   
           @endforeach
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection