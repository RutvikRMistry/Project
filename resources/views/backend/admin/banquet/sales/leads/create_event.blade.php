@extends('backend.master')
@section('title',"Create Event")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create Event</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Client Name<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="client" onchange="fillCutomerInfo(this.value)" name="client" >
                        <optgroup label="Please Select">
                           <option value="R1">Client Name</option>
                           <option value="R1">Jessica Jonson (Toll Brothers)</option>
                           <option value="R1">James Smith (Toll Brothers)</option>
                           <option value="R1">Anna Strong (Toll Brothers)</option>
                           <option value="R1">Iron Man (Personal)</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Email ID<strong class="text-danger">*</strong></h5>
                     <input placeholder="Email Id" name="client_email" type="email" value="odetest@gmail.com" id="client_email" class="form-control">   
                  </div>
                  <div class="col-lg-4">
                     <h5>Phone<strong class="text-danger">*</strong></h5>
                     <input placeholder="Phone" name="client_phone" type="number" value="123456789" id="client_phone" class="form-control tooltipstered valid">              
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Company<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2"id="client_company" name="client_company" >
                        <optgroup label="Please Select">
                           <option value="R1">Personal</option>
                           <option value="R1">California Cartage Express</option>
                           <option value="R1">Jawwal Palestine</option>
                           <option value="R1">Toll Brothers</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Country<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="country_id" name="country_id">
                        <optgroup label="Please Select">
                           <option value="R1">Afghanistan</option>
                           <option value="R1">Albania</option>
                           <option value="R1">Antigua And Barbuda</option>
                           <option value="R1">Australia</option>
                           <option value="R1">Bahrain</option>
                           <option value="R1">Belgium</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>State<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="state_id" name="state_id" >
                        <optgroup label="Please Select">
                           <option value="R1">Australian Capital Territory</option>
                           <option value="R1">New South Wales</option>
                           <option value="R1">Northern Territory</option>
                           <option value="R1">Queensland</option>
                           <option value="R1">Tasmania</option>
                           <option value="R1">Western Australia</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-4">
                     <h5>City<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2"id="city_id" name="city_id">
                        <optgroup label="Please Select">
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Zipcode:</h5>
                     <input placeholder="Zip code" name="zipcode" type="text" value="123456" class="form-control tooltipstered valid">
                  </div>
                  <div class="col-lg-4">
                     <h4 class="example-title">Lead Source<strong class="text-danger">*</strong></h4>
                     <select class="form-control" data-plugin="select2" id="lead_source" name="lead_source" >
                        <optgroup label="Please Select">
                           <option value="R1">Facebook</option>
                           <option value="R1">Hoarding</option>
                           <option value="R1">Instagram</option>
                           <option value="R1">Newspaper</option>
                           <option value="R1">Twitter</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-4">
                     <h5>Sales Team<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="sales_team_id" name="salesteam" >
                        <optgroup label="Select Sales team">
                           <option value="R1">Mike's Sales Team</option>
                           <option value="R1">Hoarding</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Lead Owner<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2"  id="owner" name="owner" >
                        <optgroup label="Select Sales team">
                           <option value="R1">David Felming</option>
                           <option value="R1">Adan Brown</option>
                           <option value="R1"> Saachi Katwe</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Event Name:</h5>
                     <input placeholder="Name" name="event_name" type="text" value="Birthday" id="event_name" class="form-control tooltipstered">
                  </div>
               </div>
               <br>
               <!-- End Panel Basic -->
               <div class="row" >
                  <div class="col-lg-4">
                     <h5>Type of Event<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="type_event" name="type_event" >
                        <optgroup label="Please Select">
                           <option value="R1">Select Event Type</option>
                           <option value="R1">Birthday Party</option>
                           <option value="R1">Cocktail</option>
                           <option value="R1">Corporate</option>
                           <option value="R1">Corporate Event</option>
                           <option value="R1">Fair</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Event Status<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="status" name="status">
                        <optgroup label="Please Select">
                           <option value="R1">Close</option>
                           <option value="R1">Lost</option>
                           <option value="R1">Prospect</option>
                           <option value="R1">Tentative</option>
                           <option value="R1">Definite</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Expected Guest<strong class="text-danger">*</strong></h5>
                     <input placeholder="Expected Guest" min="0" name="expected_guests_veg" type="number" value="36" class="form-control tooltipstered">                  
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-4">
                     <h5>Guaranteed Guest</h5>
                     <input placeholder="Guaranteed Guest" min="0" name="guaranteed_guest_veg" type="number" class="form-control tooltipstered">
                  </div>
                  <div class="col-lg-4">
                     <h5>Event Start Date<strong class="text-danger">*</strong></h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" data-plugin="datepicker" data-multidate="true"id="start_date" oninput="getDateTimes(this.value)" name="start_date" >
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Event End Date<strong class="text-danger">*</strong></h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" data-plugin="datepicker" data-multidate="true" id="end_date" oninput="getDateTimes(this.value)" name="end_date" >
                     </div>
                  </div>
               </div>
               <br>
               <div style="background-color: #f1f4f5; padding: 10px; border-radius: 5px;">
                  <!-- test --> 
                  <div class="row" style="padding-top: 10px;">
                     <div class="col-lg-2">
                        <h5>Date:</h5>
                     </div>
                     <div class="col-lg-2 form-group">
                        <h4 class="example-title">Occasion:</h4>
                     </div>
                     <div class="col-lg-2 form-group">
                        <h4 class="example-title">Event Time:</h4>
                     </div>
                     <div class="col-lg-2 form-group">
                        <h4 class="example-title"></h4>
                     </div>
                     <div class="col-lg-2 form-group">
                        <h4 class="example-title">Setup:*</h4>
                     </div>
                     <div class="col-lg-2 form-group">
                        <h4 class="example-title">Teardown:*</h4>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2">
                        <h5><i class="icon wb-calendar" aria-hidden="true"></i> 27th Sep, 2019</h5>
                     </div>
                     <div class="col-lg-2">
                        <input type="text" name="event_occasion_0" value="Birthday 42" placeholder="Event Occasion" class="form-control tooltipstered valid">                
                     </div>
                     <div class="col-lg-4">
                        <div class="input-daterange" data-plugin="datepicker">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="icon wb-calendar" aria-hidden="true"></i>
                              </span>
                              <input type="text" name="event_start_time_0" value="00:00 am" placeholder="Event Start Time" class="form-control timepicker tooltipstered">         
                           </div>
                           <div class="input-group">
                              <span class="input-group-addon">to</span>
                              <input type="text" name="event_end_time_0" value="00:00 am" placeholder="Event End Time" class="form-control timepicker tooltipstered">        
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="input-group">
                           <span class="input-group-addon">
                           <i class="icon wb-time" aria-hidden="true"></i>
                           </span>
                           <input type="text" name="setup_0" value="00:00 am" placeholder="Setup" class="form-control timepicker tooltipstered">
                        </div>
                     </div>
                     <div class="col-lg-2">
                        <div class="input-group">
                           <span class="input-group-addon">
                           <i class="icon wb-time" aria-hidden="true"></i>
                           </span>
                           <input type="text" name="teardown_0" value="00:00 am" placeholder="Tear Down" class="form-control timepicker tooltipstered">
                        </div>
                     </div>
                  </div>
                  <div class="row" style="padding-top: 10px;">
                     <div class="col-lg-4">
                        <h5>Event Location</h5>
                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="28"><span class="selection"><span class="select2-selection select2-selection--single" id="location_0" onchange="locationChange(0)" name="location_0" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-4g9x-container"><span class="select2-selection__rendered" id="select2-4g9x-container" role="textbox" aria-readonly="true" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                     </div>
                     <div class="col-lg-4 form-group">
                        <h5>Rental Price / Day(₵)</h5>
                        <div tabindex="0" class="spinnerUi"><input type="number" name="location_rent_0" id="location_rent_0" value="1800" placeholder="Rental price per day" class="form-control tooltipstered"></div>
                     </div>
                  </div>
               </div>
               <br>                           
               <div class="row" >
                  <div class="col-lg-6 ">
                     <h5>Event Manager<strong class="text-danger">*</strong></h5>
                  </div>
                  <div class="col-lg-6 ">
                     <h5>Category<strong class="text-danger">*</strong></h5>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-3">
                     <select class="form-control" data-plugin="select2" id="managers" name="manager" >
                        <optgroup label="Please Select">
                           <option value="R1">All</option>
                           <option value="R1">Event Manager</option>
                           <option value="R1">Adnan Brown</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-3">
                     <a href="{{route('backend.admin.banquet.sttings.staff.add')}}">
                     <button type="button" class="btn btn-primary"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add Manager</button></a>
                  </div>
                  <div class="col-lg-3">
                     <li class="mb-15">
                        <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios"
                           data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                           checked  name="category" />
                        <label for="inputRadiosChecked">Function</label>
                     </li>
                  </div>
                  <div class="col-lg-3">
                     <li class="mb-15">
                        <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios"
                           data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                           checked  name="category" />
                        <label for="inputRadiosChecked">Event</label>
                     </li>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-3">
                     <h5>Any Kids</h5>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Under 12 Years</h5>
                     <input name="under_12_year" type="text" id="under_12_year" class="form-control tooltipstered">
                  </div>
                  <div class="col-lg-6">
                     <h5>Under 5 Years</h5>
                     <input name="under_5_year" type="text" id="under_5_year" class="form-control tooltipstered">
                  </div>
               </div>
               <br>     
               <div class="row">
                  <div class="col-lg-12">
                     <button type="button" class="btn btn-primary">Submit </button>
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
	