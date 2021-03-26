@extends('backend.master')
@section('title',"New Call")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">New Call</h1>
   </div>
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
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <form action="{{route('backend.admin.banquet.task.call.store')}}" method="post">
         {{csrf_field()}}
            <div>
               <div class="row">
                  <div class="col-lg-4">
                     <h4>Customer / Personal <strong class="text-danger">*</strong></h4>
                     <select class="form-control" data-plugin="select2" id="company_name"  name="company_name">
                        <optgroup label="Please Select">
                           <option value="Jessica Jonson (Toll Brothers)">Jessica Jonson (Toll Brothers)</option>
                           <option value="James Smith (Toll Brothers)">James Smith (Toll Brothers)</option>
                           <option value="Anna Strong (Toll Brothers)">Anna Strong (Toll Brothers)</option>
                           <option value="Iron Man (Personal)">Iron Man (Personal)</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h4>Date <strong class="text-danger">*</strong></h4>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input name="date" type="date" value="31.08.2020." id="date" class="form-control date" data-bv-field="date">
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h4>Call Duration(in min.) <strong class="text-danger">*</strong></h4>
                     <input min="1" name="duration" type="number" id="duration" class="form-control" data-bv-field="duration">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <h4>Main Staff <strong class="text-danger">*</strong></h4>
                     <select class="form-control" data-plugin="select2" id="resp_staff_id" name="resp_staff_id">
                        <optgroup label="Please Select">
                           <option value="1">David Felming</option>
                           <option value="2">Adan Brown</option>
                           <option value="3">Saachi Katwe</option>
                        </optgroup>
                     </select>
                  </div>
                  <!-- <div class="col-lg-4">
                     <h4>Function </h4>
                     <select class="form-control" data-plugin="select2" id="event_id" name="event_id">
                        <optgroup label="Please Select Function">
                           <option value="R1">Iron Man Birthday Party (BP_Function_22072019053840)</option>
                           <option value="R1">Odeh's Party (BP_Function_05092019063554)</option>
                           <option value="R1"> Odeh's Wedding (W_Function_18092019125238)</option>
                           <option value="R1">test2 (C_Function_18092019092220)</option>
                        </optgroup>
                     </select>
                  </div> -->
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <h4>Call Note<strong class="text-danger">*</strong></h4>
                     <input name="call_summary" type="text" id="call_summary" class="form-control" data-bv-field="call_summary">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-9">
                     <button type="reset" class="btn btn-primary">Back </button>
                     <button type="submit" class="btn btn-default btn-outline">Ok</button>
                  </div>
               </div>
            </div>
         </form>
      </div>        
   </div>
</div>
</div>
 </div>

@endsection
	