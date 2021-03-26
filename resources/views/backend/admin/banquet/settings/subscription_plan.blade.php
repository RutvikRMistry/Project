@extends('backend.master')
@section('title',"Subscription Plan: Billing")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Subscription plans...</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">Türkçe    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵10/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">Established Bookings        </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵20/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">Gold Plan       </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵40/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">Starter Bookings        </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵10/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">STD Functions       </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵50/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">Test        </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵1/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">TP2    </h3>
                  </div>
                  <div class="col-lg-3 form-group" >
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵60/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
               <div class="dropdown-divider"></div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">Türkçe    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Features</button>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h3 class="example-title">₵10/Month    </h3>
                  </div>
                  <div class="col-lg-3 form-group">
                     <button type="button" class="btn btn-default btn-outline">Select This Plan</button>
                  </div>
               </div>
            </div>
         </header>
      </div>
   </div>
   <div class="page-main">
      <div class="page-header">
         <h1 class="page-title">Billing information...</h1>
      </div>
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
            <div class="row" style="margin: auto;">
               <div class="col-lg-10 form-group">
                  <div class="input-group input-group-icon">
                     <input type="email" class="form-control" placeholder="Cardholder's Name">
                     <span class="input-group-addon">
                     <span class="icon wb-user" aria-hidden="true"></span>
                     </span>  
                  </div>
               </div>
            </div>
            <div class="row" style="margin: auto;">
               <div class="col-lg-6 form-group">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search for...">
                     <span class="input-group-btn">
                     <button type="button" class="btn btn-default btn-outline">VISA</button>
                     </span>
                  </div>
               </div>
               <div class="col-lg-4 form-group">
                  <div class="input-group input-group-icon">
                     <input type="email" class="form-control" placeholder="Cardholder's Name">
                     <span class="input-group-addon">
                     <span class="icon wb-lock" aria-hidden="true"></span>
                     </span>  
                  </div>
               </div>
            </div>
            <div class="row" style="margin: auto;">
               <div class="col-lg-5 form-group">
                  <select class="form-control" data-plugin="select2">
                     <optgroup label="Expiration Month">
                        <option value="R1">01</option>
                        <option value="R1">02</option>
                        <option value="R1">03 </option>
                        <option value="R1">04</option>
                        <option value="R1">05</option>
                        <option value="R1">06</option>
                        <option value="R1">07</option>
                        <option value="R1">08</option>
                        <option value="R1">09</option>
                        <option value="R1">10</option>
                     </optgroup>
                  </select>
               </div>
               <div class="col-lg-5 form-group">
                  <select class="form-control" data-plugin="select2">
                     <optgroup label="Expiration Year">
                        <option value="R1">2001</option>
                        <option value="R1">2002</option>
                        <option value="R1">2003 </option>
                        <option value="R1">2004</option>
                        <option value="R1">2005</option>
                        <option value="R1">2006</option>
                        <option value="R1">2007</option>
                        <option value="R1">2008</option>
                        <option value="R1">2009</option>
                        <option value="R1">2010</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="row" style="margin: auto;">
               <div class="col-lg-4 form-group">
                  <h4 class="example-title">We do not store your card information.</h4>
               </div>
               <div class="row"></div>
            </div>
         </div>
      </div>      
   </div>
</div>
</div>
 </div>

@endsection
	