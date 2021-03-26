@extends('backend.master')
@section('title',"Edit Expenses Category")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Expense Category</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.pos.expenses.update_category',$cat->id)}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-12 ">
                  <h4 >Category name<strong class="text-danger">*</strong></h4>
                  <input class="form-control"  placeholder="Category name" name="name" type="text" id="name" value="{{$cat->name}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12 ">
                  <h4>Category code:</h4>
                  <input class="form-control" placeholder="Category code" name="code" type="text" id="code" value="{{$cat->code}}" required />
				   <span class="text-danger">{{$errors->first('code')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Update </button>
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
	