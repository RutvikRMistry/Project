@extends('backend.master')
@section('title',"Create Event Locations")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
              
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   @if($errors->all())
					<div class="row">
						<div class="col">
							@foreach($errors->all() as $msg)
							<div class="alert alert-danger" role="alert">
							{{$msg}}
							</div>
							@endforeach
						</div>
					</div>
					@endif()
   <div class="page-header">
      <h1 class="page-title"> Create Event Locations</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.function.event_location.store')}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-4">
                  <h5>   Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="name" value="{{old('name')}}" required />
					<span class="text-danger">{{$errors->first('name')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>   Dimension Sq/Ft:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" data-plugin="asSpinner" name="dimension" value="{{old('dimension')}}" required />
				  <span class="text-danger">{{$errors->first('dimension')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Theater:</h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="theater" value="{{old('theater')}}" />
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <h5> Trade:</h5>
                  <input type="text" class="form-control" placeholder=" " name="trade" value="{{old('trade')}}">
               </div>
               <div class="col-lg-4 form-group">
                  <h5>    U Shape:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="u_shape" value="{{old('u_shape')}}" required />
				  <span class="text-danger">{{$errors->first('u_shape')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Cabaret:</h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="cabaret" value="{{old('cabaret')}}" />
				    <span class="text-danger">{{$errors->first('cabaret')}}</span>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <h5> Classroom:</h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="classroom" value="{{old('classroom')}}" />
				  <span class="text-danger">{{$errors->first('classroom')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>  Banquet Capacity:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="banquet" value="{{old('banquet')}}" required />
				  <span class="text-danger">{{$errors->first('banquet')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Booth:</h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="booth" value="{{old('booth')}}" />
				    <span class="text-danger">{{$errors->first('booth')}}</span>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <h5> Board Room:</h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="board_room" value="{{old('board_room')}}" />
				   <span class="text-danger">{{$errors->first('board_room')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>  Cocktail:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="cocktail" value="{{old('cocktail')}}" required />
				  <span class="text-danger">{{$errors->first('cocktail')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Rental Price / Day(₵):<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="location_rent" value="{{old('location_rent')}}" required />
				  <span class="text-danger">{{$errors->first('location_rent')}}</span>
               </div>
            </div>
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
	