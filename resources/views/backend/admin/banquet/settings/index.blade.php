@extends('backend.master')
@section('title',"Setting")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Setting</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
        <div class="nav-tabs-horizontal" data-plugin="tabs">
		<form action="{{route('backend.admin.banquet.setting.update',$Setting->id)}}" method="post">
			{{csrf_field()}}
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsIconOne"
                  aria-controls="exampleTabsIconOne" role="tab" ><i class="icon wb-settings m-0" aria-hidden="true"></i>Settings</a></li>
               <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsIconTwo"
                  aria-controls="exampleTabsIconTwo" role="tab"><i class="material-icons md-0" aria-hidden="true"></i>Email</a></li>
            </ul>
            <div class="tab-content pt-15">
               <div class="tab-pane active" id="exampleTabsIconOne" role="tabpanel">
                  <div class="row" style="margin:auto;">
                     <div class="col-md-6">
                        <div class="form-group required  ">
                           <label for="site_logo_file" class="control-label">Site Logo</label> 
                           <div class="controls row">
                              <div class="col-xs-12">
                                 <div data-provides="fileinput" class="fileinput fileinput-new">
                                    <div data-trigger="fileinput" class="fileinput-preview thumbnail form_Blade"><img id="image-preview" width="300" style="display: none;"> <img src="https://saas.banquetcrm.com/uploads/site/blogo_1574859699.png" alt="Site Logo" class="ima-responsive"></div>
                                     <input type="file" id="site_logo_file" name="site_logo"> 
										<span class="text-danger">{{$errors->first('site_logo')}}</span>
								</div>
                              </div>
                              <div class="col-md-12"><span class="help-block"></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group required  ">
                           <label for="pdf_logo_file" class="control-label">PDF logo</label> 
                           <div class="controls row">
                              <div class="col-xs-12">
                                 <div data-provides="fileinput" class="fileinput fileinput-new">
                                    <div data-trigger="fileinput" class="fileinput-preview thumbnail form_Blade"><img id="image-preview" width="300" style="display: none;"> <img src="https://saas.banquetcrm.com/uploads/site/blogo_1574859699.png" alt="PDF Logo" class="ima-responsive"></div>
                                    <input type="file" id="pdf_logo_file" name="pdf_logo">
									<span class="text-danger">{{$errors->first('pdf_logo')}}</span>
                                 </div>
                              </div>
                              <div class="col-md-12"><span class="help-block"></span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row" >
                     <div class="col-lg-6">
                        <h5>Site name</h5>
                        <input type="text" class="form-control" placeholder="Banquet" name="site_name" value="{{$Setting->site_name}}">
						<span class="text-danger">{{$errors->first('site_name')}}</span>
                     </div>
                     <div class="col-lg-6">
                        <h5>Address</h5>
                        <input type="text" class="form-control" placeholder="B 406, Aagam Shopping World, Vesu" name="address" value="{{$Setting->address}}">
							<span class="text-danger">{{$errors->first('address')}}</span>
					 </div>
                  </div>
                  <br>
                  <div class="row" >
                     <div class="col-lg-6">
                        <h5>Site email</h5>
                        <input type="text" class="form-control" placeholder="evasmith363@gmail.com" name="site_email" value="{{$Setting->site_email}}">
						<span class="text-danger">{{$errors->first('site_email')}}</span>
					 </div>
                     <div class="col-lg-6">
                        <h5>Phone</h5>
                        <input type="text" class="form-control" placeholder="00919727785703" name="phone" value="{{$Setting->phone}}">
						<span class="text-danger">{{$errors->first('phone')}}</span>
					 </div>
                  </div>
                  <br>
                  <div class="row" >
                     <div class="col-lg-6">
                        <h5>Currency position</h5>
                        <select class="form-control" data-plugin="select2" name="currency_position">
                           <optgroup label="Please Select">
                              <option value="left" {{$Setting->currency_position == 'left'?'selected': ''}}>Left</option>
                              <option value="right" {{$Setting->currency_position == 'right'?'selected': ''}}>Right</option>
                           </optgroup>
                        </select>
						<span class="text-danger">{{$errors->first('currency_position')}}</span>
                     </div>
                     <div class="col-lg-6">
                        <h5>Currency</h5>
                        <select class="form-control" data-plugin="select2" name="currency">
                              <option value="">--Select--</option>
							@foreach($currency as $cur)
                              <option value="{{$cur->id}}" {{$Setting->currency == $cur->id?'selected': ''}}>{{$cur->name}}&nbsp;({{$cur->iso_code}})&nbsp;({{$cur->symbol}})</option>
                            @endforeach 
                        </select>
						<span class="text-danger">{{$errors->first('currency')}}</span>
                     </div>
                  </div>
                  <br>
                  <div class="row" >
                     <div class="col-lg-6">
                        <h5>GST(%)</h5>
                        <input type="text" class="form-control" placeholder="10" name="sales_tax" value="{{$Setting->sales_tax}}">
						<span class="text-danger">{{$errors->first('sales_tax')}}</span>
                     </div>
                  </div>
                  <br>
                  <div class="col-lg-6 ">
                     <h5>Date format</h5>
                  </div>
                  <div class="row computed_props">
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" v-model="mdy" class="icheckbox-primary" id="md,y" 
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              value="mdy" />
                           <label for="md,y"> August 1,2020 </label>
                        </li>
                     </div>
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" v-model="y-d-m" class="icheckbox-primary" id="y-d-m" 
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              value="y-d-m" />
                           <label for="y-d-m"> 2020-01-08 </label>
                        </li>
                     </div>
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" v-model="d.m.y" class="icheckbox-primary" id="D.m.y" 
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              value="d.m.y" />
                           <label for="D.m.y"> 01.08.2020. </label>
                        </li>
                     </div>
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" v-model="m/d/Y" class="icheckbox-primary" id="m/d/Y" 
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              value="m/d/Y" />
                           <label for="m/d/Y"> 08/01/2020</label>
                        </li>
                     </div>
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" v-model="d/m/y" class="icheckbox-primary" id="d/m/y" 
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                               value="d/m/y"/>
                           <label for="d/m/y"> 01/08/2020 </label>
                        </li>
                     </div>
                  </div>
                  <div class="row computed_props" >
                     <div class="col-lg-1 form-group">
                        <label class="example-title">Custom format </label>
                     </div>
                     <div class="col-lg-4 form-group">
                        <input type="text" class="form-control" placeholder="m/d/Y" v-model="date_format" name="date_format" value="{{$Setting->date_format}}">
						<span class="text-danger">{{$errors->first('date_format')}}</span>
					</div>
                  </div>
                  <div class="col-lg-6 form-group">
                     <h5>Time  format</h5>
                  </div>
                  <div class="row" >
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" class="icheckbox-primary" id="h:m"
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                              checked />
                           <label for="h:m">  7:10 am  </label>
                        </li>
                     </div>
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" class="icheckbox-primary" id="h:m:a"
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                               />
                           <label for="h:m:a"> 7:10 AM</label>
                        </li>
                     </div>
                     <div class="col-lg-2 form-group">
                        <li class="mb-15">
                           <input type="radio" class="icheckbox-primary" id="h:m:p" 
                              data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                               />
                           <label for="h:m:p"> 07:10</label>
                        </li>
                     </div>
                  </div>
                  <div class="row" >
                     <div class="col-lg-1 form-group">
                        <label class="example-title">Custom format </label>
                     </div>
                     <div class="col-lg-4 form-group">
                        <input type="text" class="form-control" placeholder="H:i" name="time_format" value="{{$Setting->time_format}}">
						<span class="text-danger">{{$errors->first('time_format')}}</span>
					 </div>
                  </div>
                  <div class="form-group row"  style="margin: auto;">
                     <div class="col-lg-9 form-group">
                        <h5>Documentation on date and time formatting.</h5>
                     </div>
                  </div>
                  <div class="row" >
                     <div class="col-lg-6 form-group">
                        <button type="submit" class="btn btn-primary">OK </button>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="exampleTabsIconTwo" role="tabpanel">
                  <div class="row" >
                     <div class="col-lg-3 form-group">
                        <h5>Email server host</h5>
                        <input type="text" class="form-control" placeholder="" name="email_host" value="{{$Setting->email_host}}">
						<span class="text-danger">{{$errors->first('email_host')}}</span>
                     </div>
                     <div class="col-lg-3 form-group">
                        <h5>Email server port</h5>
                        <input type="text" class="form-control" placeholder="" name="email_port" value="{{$Setting->email_port}}">
						<span class="text-danger">{{$errors->first('email_port')}}</span>
                     </div>
                     <div class="col-lg-3 form-group">
                        <h5>Email server username</h5>
                        <input type="text" class="form-control" placeholder="" name="email_username" value="{{$Setting->email_username}}">
						<span class="text-danger">{{$errors->first('email_username')}}</span>
                     </div>
                     <div class="col-lg-3 form-group">
                        <h5>Email server password</h5>
                        <input type="text" class="form-control" placeholder="" name="email_password" value="{{$Setting->email_password}}">
						<span class="text-danger">{{$errors->first('email_password')}}</span>
                     </div>
                  </div>
                  <div class="row" >
                     <div class="col-md-9">
                        <button type="submit" class="btn btn-primary">OK</button>
                     </div>
                  </div>
                  <br>
               </div>
            </div>
		</form>
         </div>
      </div>
   </div>
</div>
 </div>
@endsection
	