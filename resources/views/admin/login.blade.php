<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Mohit Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-login.css')}}" />
        <link href="{{asset('fonts/backend_font/css/font-awesome.css" rel="stylesheet')}}" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">
        @if(Session::has('flash_message_error'))    
         
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!! session('flash_message_error')!!}</strong>
        </div>
        @endif  
          @if(Session::has('flash_message_success'))    
         
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!! session('flash_message_success')!!}</strong>
        </div>
        @endif        
            <form id="loginform" class="form-vertical" action="{{url('/login')}}" method="post">
                {{csrf_field()}}
				<h2 style="color: white;text-align: center;">Admin</h2>
            
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" placeholder="Username" name="email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Signup</a></span>
                    <span class="pull-right"><button type="submit" class="btn btn-success" /> Login</button></span>
                </div>
            </form>
            <form id="recoverform" action="{{url('/register')}}" class="form-vertical" method="post">
                {{csrf_field()}}
				<p class="normal_text">Please Register Here</p>
				 @if(Session::has('flash_message_success'))    
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!! session('flash_message_success')!!}</strong>
        </div>
        @endif        
         @if(Session::has('flash_message_error'))    
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!! session('flash_message_error')!!}</strong>
        </div>
        @endif        
                     <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" name="username" placeholder="Username" />
                        </div>
                    </div>
                </div>
                     <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                         <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" name="email" placeholder="Email" />
                        </div>
                    </div>
                </div>
                     <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" name="mobile" placeholder="Mobile" />
                        </div>
                    </div>
                </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                      <span class="pull-right"><button type="submit" class="btn btn-success" />Submit</button></span>
                </div>
            </form>
        </div>
        
        <script src="{{asset('js/backend_js/jquery.min.js')}}"></script>  
        <script src="{{asset('js/backend_js/matrix.login.js')}}"></script> 
    </body>

</html>
