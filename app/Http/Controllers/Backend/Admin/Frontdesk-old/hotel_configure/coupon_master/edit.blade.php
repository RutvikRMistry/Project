@extends('backend.master')
@section('title',"Create Coupon")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
		

	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Edit Coupons</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.coupon')}}">
			 <button type="button" class="btn btn-primary" > Coupon List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.frontdesk.hotel_configure.coupon.update',$couponMaster->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Offer Title</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="offer_title" placeholder="Offer Title" value="{{$couponMaster->offer_title}}">
						<span class="text-danger">{{$errors->first('offer_title')}}</span>
					</div>
                    <div class="form-group col-md-6">
                        <label><strong>Coupon Code</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="code" placeholder="Code" value="{{$couponMaster->code}}">
						<span class="text-danger">{{$errors->first('code')}}</span>
				   </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Period Start Date</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="period_start_time" id="period_start_time" placeholder="Period Start Date" value="{{date('Y/m/d H:i',strtotime($couponMaster->period_start_time))}}">
						<span class="text-danger">{{$errors->first('period_start_time')}}</span>
					</div>
                    <div class="form-group col-md-6">
                        <label><strong>Period End Date</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="period_end_time" id="period_end_time" placeholder="Period End Date" value="{{date('Y/m/d H:i',strtotime($couponMaster->period_end_time))}}">
						<span class="text-danger">{{$errors->first('period_end_time')}}</span>
					</div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Coupon Type</strong> <small class="text-danger">*</small></label>
                        <select class="form-control form-control-lg" name="type">
                            <option value="PERCENTAGE" {{$couponMaster->type === 'PERCENTAGE'?'selected':''}}>Percentage</option>
                            <option value="FIXED"  {{$couponMaster->type === 'FIXED'?'selected':''}}>Fixed</option>
                        </select>
						<span class="text-danger">{{$errors->first('type')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label><strong>Coupon Value</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="value" placeholder="Value" value="{{$couponMaster->value}}">
						<span class="text-danger">{{$errors->first('value')}}</span>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Minimum Amount</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="min_amount" placeholder="Minimum Amount" value="{{$couponMaster->min_amount}}">
						<span class="text-danger">{{$errors->first('min_amount')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label><strong>Max Amount</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="max_amount" placeholder="Max Amount" value="{{$couponMaster->max_amount}}">
						<span class="text-danger">{{$errors->first('max_amount')}}</span>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Limit Per User</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="limit_per_user" placeholder="Limit Per User" value="{{$couponMaster->limit_per_user}}">
						<span class="text-danger">{{$errors->first('limit_per_user')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label><strong>Limit Per Coupon</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="limit_per_coupon" placeholder="Limit Per Coupon" value="{{$couponMaster->limit_per_coupon}}">
						<span class="text-danger">{{$errors->first('limit_per_coupon')}}</span>
                    </div>
                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-md-12">
                        <label><strong>Include Room Type</strong> <small class="text-danger">*</small></label>
                        <br/>
                        @foreach($room_types as $room_type)
                            <div class="custom-control custom-checkbox d-inline">
                                <input type="checkbox" class="custom-control-input" {{in_array($room_type->id ,$couponMaster->roomType->pluck('id')->toArray())?'checked':''}} id="room_type_{{$room_type->id}}" name="room_type[]" value="{{$room_type->id}}">
                                <label class="custom-control-label pr-4" for="room_type_{{$room_type->id}}">{{$room_type->title}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-row justify-content-center">

                    <div class="form-group col-md-12">
                        <label><strong>Paid Service</strong> <small class="text-danger">*</small></label>
                        <br/>
                        @foreach($paid_services as $paid_service)
                            <div class="custom-control custom-checkbox d-inline">
                                <input type="checkbox" class="custom-control-input" {{in_array($paid_service->id ,$couponMaster->paidService->pluck('id')->toArray())?'checked':''}}  >
                                <label class="custom-control-label pr-4" for="paid_service_{{$paid_service->id}}">{{$paid_service->title}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-12">
                        <label><strong>Description</strong><small> (optional)</small> </label>
                        <textarea  class="form-control form-control-lg" rows="4" name="description" id="description" placeholder="Description">{{ $couponMaster->description }}</textarea>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-12">
                        <label><strong>Offer Image</strong> </label>

                        <div class="mb-3">
                            <img src="{{asset('uploads/'.$couponMaster->image)}}" style="max-height: 150px">
                        </div>
                        <input type="file" class="form-control form-control-lg" name="image" >
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <label for="inputAddress2" class=" mr-5">Status</label>
                        <input id="status" data-plugin="switchery" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status" {{$couponMaster->status?'checked':''}} >
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <hr/>
                        <button type="reset" class="btn btn-outline-tsk"><i class="fa fa-refresh"></i> &nbsp;Reset</button>
                        <button type="submit" class="btn btn-tsk"><i class="fa fa-save"></i> &nbsp;Update</button>
                    </div>
                </div>
            </form>
			 </div>
		  </div>
	   </div>
	</div>


 </div>

@endsection
