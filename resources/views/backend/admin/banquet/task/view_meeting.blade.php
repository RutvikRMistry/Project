@extends('backend.master')
@section('title',"View Meeting")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">View Product</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Meeting Subject</label> 
                        <div class="controls">
                           {{$meeting->meeting_subject}}
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Main Staff</label> 
                        <div class="controls">
                           David Felming
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Company Attendees</label> 
                        <div class="controls"> Jessica Jonson,James Smith</div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Staff Attendees</label> 
                        <div class="controls">Adan Brown</div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Starting date</label> 
                        <div class="controls">
                           07/13/2019 10:00 AM
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Ending date</label> 
                        <div class="controls">
                           07/13/2019 11:30 AM
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Location</label> 
                        <div class="controls">
                           Meeting Room
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Privacy</label> 
                        <div class="controls"></div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="form-group">
                        <label for="title" class="control-label">Show Time as</label> 
                        <div class="controls"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="title" class="control-label">Meeting description</label> 
                        <div class="controls">
                           We need to be prepared for big fat wedding ceremony of Toll Brothers CEO's son. Everything has to well planned and should be perfect.
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="controls"><a href="{{route('backend.admin.banquet.task.meeting')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a></div>
               </div>
            </div>
         </div>
      </div>
     
   </div>
</div>
</div>
 </div>
@endsection
	