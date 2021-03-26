@extends('backend.master')
@section('title',"Add Lead Source")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Lead Source</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.function.lead_source.store')}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-12">
                  <h4 > Lead Source:<span class="text-danger">*</span></h4>
                  <input type="text" class="form-control" placeholder="" name="name" value="{{old('name')}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="reset" class="btn btn-primary">Back </button>
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

@endsection
	