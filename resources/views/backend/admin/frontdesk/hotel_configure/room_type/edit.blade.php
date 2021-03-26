@extends('backend.master')
@section('title',"Hotel Configuration")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">Edit Room Type</h1>
		  <div class="page-header-actions"style="height: 5px;">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.room_type')}}">
			 <button type="button" class="btn btn-primary" > Room List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			 <div>
		<form action="{{route('backend.admin.frontdesk.hotel_configure.room_type.update',$roomType->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			 <div>
				<div class="row">
				   <div class="col-lg-6">
					  <h5>Title<strong class="text-danger">*</strong></h5>
					  <input type="text" class="form-control " name="title" placeholder="Title" value="{{$roomType->title}}" required />
					  <span class="text-danger">{{$errors->first('title')}}</span>
				   </div>
				   <div class="col-lg-6">
					  <h5>Short Code<strong class="text-danger">*</strong></h5>
					  <input type="text" class="form-control " name="short_code" placeholder="Short Code" value="{{$roomType->short_code}}" required />
					  <span class="text-danger">{{$errors->first('short_code')}}</span>
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-12">
					  <h5>Description<strong>(optional)</strong></h5>
					  <div unselectable="on" style="width: 970px;">
						 <div class=" nicEdit-panelContain" unselectable="on" style="overflow: hidden; width: 100%; border: 1px solid rgb(204, 204, 204); background-color: rgb(239, 239, 239);">
							<div class=" nicEdit-panel" unselectable="on" style="margin: 0px 2px 2px; zoom: 1; overflow: hidden;">
							   <div style="float: left; margin-top: 2px; display: none;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -432px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -54px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -126px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -342px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -162px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -72px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -234px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -144px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -180px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -324px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
								  <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;">
									 <div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
										<div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
										<div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Size...</div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
								  <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;">
									 <div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
										<div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
										<div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Family...</div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
								  <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 0.6;">
									 <div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
										<div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
										<div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Format...</div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -108px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -198px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -360px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -468px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -378px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -396px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -36px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -18px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -288px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -306px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -270px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -216px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div unselectable="on" style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" unselectable="on" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: -90px 0px;"></div>
									 </div>
								  </div>
							   </div>
							   <div style="float: left; margin-top: 2px;">
								  <div class=" nicEdit-buttonContain" style="width: 20px; height: 20px; opacity: 0.6;">
									 <div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
										<div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;http://hotels.kintudesigns.com/assets/plugin/niceditor/nicEditorIcons.gif&quot;); background-position: 0px 0px;"></div>
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
					  <textarea id="description" class="form-control " rows="4" name="description" placeholder="Description" >{{ $roomType->description }}</textarea>
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-4">
					  <h5>Higher Capicity<strong class="text-danger">*</strong></h5>
					  <div class="example">
						 <input type="number" class="form-control" data-plugin="asSpinner" name="higher_capacity" required placeholder="Higher Capacity"  value="{{$roomType->higher_capacity}}" />
						 <span class="text-danger">{{$errors->first('higher_capacity')}}</span>
					  </div>
				   </div>
				   <div class="col-lg-4">
					  <h5>Kids Capicity:<strong class="text-danger">*</strong></h5>
					  <div class="example">
						 <input type="number" class="form-control" data-plugin="asSpinner" name="kids_capacity" placeholder="Kids Capacity" value="{{$roomType->kids_capacity}}" required />
						 <span class="text-danger">{{$errors->first('kids_capacity')}}</span>
					  </div>
				   </div>
				   <div class="col-lg-4">
					  <h5>Base Price:<strong class="text-danger">*</strong></h5>
					  <div class="example">
						 <input type="number" class="form-control" data-plugin="asSpinner" name="base_price" placeholder="Base Price"  value="{{$roomType->base_price}}" required />
						 <span class="text-danger">{{$errors->first('base_price')}}</span>
					  </div>
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-6">
					  <h5>Amenties:</h5>
				   </div>
				</div>
				<div class="row">
				@foreach($amenities as $amenity)
				   <div class="col-lg-3 ">
					  <li class="mb-15">
						 <input type="checkbox" class="icheckbox-primary" id="amenities_{{$amenity->id}}" name="amenities[]" value="{{$amenity->id}}"
							data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" {{in_array($amenity->id,$roomType->amenity->pluck('id')->toArray())?'checked':''}}
							/>
						 <label for="amenities_{{$amenity->id}}">{{$amenity->name}}</label>
					  </li>
				   </div>
				   @endforeach
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-4">
					  <h5>Status:</h5>
					  <div class="input-group">
						 <div class="float-left mr-20">
							<input type="checkbox" id="status"  data-plugin="switchery" name="status" {{$roomType->status?'checked':''}} />
						 </div>
						 <label class="pt-3" for="status">Off</label>
					  </div>
				   </div>
				</div>
				<br>          
				<div class="row">
				   <div class="col-md-9">
					  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
				   </div>
				</div>
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
