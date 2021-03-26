@extends('backend.master')
@section('title',"Create Coupon")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
		

	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Create Coupons</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.coupon')}}">
			 <button type="button" class="btn btn-primary" > Coupon List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.frontdesk.hotel_configure.coupon.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Offer Title <strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="offer_title" placeholder="Offer Title" value="{{old('offer_title')}}">
							<span class="text-danger">{{$errors->first('offer_title')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Coupons Code<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="code" placeholder="Code" value="{{old('code')}}">
						 <span class="text-danger">{{$errors->first('code')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Period Start Date<strong class="text-danger">*</strong></h5>
						 <div class="input-group">
							<span class="input-group-addon">
							<i class="icon wb-calendar" aria-hidden="true"></i>
							</span>
							<input type="text" class="form-control" data-plugin="datepicker" data-multidate="true" name="period_start_time" id="period_start_time" 
							value="{{old('period_start_time',date('Y/m/d'))}}">
							<span class="text-danger">{{$errors->first('period_start_time')}}</span>
						 </div>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Period End Date<strong class="text-danger">*</strong></h5>
						 <div class="input-group">
							<span class="input-group-addon">
							<i class="icon wb-calendar" aria-hidden="true"></i>
							</span>
							<input type="text" class="form-control" data-plugin="datepicker" data-multidate="true" name="period_end_time" id="period_end_time"
							value="{{old('period_end_time',date('Y/m/d'))}}">
							<span class="text-danger">{{$errors->first('period_end_time')}}</span>
						 </div>
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Coupons Type<strong class="text-danger">*</strong></h5>
						 <select class="form-control" data-plugin="select2" name="type" >
						 <option value="" >--Select--</option>
                        <option value="PERCENTAGE" {{old('type') =='PERCENTAGE'?'selected':''}} >Percentage</option>
                        <option value="FIXED" {{old('type') =='FIXED'?'selected':''}} >Fixed</option>
							
						 </select>
						 <span class="text-danger">{{$errors->first('type')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Coupons Value<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="value" placeholder="Value" value="{{old('value')}}">
						 <span class="text-danger">{{$errors->first('value')}}</span>
					  </div>
				   </div>
				   <br>
				   <!-- End Panel Basic -->
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Maximum Amount<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="min_amount" placeholder="Minimum Amount" value="{{old('min_amount')}}">
							<span class="text-danger">{{$errors->first('min_amount')}}</span>						 
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Minimum Amount<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="max_amount" placeholder="Max Amount" value="{{old('max_amount')}}">
						 <span class="text-danger">{{$errors->first('max_amount')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Limit Per User<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="limit_per_user" placeholder="Limit Per User" value="{{old('limit_per_user')}}">
							<span class="text-danger">{{$errors->first('limit_per_user')}}</span>						 
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Limit Per Coupons:<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="limit_per_coupon" placeholder="Limit Per Coupon" value="{{old('limit_per_coupon')}}">        
						<span class="text-danger">{{$errors->first('limit_per_coupon')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="col-lg-6 ">
					  <h5>Include Room Type<strong class="text-danger">*</strong></h5>
				   </div>
				   <div class="row">
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="room_type_1" name="room_type[]" value="1"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Standard Room - 1 Double Bed</label>
						 </li>
					  </div>
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="room_type_2" name="room_type[]" value="2"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Standard Room - 2 Double Beds</label>
						 </li>
					  </div>
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="room_type_3" name="room_type[]" value="3"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Family Room - 1 Double Bed, 1 Queen Bed</label>
						 </li>
					  </div>
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="room_type_4" name="room_type[]" value="4"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">list your hospital</label>
						 </li>
					  </div>
				   </div>
				   <div class="col-lg-6 ">
					  <h5>Paid Service<strong class="text-danger">*</strong></h5>
				   </div>
				   <div class="row">
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="paid_service_1" name="paid_service[]" value="1"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Laundary</label>
						 </li>
					  </div>
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="paid_service_2" name="paid_service[]" value="2"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Water Bottle</label>
						 </li>
					  </div>
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Breakfast</label>
						 </li>
					  </div>
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" />
							<label for="inputUnchecked">Dinner</label>
						 </li>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-lg-12">
						 <h5>Description:(optional)</h5>
						 <div unselectable="on" style="width: 970px;">
							<div class=" nicEdit-panelContain" unselectable="on" style="overflow: hidden; width: 100%; border: 1px solid rgb(204, 204, 204); background-color: rgb(239, 239, 239);">
							   <div class=" nicEdit-panel" unselectable="on" style="margin: 0px 2px 2px; zoom: 1; overflow: hidden;">
								  <div style="float: left; margin-top: 2px; display: none;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -432px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -54px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -126px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -342px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -162px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -72px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -234px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -144px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -180px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -324px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
									 <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;">
										<div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
										   <div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
										   <div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Size...</div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
									 <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;">
										<div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
										   <div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
										   <div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Family...</div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
									 <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;">
										<div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
										   <div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
										   <div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Format...</div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -108px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -198px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -360px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -468px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -378px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -396px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -36px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -18px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -288px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -306px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -270px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -216px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div unselectable="on" style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -90px 0px;"></div>
										</div>
									 </div>
								  </div>
								  <div style="float: left; margin-top: 2px;">
									 <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
										<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: 0px 0px;"></div>
										</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
						 <textarea class="form-control" rows="4" name="description" id="description" placeholder="Description"></textarea>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-4 ">
						 <h4 >
						 Status:</h5>     
						 <div class="input-group">
							<div class="float-left mr-20">
							   <input type="checkbox" id="status" name="status" data-plugin="switchery"
								  />
							</div>
							<label class="pt-3" for="status">Off</label>
						 </div>
					  </div>
					  <br>
					  <div class="col-lg-4 ">
						 <h4 >
						 Upload Id:</h5>     
						 <input type="file" class="form-control" name="image">
					  </div>
				   </div>
				   <br>        
				   <div class="row" >
					  <div class="col-lg-10">
						 <button type="reset" class="btn btn-outline-tsk"><i class="fa fa-refresh"></i> Reset</button>
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					  </div>
				   </div>
				</form>
			 </div>
		  </div>
	   </div>
	</div>


 </div>

@endsection
