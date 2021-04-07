@extends('backend.master')
@section('title',"Setting")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Paypal</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form>
               <div class="row">
                  <div class="col-lg-6">
                     <h4> Client Id</h4>
                     <input type="number" class="form-control" placeholder="AfWTvJxuQ8x_WfDiSZXjpbzxOJnib576Sfrk1dLsDh1bGMld1A2-C25L6jwfJIdLqQre0nTwha0fVfqe ">
                  </div>
                  <div class="col-lg-6">
                     <h4> Secret Key</h4>
                     <input type="text" class="form-control" placeholder=" EMc0mjMvYW-2Dn_MB0lGG1FZDIItoCOSiiBSUVlHF9B64bJD4R7lwfLr55JImkap9Tpn-bl_GVXueh6-">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-9">
                     <button type="button" class="btn btn-primary">OK </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="page-main">
      <div class="page-header">
         <h1 class="page-title">Stripe</h1>
      </div>
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <form>
               <div class="row">
                  <div class="col-lg-4">
                     <h4> Stripe Key</h4>
                     <input type="text" class="form-control" placeholder="pk_test_saiXlh0vzgJbHozYW1CgLNb600spmzWS34 ">
                  </div>
                  <div class="col-lg-4">
                     <h4> Stripe Secret</h4>
                     <input type="text" class="form-control" placeholder=" EMc0mjMvYW-sk_test_x2daU1KLU68hgDoxq96SlflX00ERlvLGsH-bl_GVXueh6-">
                  </div>
                  <div class="col-lg-4">
                     <h4>Client Id (Extra : optional)</h4>
                     <input type="text" class="form-control" placeholder=" ca_F7nDcsXZ7Qjipu6RpSarY2jylZqjqBHw">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-9">
                     <button type="button" class="btn btn-primary">OK </button>
                  </div>
               </div>
            </form>
            <div class="row"></div>
         </div>
      </div>
   </div>
       
</div>
 </div>

@endsection
	