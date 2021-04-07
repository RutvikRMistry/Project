@extends('backend.master')
@section('title',"Create Meeting")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create Meeting</h1>
   </div> 
      <div style="width: 100%; padding: 30px;">
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
         <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <form action="{{route('backend.admin.banquet.task.meeting.update',$meeting->id)}}" method="post">
         {{csrf_field()}}
            <div>
               <div class="row">
                  <div class="col-lg-5">
                     <h4>Meeting Subject <strong class="text-danger">*</strong></h4>
                     <input class="form-control" placeholder="0" name="meeting_subject" type="text" id="meeting_subject" value="{{$meeting->meeting_subject}}">
                  </div>
                  <div class="col-lg-5">
                     <h4>Company Name <strong class="text-danger">*</strong></h4>
                     <input class="form-control" placeholder="0" name="company_name" type="text" id="comapny_name" value="{{$meeting->company_name}}">
                  </div>
                  {{--<!-- <div class="col-lg-5">
                     <h4>Function</h4>
                     <select class="form-control" data-plugin="select2"id="event_id" name="event_id" >
                     @foreach($event as $event)
								<option value="{{$event->id}}" {{old('event_id') == $event->id?'selected':''}} >{{$event->name}}</option>
							@endforeach
                     </select>
                  </div> -->--}}
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-5">
                     <div class="example-title">
                        <h4>Company / Personal Attendees <strong class="text-danger">*</strong> </h4>
                        <div class="select2-primary">
                           <select class="form-control" multiple="multiple" data-plugin="select2" id="attendees" name="company_attendees">
                              <option value="1" selected>Jessica Jonson (Toll Brothers)</option>
                              <option value="2">James Smith (Toll Brothers) </option>
                              <option value="3">Ode Palestine (Personal)</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 ">
                     <h4>Main Staff <strong class="text-danger">*</strong></h4>
                     <div class="select2-primary" >
                        <select class="form-control" multiple="multiple" data-plugin="select2" id="responsible_id" name="responsible_id">
                           <option value="1" selected>David Felming </option>
                           <option value="2">Adan Brown  </option>
                           <option value="2">Saachi Katwe </option>
                        </select>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-5">
                     <div class="example-title">
                        <h4>Staff Attendees </h4>
                        <div class="select2-primary">
                           <select class="form-control" multiple="multiple" data-plugin="select2" id="staff_attendees" name="staff_attendees">
                              <option value="1" selected>David Felming </option>
                              <option value="2">Adan Brown  </option>
                              <option value="3">Saachi Katwe </option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <h4>Location <strong class="text-danger">*</strong></h4>
                     <input name="location" type="text" id="location" class="form-control" data-bv-field="location" value="{{$meeting->location}}">
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-5">
                     <h4>Starting date <strong class="text-danger">*</strong></h4>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input name="starting_date" type="date" id="starting_date" class="form-control" data-bv-field="starting_date" placeholder="{{$meeting->starting_date}}">
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <h4>Ending date <strong class="text-danger">*</strong></h4>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input name="ending_date" type="date" id="ending_date" class="form-control" data-bv-field="ending_date" value="{{$meeting->ending_date}}">
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <h4>Meeting description</h4>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-10">
                           <textarea name="meeting_description" cols="50" rows="5" id="meeting_description" class="form-control resize_vertical" placeholder="{{$meeting->meeting_description}}"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-2">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="all_day" id="all_day"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">All Days</label>
                     </li>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-5">
                     <h4>Privacy </h4>
                     <select class="form-control" data-plugin="select2" id="privacy" name="privacy" >
                        <optgroup label="Please Select ">    
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-5">
                     <h4>Show Time as</h4>
                     <select class="form-control" data-plugin="select2" id="show_time_as" name="show_time_as">
                        <optgroup label="Please Select ">
                           <option value="2">True </option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-9">
                  <button type="submit" class="btn btn-default btn-outline">OK</button>
                     <button type="button" class="btn btn-primary">Back </button>
                     <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                  </div>
               </div>
         </form>
         </div>
      </div>
      
   </div>
</div>
</div>
 </div>
@endsection
	