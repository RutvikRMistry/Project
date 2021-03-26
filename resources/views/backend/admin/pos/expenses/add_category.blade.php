@extends('backend.master')
@section('title',"Add Expenses Category")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Expense Category</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.pos.expenses.store_category')}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-12 ">
                  <h4 >Category name<strong class="text-danger">*</strong></h4>
                  <input class="form-control"  placeholder="Category name" name="name" type="text" id="name" value="{{old('name')}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12 ">
                  <h4>Category code:</h4>
                  <input class="form-control" placeholder="Category code" name="code" type="text" id="code" value="{{old('code')}}" required />
				   <span class="text-danger">{{$errors->first('code')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Save </button>
                  <button type="reset" class="btn btn-default btn-outline">Close</button>
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
	