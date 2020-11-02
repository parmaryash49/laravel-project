@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
      </div>
    <!--End-breadcrumbs-->
    
    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb span3" style="height: 90px"> <a href="{{url('/admin/view-orders')}}"> <i class="icon-pencil"></i> <span class="label label-important"></span> Orders </a> </li>
            <li class="bg_lg span3"  style="height: 90px"> <a href="{{url('/admin/view-sales')}}"> <i class="icon-signal"></i><span class="label label-important"></span>Sales Orders</a> </li>
            <li class="bg_ly span3"  style="height: 90px"> <a href="{{url('/admin/view-sales-return')}}"> <i class="icon-inbox"></i><span class="label label-success"></span> Sales Return Orders </a> </li>
          </ul>
        </div>
    <!--End-Action boxes-->    
      </div>
    </div>
    
    <!--end-main-container-part-->

@endsection

