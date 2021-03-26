@extends('backend.master')
@section('title',"Edit Customer Group")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Customer Groups</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
        <div>
		<form action="{{route('backend.admin.pos.contact_book.customer_group.update',$group->id)}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h4>Customer Group Name<strong class="text-danger">*</strong></h4>
                  <input class="form-control" value="{{$group->name}}" placeholder="Customer Group Name" name="name" type="text" id="name" required>
               </div>
			   <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h4>Calculation Percentage (%):</h4>
                  <input class="form-control" placeholder="Calculation Percentage (%)" max="100" min="-100" step="0.1" name="amount" type="number" id="amount" value="{{$group->amount}}" required>
               </div>
			   <span class="text-danger">{{$errors->first('amount')}}</span>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Update </button>
                  <button type="reset" class="btn btn-default btn-outline">Reset</button>
               </div>
            </div>
		</form>	
         </div>
      </div>
       
   </div>
</div>
 </div>

@endsection
	