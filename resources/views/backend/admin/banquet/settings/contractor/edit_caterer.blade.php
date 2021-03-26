@extends('backend.master')
@section('title',"Edit Caterer")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	

<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Caterers</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.contractor.caterer.update',$cater->id)}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder="" name="name" value="{{$cater->name}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Email ID:<span class="text-danger">*</span></h5>
                  <input type="email" class="form-control" placeholder="" name="email" value="{{$cater->email}}" required />
				  <span class="text-danger">{{$errors->first('email')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Phone No:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="phone" value="{{$cater->phone}}" required />
				  <span class="text-danger">{{$errors->first('phone')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Address:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="address" value="{{$cater->address}}" required />
				  <span class="text-danger">{{$errors->first('address')}}</span>
               </div>
            </div>
            <header class="panel-heading">
               <div class="panel-actions"></div>
               <h4><b>Packages<b></h4>
            </header>
            <br>
		<div class="add_packeage">
			<div class="package-section" number='0'>
				<div class="row package">
				   <div class="col-lg-4 form-group">
					  <h5> Package  Name:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control package_name" placeholder=" " name="package_name[0]"  required />
					  <span class="text-danger">{{$errors->first('package_name.0')}}</span>
				   </div>
				   <div class="col-lg-4 form-group">
					  <h5>Price:<span class="text-danger">*</span></h5>
					  <input type="number" class="form-control price" data-plugin="asSpinner" name="price[0]" required  />
					  <span class="text-danger">{{$errors->first('price.0')}}</span>
				   </div>
				   <div class="col-lg-4 form-group">
					  <h5>Person:</h5>
					  <input type="number" class="form-control person" data-plugin="asSpinner" name="person[0]"  required />
					  <span class="text-danger">{{$errors->first('person.0')}}</span>
				   </div>
				</div>
				<br>
				<div class="row package">
				   <div class="col-lg-4 form-group">
					  <h5>Service</h5>
					  <input type="text" class="form-control services" placeholder=" " name="services[0]" required />
					  <span class="text-danger">{{$errors->first('services.0')}}</span>
				   </div>
				</div>
			</div>
            <br>
			
		</div>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary" id="add_packeage1">Add</button>
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
                        <textarea class="form-control" rows="3" placeholder="Contract Terms" name="caterer_contract_terms">{{$cater->caterer_contract_terms}}</textarea>
						<span class="text-danger">{{$errors->first('caterer_contract_terms')}}</span>
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
                        <textarea class="form-control" rows="3" placeholder="Payment" name="caterer_payment">{{$cater->caterer_payment}}</textarea>
						<span class="text-danger">{{$errors->first('caterer_payment')}}</span>
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
                        <textarea class="form-control" rows="3" placeholder="Staff Charge" name="caterer_staff_charge">{{$cater->caterer_staff_charge}}</textarea>
						<span class="text-danger">{{$errors->first('caterer_staff_charge')}}</span>
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
						<textarea class="form-control" rows="3" placeholder="Guest Number" name="caterer_guest_number">{{$cater->caterer_guest_number}}</textarea>
						<span class="text-danger">{{$errors->first('caterer_guest_number')}}</span>
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
                        <textarea class="form-control" rows="3" placeholder="Additional Meals" name="caterer_additional_meal">{{$cater->caterer_additional_meal}}</textarea>
						<span class="text-danger">{{$errors->first('caterer_additional_meal')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Dietary Requirements:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Dietary Requirements" name="dietary_requirements">{{$cater->dietary_requirements}} </textarea>
						<span class="text-danger">{{$errors->first('dietary_requirements')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Additional Beverages:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Additional Beverages" name="additional_beverages">{{$cater->additional_beverages}}</textarea>
						<span class="text-danger">{{$errors->first('additional_beverages')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Food and Beverages:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Food and Beverages"name="food_and_beverages">{{$cater->food_and_beverages}}</textarea>
						<span class="text-danger">{{$errors->first('food_and_beverages')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Cancellation:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Cancellation" name="cancellation">{{$cater->cancellation}} </textarea>
						<span class="text-danger">{{$errors->first('cancellation')}}</span>
					</div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Hire Equipment:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Hire Equipment" name="hire_equipment">{{$cater->hire_equipment}}</textarea>
						<span class="text-danger">{{$errors->first('hire_equipment')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Waste Disposal:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Waste Disposal" name="waste_disposal">{{$cater->waste_disposal}}</textarea>
						<span class="text-danger">{{$errors->first('waste_disposal')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Responsibility for Damage:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Responsibility for Damage" name="responsibility_for_damage">{{$cater->responsibility_for_damage}}</textarea>
								<span class="text-danger">{{$errors->first('responsibility_for_damage')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Disorderly Conduct:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Disorderly Conduct"name="disorderly_conduct">{{$cater->disorderly_conduct}} </textarea>
						<span class="text-danger">{{$errors->first('disorderly_conduct')}}</span>
					</div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Responsible Service of Alcohol:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Responsible Service of Alcohol" name="responsible_service_of_alcohol">{{$cater->responsible_service_of_alcohol}}</textarea>
						<span class="text-danger">{{$errors->first('responsible_service_of_alcohol')}}</span>	
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Safety & Hygiene:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Safety & Hygiene" name="safety_and_hygiene">{{$cater->safety_and_hygiene}}</textarea>
						<span class="text-danger">{{$errors->first('safety_and_hygiene')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Reschedule:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Reschedule" name="reschedule">{{$cater->reschedule}}</textarea>
						<span class="text-danger">{{$errors->first('reschedule')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Force Majeure:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Force Majeure" name="force_majeure">{{$cater->force_majeure}}</textarea>
						<span class="text-danger">{{$errors->first('force_majeure')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Indemnification:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Indemnification" name="indemnification">{{$cater->indemnification}}</textarea>
						<span class="text-danger">{{$errors->first('indemnification')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Binding Arbitration:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Binding Arbitration" name="binding_arbitration">{{$cater->binding_arbitration}}</textarea>
						<span class="text-danger">{{$errors->first('binding_arbitration')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="reset" class="btn btn-primary fa fa-refresh">&nbsp;Back </button>
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
	