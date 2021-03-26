@extends('backend.master')
@section('title',"Add Sales Team")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create Sales Team</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<!-- <form action="{{route('backend.admin.banquet.sttings.sales_team.store')}}" method="post" enctype="multipart/form-data"> -->
      @if($errors->all())
      <div class="row">
         <div class="col">
            @foreach($errors->all() as $msg)
            <div class="alert alert-danger" role="alert">
               {{$msg}}
            </div>
            @endforeach
         </div>
      </div>
      @endif()
      <form action="{{route('backend.admin.banquet.sttings.sales_team.update',$sales_team->id)}}" method="post">
		   {{csrf_field()}}
            <div class="row" >
               <div class="col-lg-10 ">
                  <h5>Sales Team *</h5>
                  <input type="text" class="form-control" placeholder="" value="{{$sales_team->salesteam}}" name="salesteam">
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-5 form-group">
                  <h5>Sales Team Manager *</h5>
                  <select class="form-control" data-plugin="select2" name="team_leader" >
                     <option value="">--Select--</option>
                        <option value="1" {{$sales_team->team_leader == '1'?'selected' : ''}}>David Felming </option>
                        <option value="2" {{$sales_team->team_leader == '2'?'selected' : ''}}>Adan Brown  </option>
                        <option value="3" {{$sales_team->team_leader == '3'?'selected' : ''}}>Saachi Katwe </option>

                  </select>
               </div>
               <div class="col-lg-5 form-group">
                  <div class="example-title">
                     <h5>Staff Members </h5>
                     <select class="form-control" multiple="multiple" data-plugin="select2" name="team_members" >
                        <option value="1" {{$sales_team->team_members == '1'?'selected' : ''}}>David Felming </option>
                        <option value="2" {{$sales_team->team_members == '2'?'selected' : ''}}>Adan Brown  </option>
                        <option value="3" {{$sales_team->team_members == '3'?'selected' : ''}}>Saachi Katwe </option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-lg-5 form-group">
                  <h5>Invoice Target *</h5>
                  <input type="number" class="form-control" placeholder="Invoice Target" name="invoice_target" value="{{$sales_team->invoice_target}}">
               </div>
               <div class="col-lg-5 form-group">
                  <h5>Commission *</h5>
                  <input type="text" class="form-control" placeholder="Commission in %" name="commision" value="{{$sales_team->commision}}">
               </div>
               <div class="col-lg-5 form-group">
                  <h5>leads *</h5>
                  <input type="number" class="form-control" placeholder="leads %" name="leads" value="{{$sales_team->leads}}">
               </div>
               <div class="col-lg-5 form-group">
                  <h5> forecast *</h5>
                  <input type="number" class="form-control" placeholder="Invoice Forcast%" name="invoice_forecast" value="{{$sales_team->invoice_forecast}}">
               </div>
               <div class="col-lg-5 form-group">
                  <h5> quotations </h5>
                  <input type="number" class="form-control" placeholder="Quotations %" name="quotations" value="{{$sales_team->quotations}}">
               </div>
               <div class="col-lg-5 form-group">
                  <h5> opportunities *</h5>
                  <input type="number" class="form-control" placeholder="opportunities%" name="opportunities" value="{{$sales_team->opportunities}}">
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>About Team </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-10">
                        <textarea class="form-control" rows="3" placeholder="About Team" name="notes"value="{{$sales_team->notes}}"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-9">
                  <!-- <button type="reset" class="btn btn-primary">Back </button> -->
                  <button type="submit" class="btn btn-default btn-outline">OK</button>
               </div>
            </div>
         </div>
          </div>
      </form>
   </div>
</div>
</div>
 </div>
@endsection
