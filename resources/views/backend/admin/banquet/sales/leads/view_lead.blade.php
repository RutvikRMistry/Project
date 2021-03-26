@extends('backend.master')
@section('title',"Veiw Lead Detail")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Lead Details</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row form-panel">
               <div class="col-sm-6 col-lg-3">
                  <label for="client_name" class="control-label">Client Name</label> 
                  <div>Ode Palestine</div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <label for="email" class="control-label">Email</label> 
                  <div>odetest@gmail.com</div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <label for="phone" class="control-label">Phone</label> 
                  <div>123456789</div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <label for="company" class="control-label">Customer / Personal</label> 
                  <div>
                     Personal
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3 m-t-20">
                  <label for="Country,State,City" class="control-label">Country,State,City</label> 
                  <div>Palestinian Territory Occupied, Ariha, Ariha</div>
               </div>
               <div class="col-sm-6 col-lg-3 m-t-20">
                  <label for="leadsource" class="control-label">Lead Source</label> 
                  <div>Newspaper</div>
               </div>
               <div class="col-sm-6 col-lg-3 m-t-20">
                  <label for="salesteam" class="control-label">Sales Team</label> 
                  <div>Mike's Sales Team</div>
               </div>
               <div class="col-sm-6 col-lg-3 m-t-20">
                  <label for="lead_owner" class="control-label">Lead Owner</label> 
                  <div>David Felming</div>
               </div>
               <div class="col-sm-6 col-lg-3 m-t-20">
                  <label for="manager" class="control-label">Event Manager</label> 
                  <div></div>
               </div>
               <div class="col-md-12 m-t-20"><a href="https://saas.banquetcrm.com/leadcall/4" class="btn btn-primary call-summary"><i class="fa fa-phone"></i> <b>0</b> Calls
                  </a> <a href="https://saas.banquetcrm.com/event/create/4" class="btn btn-primary call-summary"><i class="fa fa-handshake-o"></i> Convert Lead To Event
                  </a>
               </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="row">
               <div class="page-header">
                  <h4>
                  Event Information</h5>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <h5>Event Type</h5>
               </div>
               <div class="col-md-3">
                  <h5>Expected Number Of Guests</h5>
               </div>
               <div class="col-md-2">
                  <h5>Budget Up To</h5>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <h5>Corporate Event</h5>
               </div>
               <div class="col-md-3">
                  <h5>Veg :- 36 , Non Veg :- 9</h5>
               </div>
               <div class="col-md-2">
                  <h5>50000</h5>
               </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
               <thead>
                  <tr>
                     <th>Event Date  </th>
                     <th>Event Location </th>
                     <th>Start Time  </th>
                     <th>End Time </th>
                     <th>Setup</th>
                     <th>Teardown</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="gradeA">
                     <td>27th Sep, 2019  </td>
                     <td>Not define  </td>
                     <td>12:00 AM  </td>
                     <td>12:00 AM  </td>
                     <td>12:00 AM  </td>
                     <td>12:00 AM  </td>
                  </tr>
               </tbody>
            </table>
            <br>
            <div class="row" style="margin: auto;">
               <div class="col-md-2">
                  <h5>Additional Info</h5>
               </div>
            </div>
            <br><br>
            <div class="row" style="margin: auto;">
               <div class="col-md-2">
                  <button type="button" class="btn btn-primary">Back</button>
               </div>
            </div>
         </div>
      </div>
         
   </div>
</div>
</div>
 </div>

@endsection
	