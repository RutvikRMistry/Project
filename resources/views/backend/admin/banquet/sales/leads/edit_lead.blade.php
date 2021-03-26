@extends('backend.master')
@section('title',"Edit Lead")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Lead</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 ><b>Lead Detail</b></h3>
         </header>
         <header class="panel-heading">
            <div>
               <form>
                  <div class="row">
                     <div class="col-lg-3 ">
                        <h5>Client Name:*</h5>
                        <select class="form-control" data-plugin="select2" id="booking" name="client_name">
                           <optgroup label="Please Select">
                              <option value="R1">Client Name</option>
                              <option value="R1">Jessica Jonson (Toll Brothers)</option>
                              <option value="R1">James Smith (Toll Brothers)</option>
                              <option value="R1">Anna Strong (Toll Brothers)</option>
                              <option value="R1">Iron Man (Personal)</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Email ID<strong class="text-danger">*</strong></h5>
                        <input placeholder="Email Address" name="email" type="email" id="email" class="form-control">
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Phone<strong class="text-danger">*</strong></h5>
                        <input data-fv-integer="true" placeholder="Phone Number" name="mobile" type="text" id="mobile" class="form-control">
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Company<strong class="text-danger">*</strong></h5>
                        <select class="form-control" data-plugin="select2" id="client_company" name="company_name" >
                           <optgroup label="Please Select">
                              <option value="R1">Personal</option>
                              <option value="R1">California Cartage Express</option>
                              <option value="R1">Jawwal Palestine</option>
                              <option value="R1">Toll Brothers</option>
                           </optgroup>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-3 ">
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
                     <div class="col-lg-3 ">
                        <h5>State:*</h5>
                        <select class="form-control" data-plugin="select2" id="state_id" name="state_id">
                           <optgroup label="Please Select">
                              <option value="R1">Australian Capital Territory</option>
                              <option value="R1">New South Wales</option>
                              <option value="R1">Northern Territory</option>
                              <option value="R1">Queensland</option>
                              <option value="R1">Tasmania</option>
                              <option value="R1">Western Australia</option>
                        </select>
                     </div>
                     <div class="col-lg-3 ">
                     <h5>City:*</h5>     
                     <select class="form-control" data-plugin="select2" id="city_id" name="city_id">
                     <optgroup label="Please Select">
                     </optgroup>  
                     </select>      
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Zipcode:</h5>
                        <input placeholder="Zip code" name="zipcode" type="text" class="form-control">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-3 ">
                        <h5>Lead Source:*</h5>
                        <select class="form-control" data-plugin="select2" id="lead_source" name="lead_source">
                           <optgroup label="Please Select">
                              <option value="R1">Facebook</option>
                              <option value="R1">Hoarding</option>
                              <option value="R1">Instagram</option>
                              <option value="R1">Newspaper</option>
                              <option value="R1">Twitter</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="col-lg-3">
                        <h5>Sales Team<strong class="text-danger">*</strong></h5>
                        <select class="form-control" data-plugin="select2" id="sales_team_id" name="sales_team_id">
                           <optgroup label="Select Sales team">
                              <option value="R1">Mike's Sales Team</option>
                              <option value="R1">Hoarding</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Lead Owner<strong class="text-danger">*</strong></h5>
                        <select class="form-control" data-plugin="select2" id="sales_person_id" name="sales_person_id" >
                           <optgroup label="Select Sales team">
                              <option value="R1">David Felming</option>
                              <option value="R1">Adan Brown</option>
                              <option value="R1"> Saachi Katwe</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Event Manager<strong class="text-danger">*</strong></h5>
                        <select class="form-control" data-plugin="select2">
                           <optgroup label="Select Sales team" id="event_manager" name="event_manager">
                              <option value="R1">David Felming</option>
                              <option value="R1">Adan Brown</option>
                              <option value="R1"> Saachi Katwe</option>
                           </optgroup>
                        </select>
                     </div>
                  </div>
                  <br>
                  <!-- End Panel Basic -->
                  <div class="row">
                     <div class="col-lg-3 ">
                        <h5>Priority*</h5>
                        <select class="form-control" data-plugin="select2" id="priority" name="priority">
                           <optgroup label="Please Select">
                              <option value="R1">Open</option>
                              <option value="R1">Approach</option>
                              <option value="R1">Do Not Contact</option>
                           </optgroup>
                        </select>
                     </div>
                  </div>
                  <br>
                  <header class="panel-heading">
                     <div class="panel-actions"></div>
                     <h3 ><b>Event Information</b></h3>
                  </header>
                  <div class="row">
                     <div class="col-lg-3 ">
                        <h5>Event Name<strong class="text-danger">*</strong></h5>
                        <input id="event_name" placeholder="Event Name" name="event_name" type="text" class="form-control">
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Event Type<strong class="text-danger">*</strong></h5>
                        <select class="form-control" data-plugin="select2" id="function" name="event_type" >
                           <optgroup label="Please Select">
                              <option value="R1">Birthday</option>
                              <option value="R1">Cocktail</option>
                              <option value="R1">Conference</option>
                           </optgroup>
                        </select>
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Expected Number Of Guests<strong class="text-danger">*</strong></h5>
                        <input placeholder="Guest" min="0" name="expected_guests_veg" type="number" class="form-control">
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Budget Up To<strong class="text-danger">*</strong></h5>
                        <input min="0" step="0.01" placeholder="Budget Up To In ₵" name="budget" type="number" id="budget" class="form-control">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-3 ">
                        <h5>Event Start Date<strong class="text-danger">*</strong></h5>
                        <div class="input-group">
                           <span class="input-group-addon">
                           <i class="icon wb-calendar" aria-hidden="true"></i>
                           </span>
                           <input type="text" class="form-control" data-plugin="datepicker" data-multidate="true"id="start_date" oninput="getDateTimes(this.value)" name="start_date">
                        </div>
                     </div>
                     <div class="col-lg-3 ">
                        <h5>Event End Date<strong class="text-danger">*</strong></h5>
                        <div class="input-group">
                           <span class="input-group-addon">
                           <i class="icon wb-calendar" aria-hidden="true"></i>
                           </span>
                           <input type="text" class="form-control" data-plugin="datepicker" data-multidate="true" id="end_date" oninput="getDateTimes(this.value)" name="end_date">
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-4">
                        <h5>Category:*</h5>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-2 ">
                        <li class="mb-15">
                           <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="category"
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              checked />
                           <label for="inputRadiosChecked">Function</label>
                        </li>
                     </div>
                     <div class="col-lg-2 ">
                        <li class="mb-15">
                           <input type="radio" class="icheckbox-primary" id="inputRadiosChecked"  name="category"
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              checked />
                           <label for="inputRadiosChecked">Event</label>
                        </li>
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
                           <h5>Occasion:</h5>
                        </div>
                        <div class="col-lg-2 form-group">
                           <h5>Event Time:</h5>
                        </div>
                        <div class="col-lg-2 form-group">
                           <h5></h5>
                        </div>
                        <div class="col-lg-2 form-group">
                           <h5>Setup:*</h5>
                        </div>
                        <div class="col-lg-2 form-group">
                           <h5>Teardown:*</h5>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-2">
                           <h5><i class="icon wb-calendar" aria-hidden="true"></i> 27th Sep, 2019</h5>
                        </div>
                        <div class="col-lg-2">
                           <input type="text" name="event_occasion_0" value="Birthday 42" placeholder="Event Occasion" class="form-control">
                        </div>
                        <div class="col-lg-4">
                           <div class="input-daterange" data-plugin="datepicker">
                              <div class="input-group">
                                 <span class="input-group-addon">
                                 <i class="icon wb-calendar" aria-hidden="true"></i>
                                 </span>
                                 <input type="text" name="event_start_time_0" value="00:00 am" placeholder="Event Start Time" class="form-control timepicker">
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon">to</span>
                                 <input type="text" name="event_end_time_0" value="00:00 am" placeholder="Event End Time" class="form-control timepicker">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="icon wb-time" aria-hidden="true"></i>
                              </span>
                              <input type="text" name="setup_0" id="setup_0" value="00:00 am" placeholder="Setup" onchange="getLocations(0)" class="form-control timepicker">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="icon wb-time" aria-hidden="true"></i>
                              </span>
                              <input type="text" name="teardown_0" id="teardown_0" value="00:00 am" placeholder="Tear Down" onchange="getLocations(0)" class="form-control timepicker">
                           </div>
                        </div>
                     </div>
                     <div class="row" style="padding-top: 10px;">
                        <div class="col-lg-4">
                           <h5>Event Location</h5>
                           <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="28"><span class="selection"id="location_0" onchange="locationChange(0)" name="location_0"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-4g9x-container"><span class="select2-selection__rendered" id="select2-4g9x-container" role="textbox" aria-readonly="true" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                        </div>
                        <div class="col-lg-4 ">
                           <h5>Rental Price / Day(₵)</h5>
                           <div tabindex="0" class="spinnerUi"><input type="number" required="required" name="location_rent_0" id="location_rent_0" value="1800" placeholder="Rental price per day" class="form-control"></div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row" >
                     <div class="col-md-12">
                        <h5>Additional Info:</h5>
                        <div class="form-group row">
                           <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                           <div class="col-md-12">
                              <textarea name="additionl_info" cols="50" rows="5" id="additionl_info" class="form-control resize_vertical">test</textarea>                        
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-9">
                        <button type="button" class="btn btn-primary">Submit </button>
                        <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                     </div>
                  </div>
               </form>
            </div>
         </header>
      </div>
   </div>
   <div class="page-main">
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <fieldset class="history">
               <legend>History</legend>
               <ul>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Do Not Contact
                  </li>
                  <li>admin changed Priority
                     from Do Not Contact to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
                  <li>admin changed Priority
                     from Open to Approached
                  </li>
                  <li>admin changed Priority
                     from Approached to Open
                  </li>
               </ul>
            </fieldset>
         </div>
      </div>             
   </div>
</div>
</div>
 </div>

@endsection
	