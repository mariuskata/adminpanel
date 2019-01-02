@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('admin/dashboard')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">

<!--Chart-box-->
    <div class="row-fluid">

      @foreach($productsDash as $productDash)
        <div class="span3">
        <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>{{ $productDash->product_name }}</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
              <ul class="site-stats">
                <li class="bg_lh">
                    <i class="icon-cloud"></i>
                    <strong>0</strong>
                    <small>°C</small>
                    <p>{{ $productDash->description }}</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
      @endforeach

    </div>
<!--End-Chart-box-->
    <hr/>
  </div>
</div>
<!--end-main-container-part-->

@endsection