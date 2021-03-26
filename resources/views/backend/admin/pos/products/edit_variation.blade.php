@extends('backend.master')
@section('title',"Edit Variation")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Variation</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		
			<form action="{{route('backend.admin.pos.product.variation.update',$variation->id)}}" method="post">
				{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-6 ">
                  <h4 class="example-title">Variation Name<span class="text-danger">*</span>:</h4>
                  <input class="form-control"  placeholder="Variation Name" name="name" type="text" id="name" value="{{$variation->name}}" required>
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
			<div id="variation-box">
			@if(!empty($variation->values))
				@foreach( $variation->values as $n=> $attr)
					
				<div class="row" >
				   <div class="col-lg-5">
					  <h4 class="example-title">Add variation values<span class="text-danger">*</span>:</h4>
					<input class="form-control"  name="variation_values[n]" id="variation_values.n" required type="text" value="{{$attr->name}}">
					 <br/>
					 <br/>
					  
				   </div>
				   <div class="col-md-2">
				   @if($n == 0)
					  <h4 class="example-title">Add</h4>
					  <button type="button" id="add_variation_values" class="btn btn-primary">+</button>
					@else
					<button type="button" class="btn btn-danger delete-variation">-</button>
				   @endif
				   </div>
				</div>
				
					
				
					@endforeach
					@endif
			</div>
			<span class="text-danger">{{$errors->first('variation_values.n')}}</span>
			<div class="form-group {{ $errors->has('variation_values.n') ? 'has-error' : '' }}">
							@if ($errors->has('variation_values.n'))
												<span class="help-block">
													<strong>{{ $errors->first('variation_values.n') }}</strong>
												</span>
							@endif
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
 <script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '#add_variation_values', function(){
			var vhtml = $('#variation-box').find('.row:first').html();
			var vLength = $('#variation-box').find('.row').length;
			var lLength = $('#variation-box').find('.row:last').attr('number');
			if(typeof lLength != "undefined"){
				var n = parseInt(lLength)+1;
			}else{
				var n = (parseInt(vLength) - 1)+1;
			}			
			
			var newHtml = '<div class="row" style="margin-bottom:20px;" number="'+n+'"><div class="col-lg-5">';
			  newHtml += '<input class="form-control" name="variation_values['+n+']" id="variation_values.'+n+'" type="text" value="" required>';
			  newHtml +='<span class="text-danger"></span></div><div class="form-group "></div><div class="form-group "></div>';
			  newHtml += ' <div class="col-md-2"> <h4 class="example-title">Delete</h4><button type="button" class="btn btn-danger delete-variation">X</button></div>';
			  newHtml += '</div>';
			
			$('#variation-box').append(newHtml);
			
			
		});
		/*Delete Row*/
		$(document).on('click', '.delete-variation', function(){
			$(this).parents('.row:first').remove();
			
		});
		
	});
 </script>
 

@endsection
	