@extends('backend.master')
@section('title',"Add Caterer")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	

<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create Caterers</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Name:</h5>
                  <input type="text" class="form-control" placeholder=" ">
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Email ID:</h5>
                  <input type="text" class="form-control" placeholder=" ">
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Phone No:</h5>
                  <input type="text" class="form-control" placeholder=" ">
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Address</h5>
                  <input type="text" class="form-control" placeholder=" ">
               </div>
            </div>
            <header class="panel-heading">
               <div class="panel-actions"></div>
               <h4><b>Packages<b></h4>
            </header>
            <br>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5> Package  Name:</h5>
                  <input type="text" class="form-control" placeholder=" ">
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Price:</h5>
                  <input type="text" class="form-control" data-plugin="asSpinner" value="0" />
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Person:</h5>
                  <input type="text" class="form-control" data-plugin="asSpinner" value="0" />
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Service</h5>
                  <input type="text" class="form-control" placeholder=" ">
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary">Add </button>
               </div>
            </div>
            <header class="panel-heading">
               <div class="panel-actions"></div>
               <h4><b>Terms & Conditions<b></h4>
            </header>
            <div class="row">
               <div class="col-md-12">
                  <h5>Contract Terms:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Contract Terms</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Payment:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Payment</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Staff Charge:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Staff Charge</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Guest Number:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Guest Number</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Additional Meals:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Additional Meals</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Dietary Requirements
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Dietary Requirements
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Additional Beverages
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Additional Beverages
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Food and Beverages
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Food and Beverages
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Cancellation
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Cancellation
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Hire Equipment
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Hire Equipment
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Waste Disposal
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Waste Disposal
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Responsibility for Damage
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Responsibility for Damage
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Disorderly Conduct
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Disorderly Conduct
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Responsible Service of Alcohol
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Responsible Service of Alcohol
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Safety & Hygiene
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Safety & Hygiene
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Reschedule
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Reschedule
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Force Majeure
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Force Majeure
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Indemnification
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Indemnification
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Binding Arbitration
                     :
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="">Binding Arbitration
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary">Back </button>
                  <button type="reset" class="btn btn-default btn-outline">Ok</button>
               </div>
            </div>
         </div>
      </div>
            
   </div>
</div>
</div>
</div>
</div>
</div>
</div>



 </div>

@endsection
	