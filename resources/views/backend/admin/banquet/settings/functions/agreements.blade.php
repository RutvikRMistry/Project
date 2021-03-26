@extends('backend.master')
@section('title',"Contract Agreement & Banquet Policies")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Contract Agreement & Banquet Policies</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
	@include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.function.agreement.update',$term->id)}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-md-12">
                  <h5>Food and Beverages
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Food and Beverages" name="food_beverage" >{{$term->food_beverage}}</textarea>
						<span class="text-danger">{{$errors->first('food_beverage')}}</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Administrative Fees
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Administrative Fees" name="administrative_fees">{{$term->administrative_fees}}</textarea>
						<span class="text-danger">{{$errors->first('administrative_fees')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Function Room Assignments
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Function Room Assignments" name="function_room_assignement">{{$term->function_room_assignement}}</textarea>
						<span class="text-danger">{{$errors->first('function_room_assignement')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Guarantees
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Guarantees" name="guarantees">{{$term->guarantees}}</textarea>
						<span class="text-danger">{{$errors->first('guarantees')}}</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Menu Pricing
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Menu Pricing" name="menu_pricing">{{$term->menu_pricing}}</textarea>
						<span class="text-danger">{{$errors->first('menu_pricing')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Decoration
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Decoration" name="decoration">{{$term->decoration}}</textarea>
						<span class="text-danger">{{$errors->first('decoration')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Security / Parking
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Security / Parking" name="security_parking">{{$term->security_parking}}</textarea>
						<span class="text-danger">{{$errors->first('security_parking')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Damages
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Damages" name="damages">{{$term->damages}}</textarea>
						<span class="text-danger">{{$errors->first('damages')}}</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Services / Fees
                     :<span class="text-danger">*</span>
                  </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Service_Fees" name="service_fees">{{$term->service_fees}}</textarea>
						<span class="text-danger">{{$errors->first('service_fees')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="Submit" class="btn btn-primary">Update </button>
               </div>
            </div>
            <br>
		</form>
        </div>
      </div>
             
   </div>
</div>
</div>

 </div>

@endsection
	