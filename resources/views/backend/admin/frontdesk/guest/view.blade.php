@extends('backend.master')
@section('title',"Guest")
@section('style')
    <style>
        .vip {
            position: absolute;
            top:0;
            right: 0;
            background: green;
            font-weight: bold;
            padding: 5px 10px 5px 30px;
            color: white;
            border-radius:0 0 0 30px;
        }
    </style>
    @endsection
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Guest Details</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.guest')}}">
			 <button type="button" class="btn btn-primary" > Guest List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
	      @include('backend.partials.flash_message')
		  <div class="panel-body" style="background-color: #fff; ">
							<!-- Code Here-->
				<div class="panel-body" style="background-color: #fff; ">
         <div>
            <div class="panel">
               <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#activities" aria-controls="activities" role="tab"><i class="icon wb-order" aria-hidden="true"></i>Details <span class="badge badge-pill badge-danger">5</span></a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile" role="tab"><i class="icon fa-calendar" aria-hidden="true"></i>Reservation</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages" role="tab"><i class="icon fa-cc-visa" aria-hidden="true"></i>Payments</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#print" aria-controls="print" role="tab"><i class="icon fa-money" aria-hidden="true"></i>Print View</a></li>
                     <li class="nav-item dropdown" style="display: none;">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                        <div class="dropdown-menu" role="menu">
                           <a class="dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities" role="tab">Details <span class="badge badge-pill badge-danger">5</span></a>
                           <a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Reservation</a>
                           <a class="dropdown-item" data-toggle="tab" href="#messages" aria-controls="messages" role="tab">Payments</a>
                           <a class="dropdown-item" data-toggle="tab" href="#print" aria-controls="print" role="tab">Print View</a>
                        </div>
                     </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                        <ul class="list-group">
                           <!--here-->
                           <div class="row">
                              <div class="col-lg-3">
											@if($guest->vip)
                                                <div class="vip">VIP</div>
                                            @endif
                                 <!-- Page Widget -->
                                 <div class="card card-shadow text-center" style="height: 110px;">
								 
                                    <div class="card-block">
                                       <a class="avatar avatar-lg" href="javascript:void(0)">
                                       <img src="{{ asset('uploads/'.$guest->picture)}}" id="preview_img" data-oldimg="" class="img-thumbnail" style="max-height:300px;border-radius: 50%" >
                                       </a>
                                       <h4 class="profile-user">{{$guest->username}}</h4>
                                       <p class="profile-job"></p>
                                    </div>
                                 </div>
                                 <div class="card p-20">
                                    <h4 class="card-title">
                                       Contact Information
                                    </h4>
                                    <div class="card-block p-0">
                                       <p data-info-type="phone" class="mb-10 text-nowrap">
                                          <i class="icon wb-user mr-10"></i>
                                          <span class="text-break">Username : {{$guest->username}}
                                          <span>
                                          </span></span>
                                       </p>
                                       <p data-info-type="email" class="mb-10 text-nowrap">
                                          <i class="icon wb-envelope mr-10"></i>
                                          <span class="text-break">Email :{{$guest->email}}
                                          <span>
                                          </span></span>
                                       </p>
                                       <p data-info-type="fb" class="mb-10 text-nowrap">
                                          <i class="icon wb-mobile mr-10"></i>
                                          <span class="text-break">Mobile :{{$guest->phone}}
                                          <span>
                                          </span></span>
                                       </p>
                                       <p data-info-type="twitter" class="mb-10 text-nowrap">
                                          <i class="icon wb-emoticon mr-10"></i>
                                          <span class="text-break">Sex :{{$guest->sex()}}
                                          <span>
                                          </span></span>
                                       </p>
                                       <p data-info-type="address" class="mb-10 text-nowrap">
                                          <i class="icon wb-eye mr-10"></i>
                                          <span class="text-break"> Status :<span class="badge {{$guest->status?'badge-success':'badge-danger'}}">{{$guest->status?'ACTIVE':'INACTIVE'}}</span>
                                          </span>
                                          </span>
                                       </p>
                                       <p data-info-type="twitter" class="mb-10 text-nowrap">
                                          <i class="icon wb-emoticon mr-10"></i>
                                          <span class="text-break">Date of Birth :{{$guest->dob}}
                                          <span>
                                          </span></span>
                                       </p>
                                       <p data-info-type="twitter" class="mb-10 text-nowrap">
                                          <i class="icon wb-emoticon mr-10"></i>
                                          <span class="text-break">Age :<span class="text-muted"> {{\Carbon\Carbon::parse($guest->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}</span>
                                          <span>
                                          </span></span>
                                       </p>
                                       <p></p>
                                    </div>
                                 </div>
                                 <div>
                                    <div class="card">
                                       <h4 class="card-title">Identity Card</h4>
                                       <img src="{{ asset('uploads/'.$guest->id_card_image)}}" class="img-thumbnail" style="max-height: 200px" >
                                       <div class="card-block">
                                          <p class="card-text">License / Passport / Driving License / Pan Card</p>
                                          <a class="btn btn-primary card-link mr-5" href="javascript:void(0)" role="button">Upload</a>
                                          <a class="btn btn-default card-link" href="javascript:void(0)" role="button">Delete</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Page Widget -->
                              </div>
                              <div class="col-lg-9">
                                 <!-- Panel -->
                                 <div class="panel">
                                    <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                                       <!--  here all forms works-->
                                    <form action="{{route('backend.admin.frontdesk.guest.update',$guest->id)}}" method="post" enctype="multipart/form-data">
												{{csrf_field()}}
                                          <div class="row">
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">First Name<strong class="text-danger">*</strong></label>
                                                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$guest->first_name}}" required />
														<span class="text-danger">{{$errors->first('first_name')}}</span>                        
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicLastName">Last Name<strong class="text-danger">*</strong></label>
                                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{$guest->last_name}}" required />
														<span class="text-danger">{{$errors->first('last_name')}}</span>                        
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label">Gender<strong class="text-danger">*</strong></label>
                                                <div>
                                                   <div class="radio-custom radio-default radio-inline">
                                                      <input type="radio" id="inputBasicMale" name="sex" value="M" {{$guest->sex == 'M'?'checked':''}}>
                                                      <label for="inputBasicMale">Male</label>
                                                   </div>
                                                   <div class="radio-custom radio-default radio-inline">
                                                      <input type="radio" id="inputBasicFemale" name="sex" value="F" {{$guest->sex == 'F'?'checked':''}}>
                                                      <label for="inputBasicFemale">Female</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label">VIP</label>
                                                <div>
                                                   <input id="vip"  type="checkbox" data-plugin="switchery" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="vip" {{$guest->vip?'checked':''}}>
													<label class="pt-3" for="vip">Off</label>
												  </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">Email<strong class="text-danger">*</strong></label>
                                                <input id="inputBasicFirstName"type="email" class="form-control" required name="email" placeholder="email" value="{{$guest->email}}" />
														<span class="text-danger">{{$errors->first('email')}}</span>
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicLastName">Phone<strong class="text-danger">*</strong></label>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$guest->phone}}" required />
                                                        <span class="text-danger">{{$errors->first('phone')}}</span>                       
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">Type of ID</label>
                                                <input type="text" class="form-control" name="id_type" placeholder="ID Type" value="{{$guest->id_type}}" />                        
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicLastName">ID Number</label>
                                                <input type="text" class="form-control" name="id_number" placeholder="ID Number" value="{{$guest->id_number}}">                       
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicLastName">Remarks</label>
                                                <textarea  class="form-control" name="remarks" rows="2">{{$guest->remarks}}</textarea>                        
                                             </div>
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicLastName">Address</label>
                                                <textarea  class="form-control form-control-lg" rows="2" name="address">{{$guest->address}}</textarea>                        
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="form-group col-md-6">
                                                <label class="form-control-label" for="inputBasicFirstName">Date of Birth<strong class="text-danger">*</strong></label>
                                                <div class="input-group">
                                                   <span class="input-group-addon">
                                                   <i class="icon wb-calendar" aria-hidden="true"></i>
                                                   </span>
                                                  <input type="text" class="form-control form-control-lg" name="dob" id="dob" value="{{date('Y/m/d',strtotime($guest->dob))}}" required />
														<span class="text-danger">{{$errors->first('dob')}}</span>
                                                </div>
                                             </div>
                                             <div class="form-group col-md-6">
                                                <div class="form-group col-md-6">
                                                   <label class="form-control-label">Status</label>
                                                   <div>
                                                      <input id="status"  type="checkbox" data-plugin="switchery" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status" {{$guest->status?'checked':''}}>
														<label class="pt-3" for="status">Off</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <button type="submit" class="btn btn-primary">Submit </button>
                                                   <button type="reset" class="btn btn-default btn-outline">Reset</button>
                                                </div>
                                             </div>
                                          </div>
                                    </form>
                                       <!-- End Panel -->
                        </ul>
                        </div>
                        <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                        <div>
                        <h1 class="page-title" style="padding-bottom:10px; padding-left: 30px; padding-top: 30px; float: left;">Guests</h1>
                        <div> 
                        <div style="padding-bottom:10px; padding-left: 30px; padding-top: 30px; float: right;">
                        <button type="button" class="btn btn-sm btn-primary"><i class="icon wb-list" aria-hidden="true"></i>
                        <span class="text">GUEST LIST</span></button>
                        </div>
                        <div class="panel-body">
                        <div class="tablesaw-bar tablesaw-mode-swipe tablesaw-all-cols-visible">
                        <div class="tablesaw-sortable-switch tablesaw-bar-section">
                        <label>Sort:<span class="btn tablesaw-btn btn-select tablesaw-btn-select">
                        <span aria-hidden="true">Reservation Details ↑↓</span>
                        <select>
                        <option selected="" value="0_asc">Reservation Number</option>
                        <option value="0_desc">Reservation Date</option>
                        <option value="1_asc">Room Type</option>
                        <option value="1_desc">Check in</option>
                        <option value="2_asc">Check out</option>
                        <option value="2_desc">Payment Status</option>
                        <option value="3_asc">Reservation Status</option>
                        <option value="3_desc">Action</option>
                        </select></span></label>
                        </div>
                        <div class="tablesaw-advance">
                        <a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled"></a>
                        <a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right disabled"></a>
                        </div>
                        <div class="tablesaw-advance minimap" style="display: block;">
                        <ul class="tablesaw-advance-dots">
                        <li><i></i></li>
                        <li><i></i></li>
                        <li><i></i></li>
                        <li><i></i></li>
                        <li><i></i></li>
                        </ul>
                        </div>
                        </div>
                        <table class="tablesaw table-striped table-bordered table-hover tablesaw-sortable tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="tablesaw-7762">
                        <thead>
                        <tr>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Reservation Number<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Reservation Date<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Room Type<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Check in<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Check out<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Payment Status<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Reservation Status<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Action<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        </tr>
                        </thead>
                        <tbody>
                                    @php($reservations = $guest->reservations()->latest()->paginate(20))
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>

                                            <td><a class="" href="{{route('backend.admin.frontdesk.reservation.view',$reservation->id)}}">{{$reservation->uid}}</a></td>
                                            <td>{{$reservation->date}}</td>
                                            <td>{{$reservation->roomType->title}}</td>//not complete 
                                            <td>{{$reservation->check_in}}</td>
                                            <td>{{$reservation->check_out}}</td>
                                            <td class="text-center"><span class="badge badge-{{$reservation->paymentStatus()['color']}}">{{$reservation->paymentStatus()['status']}}</span></td>
                                            <td class="text-center"><span class="badge badge-{{$reservation->statusClass()}}">{{$reservation->status}}</span></td>
                                            <td class="text-right">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{route('backend.admin.frontdesk.reservation.view',$reservation->id)}}" class="btn btn-tsk"><i class="fa fa-eye"></i> View</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                        </table>
						{{ $reservations->links() }}
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                        <!--   Payment Sections-->
                        <div class="panel-body">
                        <div class="tablesaw-bar tablesaw-mode-swipe tablesaw-all-cols-visible">
                        <div class="tablesaw-sortable-switch tablesaw-bar-section">
                        <label>Sort:<span class="btn tablesaw-btn btn-select tablesaw-btn-select">
                        <span aria-hidden="true">Payment Details ↑↓</span>
                        <select>
                        <option selected="" value="0_asc">Payment No.</option>
                        <option value="0_desc">Payment Date</option>
                        <option value="1_asc">Transaction</option>
                        <option value="1_desc">Payment Method</option>
                        <option value="2_asc">Amount</option>
                        </select></span></label>
                        </div>
                        <div class="tablesaw-advance">
                        <a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro left disabled"></a>
                        <a href="#" class="btn tablesaw-nav-btn tablesaw-btn btn-micro right disabled"></a>
                        </div>
                        <div class="tablesaw-advance minimap" style="display: block;">
                        <ul class="tablesaw-advance-dots">
                        <li><i></i></li>
                        <li><i></i></li>
                        <li><i></i></li>
                        <li><i></i></li>
                        <li><i></i></li>
                        </ul>
                        </div>
                        </div>
                        <table class="tablesaw table-striped table-bordered table-hover tablesaw-sortable tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="tablesaw-7762">
                        <thead>
                        <tr>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Payment Number<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Payment Date<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Transaction<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Payment Method<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" 
                           class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                        <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                        </th>
                        </tr>
                        </thead>
                       <tbody>
                                    @php($payments = $guest->payment()->latest()->paginate(20))
                                    @forelse($payments as $key=>$payment)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$payment->created_at}}</td>
                                            <td>{{$payment->trx}}</td>
                                            <td>{{$payment->gateway->name}}</td>
                                            <td class="text-right">{{general_setting()->cur_sym}} {{number_format($payment->amount)}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-danger">No Payment!</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                        </table>
						{{ $payments->links() }}
                        </div>
                        </div>
                        <div class="tab-pane animation-slide-left" id="print" role="tabpanel">
                        <div>
                        <div class="panel-body container-fluid">
                        <div class="row">
                        <div class="col-lg-3">
                        <h3>Banquet</h3>
                        <address>
                        {{$guest->address}}
                        <br>
                        <abbr title="Mail">E-mail:</abbr>&nbsp;&nbsp;{{$guest->email}}
                        <br>
                        <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;{{$guest->phone}}
                        <br>
                        <abbr title="Fax">Fax:</abbr>&nbsp;&nbsp;800-692-7753
                        </address>
                        </div>
                        <div class="col-lg-3 offset-lg-6 text-right">
                        <h4>Invoice Info</h4>
                        <p>
                        <a class="font-size-20" href="javascript:void(0)">#5669626</a>
                        <br> To:
                        <br>
                        <span class="font-size-20">Machi</span>
                        </p>
                        <address>
                        795 Folsom Ave, Suite 600
                        <br> San Francisco, CA, 94107
                        <br>
                        <abbr title="Phone">P:</abbr>&nbsp;&nbsp;(123) 456-7890
                        <br>
                        </address>
                        <span>Invoice Date: January 20, 2017</span>
                        <br>
                        <span>Due Date: January 22, 2017</span>
                        </div>
                        </div>
                        <div class="page-invoice-table table-responsive">
                        <table class="table table-hover text-right">
                        <thead>
                        <tr>
                        <th class="text-center">#</th>
                        <th>Description</th>
                        <th class="text-right">Quantity</th>
                        <th class="text-right">Unit Cost</th>
                        <th class="text-right">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td class="text-center">
                        1
                        </td>
                        <td class="text-left">
                        Server hardware purchase
                        </td>
                        <td>
                        32
                        </td>
                        <td>
                        $75
                        </td>
                        <td>
                        $2152
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center">
                        2
                        </td>
                        <td class="text-left">
                        Office furniture purchase
                        </td>
                        <td>
                        15
                        </td>
                        <td>
                        $169
                        </td>
                        <td>
                        $4169
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center">
                        3
                        </td>
                        <td class="text-left">
                        Company Anual Dinner Catering
                        </td>
                        <td>
                        69
                        </td>
                        <td>
                        $49
                        </td>
                        <td>
                        $1260
                        </td>
                        </tr>
                        <tr>
                        <td class="text-center">
                        4
                        </td>
                        <td class="text-left">
                        Payment for Jan 2017
                        </td>
                        <td>
                        149
                        </td>
                        <td>
                        $12
                        </td>
                        <td>
                        $866
                        </td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <div class="text-right clearfix">
                        <div class="float-right">
                        <p>Sub - Total amount:
                        <span>$4800</span>
                        </p>
                        <p>VAT:
                        <span>$35</span>
                        </p>
                        <p class="page-invoice-amount">Grand Total:
                        <span>$4835</span>
                        </p>
                        </div>
                        </div>
                        <div class="text-right">
                        <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                        <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                        to payment</span>
                        </button>
                        <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline" onclick="javascript:window.print();">
                        <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
                        </button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <ul class="pagination pagination-gap" style="padding: 30px;">
                        <li class="disabled page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                        <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                        </ul>
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