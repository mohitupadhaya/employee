@extends('layouts.adminLayout.admin_design')

@section('content')
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html"> Admin</a></h1>
</div>
<!--close-Header-part--> 

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Users</a> </div>
    <h1>Users</h1>
      
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Users Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table" id="myTable">
              <thead>
                <tr>
                  <th>User Id</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>User Mobile</th>
                  <th>User loginDateTime</th>
                  <th>User LogoutDateTime</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                    @foreach($user as $users)
                  
                <tr class="gradeU">
                  <td>{{$users->id}}</td>
                  <td>{{$users->username}}</td>
                  <td>{{$users->email}}</td>
                  <td>{{$users->mobile}}</td>
                  <td>{{$users->login_date_time}}</td>
                  <td>{{$users->logout_date_time}}</td>
                  <td>
                 @if($users->status==1)
                 <a href="{{url('user/changestatus/'.$users->id)}}" class="btn btn-success">Enable</a>
                 @else
                <a href="{{url('user/changestatus/'.$users->id)}}" class="btn btn-warning">Disable</a>
                 @endif
              <td class="center"> <a href="#" class="btn btn-primary btn-mini" >Edit</a> 
                </tr>   
         
            @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('#btn').click(function(){
      alert('hello');
    })

  });

</script>
@endsection