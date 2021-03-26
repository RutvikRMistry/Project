@extends('backend.master')
@section('title',"Edit Tax")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Tax</h1>
      <div class="page-header-actions">
         <a href="{{route('backend.admin.frontdesk.hotel_configure.tax')}}">
         <button type="button" class="btn btn-primary" > Tax List</button></a>
      </div>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.hotel_configure.tax.update',$tax->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Name</strong> <small class="text-danger">*</small></label>
                         <input type="text" class="form-control form-control-lg" name="name" placeholder="name" value="{{$tax->name}}" required />
						<span class="text-danger">{{$errors->first('name')}}</span>						</div>
                    <div class="form-group col-md-6">
                        <label><strong>Code</strong> <small class="text-danger">*</small></label> 
                        <input type="text" class="form-control form-control-lg" name="code" placeholder="Code" value="{{$tax->code}}" required />
						<span class="text-danger">{{$errors->first('code')}}</span>
					</div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Type</strong> <small class="text-danger">*</small></label>
                        <select type="text" class="form-control form-control-lg" name="type" required>
						<option value="">--Select--</option>
                            <option value="PERCENTAGE" {{$tax->type =='PERCENTAGE'?'selected':''}}>Percentage</option>
                            <option value="FIXED" {{$tax->type == 'FIXED'?'selected':''}}>Fixed</option>
                        </select>
						<span class="text-danger">{{$errors->first('type')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label><strong>Rate</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="rate" placeholder="0.00" value="{{$tax->rate}}" required />
						<span class="text-danger">{{$errors->first('rate')}}</span>
					</div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <label for="inputAddress2" class=" mr-5">Status</label>
                        <input id="status"  type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status"
						data-plugin="switchery" {{$tax->status?'checked':''}}>                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <hr/>
                        <button type="submit" class="btn btn-primary mt-4 btn-tsk btn-block"><i class="fa fa-save"></i> &nbsp;Update</button>
                    </div>
                </div>
            </form>
         </div>
      </div>
           
   </div>
</div>
 </div>

@endsection
