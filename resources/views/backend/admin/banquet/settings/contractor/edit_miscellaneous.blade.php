@extends('backend.master')
@section('title',"Edit Miscellaneous")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	

		<div class="page-main">
		   <div class="page-header">
			  <h1 class="page-title">Edit Miscellaneous</h1>
		   </div>
		   <div style="width: 100%; padding: 30px;">
			  <div class="panel-body" style="background-color: #fff; ">
				 <header class="panel-heading">
				 <div>
				<form action="{{route('backend.admin.banquet.sttings.contractor.miscellaneous.update',$miscellaneous->id)}}" method="post">
					{{csrf_field()}}
					<div class="row">
				   <div class="col-lg-4 form-group">
					  <h5>Name:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control" placeholder="Name" name="name" value="{{$miscellaneous->name}}" required />
					  <span class="text-danger">{{$errors->first('name')}}</span>
				   </div>
				   <div class="col-lg-4 form-group">
					  <h5>Email ID:<span class="text-danger">*</span></h5>
					  <input type="email" class="form-control" placeholder="email" name="email" value="{{$miscellaneous->email}}" required />
					  <span class="text-danger">{{$errors->first('email')}}</span>
				   </div>
				   <div class="col-lg-4 form-group">
					  <h5>Phone No:<span class="text-danger">*</span></h5>
					  <input type="number" class="form-control" placeholder="phone" name="phone" value="{{$miscellaneous->phone}}" required />
					  <span class="text-danger">{{$errors->first('phone')}}</span>
				   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Address:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder="address" name="address" value="{{$miscellaneous->address}}" required />
				  <span class="text-danger">{{$errors->first('address')}}</span>
               </div>
            </div>
				<header class="panel-heading">
				   <div class="panel-actions"></div>
				   <h4><b>Packages</b></h4>
				</header>
				
		<div class="add_packeage">
			<div class="package-section" number='0'>
				<div class="row package">
				   <div class="col-lg-4 form-group">
					  <h5> Package  Name:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control package_name" placeholder=" " name="package_name[0]"  required />
					  <span class="text-danger">{{$errors->first('package_name.n')}}</span>
				   </div>
				   <div class="col-lg-4 form-group">
					  <h5>Price:<span class="text-danger">*</span></h5>
					  <input type="number" class="form-control price" data-plugin="asSpinner" name="price[0]"  required />
					  <span class="text-danger">{{$errors->first('price.n')}}</span>
				   </div>
				   <div class="col-lg-4 form-group">
					  <h5>Person:</h5>
					  <input type="text" class="form-control person" data-plugin="asSpinner" name="person[0]"  required />
					  <span class="text-danger">{{$errors->first('person.n')}}</span>
				   </div>
				</div>
				<br>
				<div class="row package">
				   <div class="col-lg-4 form-group">
					  <h5>Service</h5>
					  <input type="text" class="form-control services" placeholder=" " name="services[0]" required>
					  <span class="text-danger">{{$errors->first('services.n')}}</span>
				   </div>
				</div>
			</div>
            <br>
		</div>
					<div class="row" >
					   <div class="col-md-9">
						  <button type="button" class="btn btn-primary" id="add_packeage1">Add</button>
					   </div>
					</div>
					<header class="panel-heading">
					   <div class="panel-actions"></div>
					   <h4><b>Terms & Conditions<b></h4>
					</header>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Contract Terms:</h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Contract Terms" name="miscellaneous_contract_terms">{{$miscellaneous->miscellaneous_contract_terms}}</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Payment:</h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Payment" name="miscellaneous_payment">{{$miscellaneous->miscellaneous_payment}}</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Arrangements:</h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Arrangements" name="miscellaneous_arrangements">{{$miscellaneous->miscellaneous_arrangements}}</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Cancellation:</h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Cancellation" name="miscellaneous_cancellation">{{$miscellaneous->miscellaneous_cancellation}}</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Reschedule:</h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Reschedule" name="reschedule">{{$miscellaneous->reschedule}}</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Force Majeure:
						  </h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Force Majeure" name="force_majeure">{{$miscellaneous->force_majeure}}
								</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Indemnification:
						  </h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Indemnification" name="indemnification">{{$miscellaneous->indemnification}}
								</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Material Guarantee
							 :
						  </h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Material Guarantee" name="material_guarantee">{{$miscellaneous->material_guarantee}}
								</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Binding Arbitration
							 :
						  </h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Binding Arbitration" name="binding_arbitration">{{$miscellaneous->binding_arbitration}}
								</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-12">
						  <h5>Approval
							 :
						  </h5>
						  <div class="form-group row">
							 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
							 <div class="col-md-12">
								<textarea class="form-control" rows="3" placeholder="Approval" name="approval">{{$miscellaneous->approval}}
								</textarea>
							 </div>
						  </div>
					   </div>
					</div>
					<div class="row" >
					   <div class="col-md-9">
						  <button type="button" class="btn btn-primary">Back </button>
						  <button type="submit" class="btn btn-default btn-outline">Ok</button>
					   </div>
					</div>
				</form>
				 </div>
			  </div>
				   
		   </div>
		</div>
		</div>
		</div>
		</div>



 </div>
<script type="text/javascript">
	$(document).ready(function(){
		
		$(document).on('click', '#add_packeage1', function(){
			
			var vhtml = $('.add_packeage').find('.package-section:first').clone();
			var vLength = $('.add_packeage').find('.package-section').length;
			var lLength = $('.add_packeage').find('.package-section:last').attr('number');
			if(typeof lLength != "undefined"){
				var n = parseInt(lLength)+1;
			}else{
				var n = (parseInt(vLength) - 1)+1;
			}			
			$('.add_packeage').append(vhtml);
			$('.add_packeage').find('.package-section:last').attr('number',n);
			$('.add_packeage').find('.package-section:last .package_name:last').attr('name','package_name['+n+']');
			$('.add_packeage').find('.package-section:last .package_name:last').val("");
			$('.add_packeage').find('.package-section:last .price:last').attr('name','price['+n+']');
			$('.add_packeage').find('.package-section:last .price:last').val("");
			$('.add_packeage').find('.package-section:last .person:last').attr('name','price['+n+']');
			$('.add_packeage').find('.package-section:last .person:last').val("");
			$('.add_packeage').find('.package-section:last .services:last').attr('name','price['+n+']');
			$('.add_packeage').find('.package-section:last .services:last').val("");
			
			
		});
		
	});
 </script>
@endsection
	