@extends('backend.master')
@section('title',"Add Menu Type")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Menu Type</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.menu.type.store')}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-4">
                  <h5>Menu:<span class="text-danger">*</span></h5>
                  <select class="form-control" data-plugin="select2" name="main_menu_id" required >
                    
                        <option value="">--Select--</option>
						@foreach($menu as $menu)
							<option value="{{$menu->id}}" {{old('main_menu_id') == $menu->id?'selected' : ''}}>{{$menu->name}}</option>
                        @endforeach
                  </select>
				  <span class="text-danger">{{$errors->first('main_menu_id')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5> Menu Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="name" value="{{old('name')}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>Price / Person:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="price_per_person" value="{{old('price_per_person')}}" required />
				  <span class="text-danger">{{$errors->first('price_per_person')}}</span>
               </div>
            </div>
            <br>
            <div class=" row" >
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
	