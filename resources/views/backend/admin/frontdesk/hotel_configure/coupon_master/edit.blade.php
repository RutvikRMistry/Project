@extends('backend.master')
@section('title',"EditCoupon Master")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">EditCoupon Master</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.coupon')}}">
			 <button type="button" class="btn btn-primary" > Coupon List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			<div class="card">
    
        <div class="card-body">
           <form action="{{route('backend.admin.frontdesk.hotel_configure.coupon.update',$couponMaster->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Offer Title <strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="offer_title" placeholder="Offer Title" value="{{$couponMaster->offer_title}}" required />
							<span class="text-danger">{{$errors->first('offer_title')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Coupons Code<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="code" placeholder="Code" value="{{$couponMaster->code}}" required />
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
							value="{{date('Y/m/d H:i'),strtotime($couponMaster->period_start_time)}}" required />
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
							value="{{date('Y/m/d H:i'),strtotime($couponMaster->period_end_time)}}" required />
							<span class="text-danger">{{$errors->first('period_end_time')}}</span>
						 </div>
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Coupons Type<strong class="text-danger">*</strong></h5>
						  <select class="form-control" name="type" required>
                            <option value="PERCENTAGE" {{$couponMaster->type === 'PERCENTAGE'?'selected':''}}>Percentage</option>
                            <option value="FIXED"  {{$couponMaster->type === 'FIXED'?'selected':''}}>Fixed</option>
                        </select>
						 <span class="text-danger">{{$errors->first('type')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Coupons Value<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="value" placeholder="Value" value="{{$couponMaster->value}}" required />
						 <span class="text-danger">{{$errors->first('value')}}</span>
					  </div>
				   </div>
				   <br>
				   <!-- End Panel Basic -->
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Maximum Amount<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="min_amount" placeholder="Minimum Amount" value="{{$couponMaster->min_amount}}" required />
							<span class="text-danger">{{$errors->first('min_amount')}}</span>						 
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Minimum Amount<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="max_amount" placeholder="Max Amount" value="{{$couponMaster->max_amount}}" required />
						 <span class="text-danger">{{$errors->first('max_amount')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Limit Per User<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="limit_per_user" placeholder="Limit Per User" value="{{$couponMaster->limit_per_user}}" required />
							<span class="text-danger">{{$errors->first('limit_per_user')}}</span>						 
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Limit Per Coupons:<strong class="text-danger">*</strong></h5>
						 <input type="text" class="form-control " name="limit_per_coupon" placeholder="Limit Per Coupon" value="{{$couponMaster->limit_per_coupon}}" />        
						<span class="text-danger">{{$errors->first('limit_per_coupon')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="col-lg-6 ">
					  <h5>Include Room Type<strong class="text-danger">*</strong></h5>
				   </div>
				   <div class="row">
				   @foreach($room_types as $room_type)
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="room_type_{{$room_type->id}}" name="room_type[]" value="{{$room_type->id}}"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
								{{in_array($room_type->id ,$couponMaster->roomType->pluck('id')->toArray())?'checked':''}} 							   />
							<label for="room_type_{{$room_type->id}}">{{$room_type->title}}</label>
						 </li>
					  </div>
					@endforeach
				   </div>
				   <div class="col-lg-6 ">
					  <h5>Paid Service<strong class="text-danger">*</strong></h5>
				   </div>
				   <div class="row">
				   @foreach($paid_services as $paid_service)
					  <div class="col-lg-3 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="paid_service_{{$paid_service->id}}" name="paid_service[]" value="{{$paid_service->id}}"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
								{{in_array($paid_service->id ,$couponMaster->paidService->pluck('id')->toArray())?'checked':''}} />
							<label for="paid_service_{{$paid_service->id}}">{{$paid_service->title}}</label>
						 </li>
					  </div>
					@endforeach
				   </div>
				   <div class="row">
					  <div class="col-lg-12">
						 <h5>Description:(optional)</h5>
						 <div unselectable="on" >
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
						 <textarea class="form-control" rows="4" name="description" id="description" placeholder="Description">{{ $couponMaster->description }}</textarea>
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
								  {{$couponMaster->status?'checked':''}} />
							</div>
							<label class="pt-3" for="status">Off</label>
						 </div>
					  </div>
					  <br>
					  <div class="col-lg-4 ">
						 <h4 >
						 Upload Id:</h5>  
						<img src="{{asset('uploads/'.$couponMaster->image)}}" style="max-height: 150px">						 
						 <input type="file" class="form-control" name="image">
					  </div>
				   </div>
				   <br>        
				   <div class="row" >
					  <div class="col-lg-10">
						 <button type="reset" class="btn btn-outline-tsk"><i class="fa fa-refresh"></i> Reset</button>
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Update</button>
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#period_start_time').datetimepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy/mm/dd HH:MM',
                footer: true, modal: true
            });
            $('#period_end_time').datetimepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy/mm/dd HH:MM',
                footer: true, modal: true
            });
        });
        bkLib.onDomLoaded(function() {
            new nicEditor({
                iconsPath : '{{asset('assets/plugin/niceditor/nicEditorIcons.gif')}}',
                fullPanel : true
            }).panelInstance('description');
        });
    </script>
@endsection