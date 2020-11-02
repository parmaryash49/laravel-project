<!--Header-part-->
<div id="header">
    <a href="{{ url('/admin/dashboard') }}"><img src="{{ asset('images/backend_images/logo/adminlogo.png')}}" alt="Logo" style="height: 67px;width: 14.5%; padding:5px 5px 0px 0px;" /></a>
  </div>
  <!--close-Header-part--> 
  
  
  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li class=""><a title="" href="{{ url('/admin/settings') }}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
      <li class=""><a title="" href="{{ url('/logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
  </div>
  <!--close-top-Header-menu-->