@extends('backend.master')
@section('title',"Add Blog")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
		   <div class="page-header">
			  <h1 class="page-title">Add Blog</h1>
		   </div>
		   <div style="width: 100%; padding: 30px;">
			  <div class="panel-body" style="background-color: #fff; ">
				 <div>
					<form action="{{route('backend.admin.frontdesk.website_setting.blog.create')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
					   <div class="row" >
						  <div class="col-lg-12 ">
							 <h4 class="example-title">Title:<span class="text-danger">*</span></h4>
							 <input type="text" class="form-control form-control-lg" name="title" value="{{old('title')}}" required > 
								<span class="text-danger">{{$errors->first('title')}}</span>							 
						  </div>
					   </div>
					   <br>
					   <div class="row" >
						  <div class="col-lg-12 ">
							 <h4 class="example-title">Category:</h4>
							 <select class="form-control" data-plugin="select2" name="cat_id" id="cat_id" required >
								<option value="">--Select--</option>
								@foreach($category as $data)
								<option value="{{$data->id}}" {{old('cat_id') ==$data->id?'selected':''}}>{{$data->name}}</option>
								@endforeach
							 </select>
							 <span class="text-danger">{{$errors->first('cat_id')}}</span>
						  </div>
					   </div>
					   <br>
					   <div class="row" >
						  <div class="col-lg-12 ">
							 <h4 class="example-title">Detail:<span class="text-danger">*</span></h4>
							 <div unselectable="on" style="width: 1030px;">
								<div class=" nicEdit-panelContain" unselectable="on" style="overflow: hidden; width: 100%; border: 1px solid rgb(204, 204, 204); background-color: rgb(239, 239, 239);">
								   <div class=" nicEdit-panel" unselectable="on" style="margin: 0px 2px 2px; zoom: 1; overflow: hidden;">
									  <div style="float: left; margin-top: 2px; display: none;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -432px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -54px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -126px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined nicEdit-button-hover" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -342px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined nicEdit-button-hover" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -162px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -72px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -234px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -144px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -180px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -324px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
										 <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 1;">
											<div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
											   <div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
											   <div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Size...</div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
										 <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 1;">
											<div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
											   <div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
											   <div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Family...</div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin: 2px 1px 0px;">
										 <div class=" nicEdit-selectContain" unselectable="on" style="width: 90px; height: 20px; cursor: pointer; overflow: hidden; opacity: 1;">
											<div unselectable="on" style="overflow: hidden; zoom: 1; border: 1px solid rgb(204, 204, 204); padding-left: 3px; background-color: rgb(255, 255, 255);">
											   <div class=" nicEdit-selectControl" unselectable="on" style="overflow: hidden; float: right; height: 18px; width: 16px; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -450px 0px;"></div>
											   <div class=" nicEdit-selectTxt" unselectable="on" style="overflow: hidden; float: left; width: 66px; height: 14px; margin-top: 1px; font-family: sans-serif; text-align: center; font-size: 12px;">Font&nbsp;Format...</div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -108px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -198px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -360px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -468px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -378px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -396px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -36px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -18px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -288px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -306px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -270px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -216px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div unselectable="on" style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" unselectable="on" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" unselectable="on" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: -90px 0px;"></div>
											</div>
										 </div>
									  </div>
									  <div style="float: left; margin-top: 2px;">
										 <div class=" nicEdit-buttonContain nicEdit-buttonEnabled" style="width: 20px; height: 20px; opacity: 1;">
											<div class=" nicEdit-button-undefined" style="background-color: rgb(239, 239, 239); border: 1px solid rgb(239, 239, 239);">
											   <div class=" nicEdit-button" unselectable="on" style="width: 18px; height: 18px; overflow: hidden; zoom: 1; cursor: pointer; background-image: url(&quot;../nicEditorIcons.gif&quot;); background-position: 0px 0px;"></div>
											</div>
										 </div>
									  </div>
								   </div>
								</div>
							 </div>
							 <input type="text" required class="form-control" placeholder="Enter Here--" name="details" value="{{old('details')}}">
							 <span class="text-danger">{{$errors->first('details')}}</span>
						  </div>
					   </div>
					   <br>
					   <div class="row" >
						  <div class="form-group">
							 <div class="col-md-12">
								<h5>Image:<span class="text-danger">*</span></h5>
								<div class="img-responsive">
								   <img style="width: 200px" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=Fetured Image" alt="...">
									
								</div>
								<br>
								<input type="file"  id="image" name="image" value="{{old('image')}}" />  
									<span class="text-danger">{{$errors->first('Image')}}</span>
							 </div>
						  </div>
					   </div>
					   <br>
					   <div class="row" >
						  <div class="col-lg-12 ">
							 <h4 class="example-title">Status:</h4>
							 <div class="input-group">
								<div class="float-left mr-20">
								   <input type="checkbox" id="inputBasicOff" name="status" data-plugin="switchery"
									  type="checkbox" name="status" checked >
								</div>
								<label class="pt-3" for="inputBasicOff">Off</label>
							 </div>
						  </div>
					   </div>
					   <br>
					   <div class="row" >
						  <div class="col-md-12">
							 <button type="submit" class="btn btn-primary">Save Blog </button>
						  </div>
					   </div>
					</form>
				 </div>
			  </div>      
		   </div>
		</div>
	</div>

@endsection
	