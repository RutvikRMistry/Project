@extends('backend.master')
@section('title',"Edit Expenses")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">EditExpense</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.pos.expenses.update',$expense->id)}}" method="post">
				{{csrf_field()}}
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Business Location<strong class="text-danger">*</strong></h5>
					
                     <select class="form-control" data-plugin="select2"  id="location_id" name="location_id" required >
                        <option value="">--Select--</option>
                           <option value="{{$business_locations->id}}" {{$expense->location_id == $business_locations->id?'selected' :''}}>{{$business_locations->name}}</option>
                     </select>
					 <span class="text-danger">{{$errors->first('location_id')}}</span>
                  </div>
                  <div class="col-lg-4">
                     <h5>Reference No:<span class="text-danger">*</span></h5>
                     <input class="form-control" name="ref_no" type="text" id="ref_no" value="{{$expense->ref_no}}">
					 <span class="text-danger">{{$errors->first('ref_no')}}</span>
                  </div>
                  <div class="col-lg-4">
                     <h5>Expense Category:<span class="text-danger">*</span></h5>
                     <select class="form-control" data-plugin="select2" id="expense_category_id" name="expense_category_id" required >
                        <option value="">--Select--</option>
						
						@foreach($expense_categories as $expc)
                           <option value="{{$expc->id}}" {{$expense->expense_category_id == $expc->id ? 'selected' : ''}}>{{$expc->name}}</option>
                        @endforeach
                     </select>
					  <span class="text-danger">{{$errors->first('expense_category_id')}}</span>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Date<strong class="text-danger">*</strong></h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" data-plugin="datepicker"  readonly=""  id="expense_transaction_date" name="transaction_date" type="text" value="{{date('m/d/Y', strtotime($expense->transaction_date))}}" required />
						
                     </div>
					 <span class="text-danger">{{$errors->first('transaction_date')}}</span>
                  </div>
                  <div class="col-lg-4">
                     <h5>Payment status<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="payment_status" name="payment_status" required >
                        <option value="">--Select--</option>
                           <option value="paid" {{$expense->payment_status == 'paid'?'selected': ''}}>Paid</option>
                           <option value="due" {{$expense->payment_status == 'due'?'selected': ''}}>Due</option>
                       
                     </select>
					 <span class="text-danger">{{$errors->first('payment_status')}}</span>
                  </div>
                  <div class="col-lg-4">
                     <h5>Total Amount<strong class="text-danger">*</strong></h5>
                     <input class="form-control input_number" placeholder="Total amount" value="{{$expense->final_total}}" name="final_total" type="text" id="final_total" required />
					<span class="text-danger">{{$errors->first('final_total')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Expenses For<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="expense_for" name="expense_for" tabindex="-1" aria-hidden="true" required >
                        <option  value="">--Select--</option>
                        <option value="">None</option>
						@foreach($users as $user)
                        <option value="{{$user->id}}" {{$expense->expense_for == $user->id?'selected' :''}}>{{$user->surname.$user->first_name.$user->last_name}}</option>
                        @endforeach
                     </select>
					 <span class="text-danger">{{$errors->first('expense_for')}}</span>
                  </div>
                  <div class="col-lg-4">
                     <h5>Attach Document</h5>
                     <div class="input-group input-group-file" data-plugin="inputGroupFile">
                        <input type="text" class="form-control" readonly="">
                        <span class="input-group-btn">
                        <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>&nbsp;  Browser
                        <input id="upload_document" name="document" type="file">
											
                       </span>
                        </span>
						
                     </div>
					<span class="text-danger">{{$errors->first('document')}}</span>	
                 </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <h5>Expense note:</h5>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-10">
                           <textarea class="form-control" rows="3" name="additional_notes" cols="50" id="additional_notes">{{$expense->additional_notes}}</textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Update</button>
                  </div>
               </div>
            </form>
            <div class="row"></div>
         </div>
      </div>
   </div>     
</div>
 </div>

@endsection
	