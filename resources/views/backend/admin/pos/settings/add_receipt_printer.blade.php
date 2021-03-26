@extends('backend.master')
@section('title',"Add Receipt Printer")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Printer</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.pos.setting.receipt_printer.store')}}" method="post">
				{{csrf_field()}}
				<input type="hidden" value="{{$printer->business_id}}" name="business_id">
				<input type="hidden" value="{{$printer->created_by}}" name="created_by">
				@php
				//echo $printer->created_by;
				@endphp
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Printer Name<strong class="text-danger">*</strong></h5>
                     <input class="form-control"  placeholder="Short Descriptive Name to recognize printer" name="name" type="text" id="name" aria-required="true" value="{{old('name')}}" required />              
                  </div>
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Connection Type<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="connection_type" name="connection_type" >
                        <option value="">--select--</option>
                        <option value="1" {{old('connection_type') == '1'? 'selected': ''}}>Network</option>
                        <option value="2" {{old('connection_type') == '2'? 'selected': ''}}>Window</option>
                        <option value="3" {{old('connection_type') == '3'? 'selected': ''}}>Linux</option>
                     </select>
                  </div>
				  <span class="text-danger">{{$errors->first('connection_type')}}</span>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Capability Profile<strong class="text-danger">*</strong></h5>
                     <select class="form-control " data-plugin="select2" id="capability_profile" name="capability_profile" tabindex="-1" aria-hidden="true" required>
                        <option value="" >--select--</option>
                        <option value="default" {{old('capability_profile') == 'default'? 'selected': ''}} >Default</option>
                        <option value="simple" {{old('capability_profile') == 'simple'? 'selected': ''}} >Simple</option>
                        <option value="SP2000" {{old('capability_profile') == 'SP2000'? 'selected': ''}} >Star Branded</option>
                        <option value="TEP-200M" {{old('capability_profile') == 'TEP-200M'? 'selected': ''}} >Espon Tep</option>
                        <option value="P822D" {{old('capability_profile') == 'P822D'? 'selected': ''}} >P822D</option>
                     </select>
                  </div>
				  <span class="text-danger">{{$errors->first('capability_profile')}}</span>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Characters per line<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Number of character that can be printed per line" name="char_per_line" type="number" value="{{old('char_per_line')}}" id="char_per_line" aria-required="true" required />
                  </div>
				  <span class="text-danger">{{$errors->first('char_per_line')}}</span>
               </div>
               <br>
				@php
				$select = old('connection_type');
				$selectDis = "block";
				if($select){
					$selectDis = "none";
				}
				@endphp
               <div class="row connection_type">
                  <div class="col-lg-12" style="display:{{$selectDis}};">
                     <h5>IP Address<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="IP address for connecting to the printer" name="ip_address" type="text" id="ip_address" aria-required="true" value="{{old('ip_address')}}" >
                  </div>
				  <span class="text-danger">{{$errors->first('ip_address')}}</span>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Port<strong class="text-danger">*</strong></h5>
                     <input class="form-control"  name="port" type="text" placeholder="Most printer works on port 9100" id="port" aria-required="true" value="{{old('port')}}" required />
                  </div>
				  <span class="text-danger">{{$errors->first('port')}}</span>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Save </button>
                  </div>
               </div>
            </form>
         </div>
      </div>      
   </div>
</div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
	$(document).on('change', '#connection_type', function(){
		var value = $(this).val();
		//alert(value);
		if(value == 1 ){
		
			$('.connection_type').show(0);
		}else{
			$('.connection_type').hide(0);
		}
		
		
	});
	
});
</script>
@endsection
	