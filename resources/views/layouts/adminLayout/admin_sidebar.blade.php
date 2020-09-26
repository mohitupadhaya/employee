<?php $url=url()->current();
// use App\Http\Controllers\Controller;
// $user=Controller::users();

?>
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li <?php if (preg_match("/dashboard/i",$url)){?> class="active" <?php }?>><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    
    @if(Auth::user()->admin)
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Employee</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/category/i",$url)){?> style="display:block;" class="active" <?php }?>>
        
        <li <?php if (preg_match("/view-category/i",$url)){?> class="active" <?php }?>><a href="{{url('/admin/employee')}}">Employee Detail</a></li>
      </ul>
    </li>
  <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>User</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/product/i",$url)){?> style="display:block;" class="active" <?php }?>>
        
        <li<?php if (preg_match("/view-product/i",$url)){?> class="active" <?php }?>><a href="{{url('/admin/user')}}">User Detail</a></li>
      </ul>
    </li> 
    @else
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Employee</span> <span class="label label-important">1</span></a>
      <ul <?php if (preg_match("/category/i",$url)){?> style="display:block;" class="active" <?php }?>>
        
        <li <?php if (preg_match("/view-category/i",$url)){?> class="active" <?php }?>><a href="{{url('/admin/employee')}}">Employee Detail</a></li>
      </ul>
    </li>
@endif
  </ul>
</div>
<!--sidebar-menu