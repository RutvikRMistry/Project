@extends('backend.master')
@section('title',"View Function")
@section('content')
<!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create Function</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div class="example-wrap">
            <form>
               <div class="nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsIconOne"
                        aria-controls="exampleTabsIconOne" role="tab" > Details</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsIconTwo"
                        aria-controls="exampleTabsIconTwo" role="tab">Menu</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsIconThree"
                        aria-controls="exampleTabsIconThree" role="tab">Discussion</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsIconFour"
                        aria-controls="exampleTabsIconFour" role="tab">Task</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsIconFive"
                        aria-controls="exampleTabsIconFive" role="tab">Notes</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsIconSix"
                        aria-controls="exampleTabsIconSix" role="tab">Payment</a></li>
                  </ul>
                  <div class="tab-content pt-15">
                     <div class="tab-pane active" id="exampleTabsIconOne" role="tabpanel">
                        <div class="panel-actions"></div>
                        <h3><b>Contact</b></h3>
                        </header>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4>Email ID</h4>
                              <p>ironman@ironman.com</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Contact</h4>
                              <p>123654789</p>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <header class="panel-heading">
                           <div class="panel-actions"></div>
                           <h3><b>Additional Information</b></h3>
                        </header>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4>Expected Number Of Guests</h4>
                              <p>100</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Lead Owner</h4>
                              <p>David Felming</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Guaranteed Guests</h4>
                              <p>100</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4>Lead Source</h4>
                              <p>Facebook</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Type of Function</h4>
                              <p>Birthday Party</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Function Manager</h4>
                              <p>Adan Brown</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4>Created At</h4>
                              <p>Mon, Jul 22,2019 05:38 am</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Updated At</h4>
                              <p>Thu, Jun 11,2020 03:42 pm</p>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <!-- End Panel Basic -->
                        <header class="panel-heading">
                           <div class="panel-actions"></div>
                           <h3><b>Financial</b></h3>
                        </header>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4>Rental Fees Total</h4>
                              <p>₵2,000</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Equipment Requirement</h4>
                              <p>₵1,000</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Contractors Charge Total</h4>
                              <p>₵600</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4>Actual Amount</h4>
                              <p>₵3,800</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Tax amount</h4>
                              <p>₵1,000</p>
                           </div>
                           <div class="col-lg-4">
                              <h4>Grand Total</h4>
                              <p>₵4,180</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-3">
                              <h4>Deposit Amounts </h4>
                              <p>₵4,000 </p>
                           </div>
                           <div class="col-lg-3">
                              <h4> Deposit Due</h4>
                              <p>07/25/2019 </p>
                           </div>
                           <div class="col-lg-3">
                              <h4>2nd Deposit </h4>
                              <p>₵3,000 </p>
                           </div>
                           <div class="col-lg-3">
                              <h4>2nd Deposit Due Date </h4>
                              <p> 07/31/2019</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-3">
                              <h4> Balance Due</h4>
                              <p> ₵-2,820</p>
                           </div>
                           <div class="col-lg-3">
                              <h4>Balance Due Date </h4>
                              <p>08/31/2019 </p>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <header class="panel-heading">
                           <div class="panel-actions"></div>
                           <h3><b>Any Kids</b></h3>
                        </header>
                        <div class="row">
                           <div class="col-lg-3">
                              <h4>Under 12 Years</h4>
                              <p> 10</p>
                           </div>
                           <div class="col-lg-3">
                              <h4>Under 5 Years </h4>
                              <p>5</p>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <header class="panel-heading">
                           <div class="panel-actions"></div>
                           <h3><b>Eating Times</b></h3>
                        </header>
                        <div class="row">
                           <div class="col-lg-3">
                              <h4>Service Time </h4>
                              <p>06:26 PM </p>
                           </div>
                           <div class="col-lg-3">
                              <h4> Canapes </h4>
                              <p> 06:26 PM</p>
                           </div>
                           <div class="col-lg-3">
                              <h4>Morning Snacks </h4>
                              <p> 06:26 PM TO 06:26 PM</p>
                           </div>
                           <div class="col-lg-3">
                              <h4>2Morning Tea / Coffee </h4>
                              <p>06:26 PM TO 06:26 PM </p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-3">
                              <h4>Lunch </h4>
                              <p> 06:26 PM TO 06:26 PM</p>
                           </div>
                           <div class="col-lg-3">
                              <h4> Afternoon Tea / Coffe</h4>
                              <p>06:26 PM TO 06:26 PM </p>
                           </div>
                           <div class="col-lg-3">
                              <h4>Evening Snacks </h4>
                              <p> 06:26 PM TO 06:26 PM</p>
                           </div>
                           <div class="col-lg-3">
                              <h4>Dinner </h4>
                              <p> 06:26 PM TO 06:26 PM</p>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <header class="panel-heading">
                           <div class="panel-actions"></div>
                           <h3><b>Logistics</b></h3>
                        </header>
                        <div class="row">
                           <div class="col-lg-4">
                              <h4 class="example-title">Van Choice</h4>
                              <p>nano</p>
                           </div>
                           <div class="col-lg-4">
                              <h4 class="example-title">Staff Choice</h4>
                              <p>Adan Brown</p>
                           </div>
                           <div class="col-lg-4">
                              <h4 class="example-title">Function Address</h4>
                              <p>asdas</p>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="exampleTabsIconTwo" role="tabpanel">
            <form>
            <div class="row">
            <div class="col-lg-4">
            <h4 class="example-title">Grand Total : ₵4,180</h4>     
            </div>
            <div class="col-lg-4">
            <h4 class="example-title">Total OutStanding : ₵-5,820</h4>     
            </div>
            <div class="col-lg-4">
            <button type="button" class="btn btn-primary" id="validateButton2">
            <i class="hidden-sm-down" aria-hidden="true"></i> Share
            </button>
            </div>
            </div>
            <form>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
            <thead>
            <tr>
            <th>Sr. No. </th>
            <th>Document Name</th>
            <th>Document Type </th>
            <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeA">
            <td>1</td>
            <td>BOE(Booking Order)  </td>
            <td>PDF </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            <tr class="gradeA">
            <td>2</td>
            <td>Quotation</td>
            <td>PDF </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            <tr class="gradeA">
            <td>3</td>
            <td>Staff </td>
            <td>PDF </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            <tr class="gradeA">
            <td>4</td>
            <td>Photography </td>
            <td>PDF </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            <tr class="gradeA">
            <td>5</td>
            <td>Entertainment </td>
            <td>PDF </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            </tbody>
            </table>
            </form>
            </div>
            <div class="tab-pane" id="exampleTabsIconThree" role="tabpanel">
            <form>
            <div class="row">
            <div class="col-lg-2">
            <h4><b>Discussion</b></h4>     
            </div>
            <div class="col-lg-8">
            <h4></h4>     
            </div>
            <div class="col-lg-2">
            <button type="button" class="btn btn-primary" id="validateButton2">
            <i class="hidden-sm-down" aria-hidden="true"></i> Start Discussion 
            </button>         
            </div>
            </div>
            <div class="row">
            <div class="col-lg-8">
            <h4><b>Guest</b> General Discussion</h4>     
            </div>
            </div>
            <div class="col-lg-4">
            <h4>admin maitrede<strong class="text-muted">18 minutes ago 1 recipients</strong></h4>     
            </div>
            <div class="col-lg-4">
            <h4>test<br><strong class="text-muted">Sincerely,</strong><br><strong class="text-muted">admin maitrede</strong></h4>     
            </div>
            <div class="col-lg-4">
            <h4>evasmith363@gmail.com</h4>
            </div>
            <div class="row">
            <div class="col-md-8">
            <div class="form-group row">
            <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
            <div class="col-md-10">
            <textarea class="form-control" rows="3" placeholder="">Enter Your Comment Here</textarea>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-4">
            <h4>Recipients</h4>
            </div>
            <div class="row">
            <div class="col-lg-2">
            <li class="mb-15">
            <input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes"
               data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
               />
            <label for="inputUnchecked">Iron Man</label>
            </li>
            </div>
            </div>
            <div class="col-md-9">
            <button type="button" class="btn btn-primary">Send </button>
            <button type="reset" class="btn btn-primary">Cancel</button>
            </div>
            <div class="dropdown-divider"></div>
            <br>
            <div class="row">
            <div class="col-lg-8">
            <h4><b>Guest</b> General Discussion</h4>     
            </div>
            </div>
            <div class="col-lg-4">
            <h4>admin maitrede<strong class="text-muted">18 minutes ago 1 recipients</strong></h4>     
            </div>
            <div class="col-lg-4">
            <h4>test<br><strong class="text-muted">Sincerely,</strong><br><strong class="text-muted">admin maitrede</strong></h4>     
            </div>
            <div class="col-lg-4 form-group">
            <h4 class="example-title">evasmith363@gmail.com</h4>
            </div>
            <div class="row">
            <div class="col-md-8">
            <div class="form-group row">
            <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
            <div class="col-md-10">
            <textarea class="form-control" rows="3" placeholder="">Enter Your Comment Here</textarea>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-4">
            <h4>Recipients</h4>
            </div>
            <div class="row">
            <div class="col-lg-2">
            <li class="mb-15">
            <input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes"
               data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
               />
            <label for="inputUnchecked">Iron Man</label>
            </li>
            </div>
            </div>
            <div class="col-md-9">
            <button type="button" class="btn btn-primary">Send </button>
            <button type="reset" class="btn btn-primary">Cancel</button>
            </div>
            </form>
            </div>
            <div class="tab-pane" id="exampleTabsIconFour" role="tabpanel">
            <div class="page-header">
            <h3 class="page-title">Task List</h3>
            <div class="page-header-actions">
            <button type="button" class="btn btn-primary" ><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add </button>
            </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
            <thead>
            <tr>
            <th>Task Description  </th>
            <th>Assigne</th>
            <th>Deadline </th>
            <th>Priority</th>
            <th>Options</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeA">
            <td>test 07/24/2019</td>
            <td>Adan Brown    </td>
            <td>07/28/2019   </td>
            <td>low </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            <div class="tab-pane" id="exampleTabsIconFive" role="tabpanel">
            <div class="page-header">
            <h3 class="page-title">Notes</h3>
            <div class="page-header-actions">
            <button type="button" class="btn btn-primary" ><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add </button>
            </div>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
            <thead>
            <tr>
            <th>Notes</th>
            <th>Options</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeA">
            <td>test </td>
            <td class="actions">
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
               data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
               data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
               data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
               data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            <div class="tab-pane" id="exampleTabsIconSix" role="tabpanel">
            <form>
            <div class="page-header">
            <h3 class="page-title">Grand Total :- ₵4,180</h3>
            <div class="page-header-actions">
            <button type="button" class="btn btn-primary" ><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add </button>
            <button type="button" class="btn btn-primary" ><i class="icon wb-plus mr-10" aria-hidden="true"></i>Print Voice </button>
            </div>
            </div>
            <div class="page-header">
            <h3 class="page-title">Payment</h3>
            </div>
            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
            <thead>
            <tr>
            <th>Title</th>
            <th>Amount</th>
            <th>Due</th>
            <th>Status</th>
            <th>Method</th>
            <th>ID</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="gradeA">
            <td>Deposit 2  </td>
            <td>₵3,000   </td>
            <td>- </td>
            <td>07/27/2019   </td>
            <td>Paid </td>
            <td>Cash </td>
            <td>2 </td>
            <td>- </td>
            </tr>
            <tr class="gradeA">
            <td>Deposit 2  </td>
            <td>₵3,000   </td>
            <td>- </td>
            <td>10/27/2019   </td>
            <td>Paid </td>
            <td>Cash </td>
            <td>2 </td>
            <td>- </td>
            </tr>
            <tr class="gradeA">
            <td>Deposit 1  </td>
            <td>₵3,000   </td>
            <td>- </td>
            <td>07/27/2019   </td>
            <td>Paid </td>
            <td>Cash </td>
            <td>2 </td>
            <td>- </td>
            </tr>
            <tr class="gradeA">
            <th>Total</th>
            <th>₵10,000 </th>
            <th>₵0  </th>
            <td> </td>
            <td> </td>
            <td> </td>
            <td></td>
            </tr>
            </tbody>
            </table>
            <div class="row" style="margin: auto;">
            <div class="col-lg-4 form-group">
            <h4 class="example-title">Total OutStanding : ₵-5,820</h4>     
            </div>
            <div class="col-lg-4 form-group">
            <h4 class="example-title"></h4>     
            </div>
            <div class="col-lg-2 form-group">
            <button type="button" class="btn btn-primary" id="validateButton2">
            <i class="hidden-sm-down" aria-hidden="true"></i> Total Pay
            </button> 
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>
         </div>
      </div>
      </form>
   </div>
          
</div>
 </div>
@endsection
	