@if(Session::has('msg'))
<div class="row" role="alert">	
	<div class="col-md-12">
		<div class="alert alert-success">
			{{session::get('msg')}}
		</div>
	</div>
</div>
@endif
@if(Session::has('errmsg'))
<div class="row">	
	<div class="col-md-12">
		<div class="alert alert-danger">
			{{session::get('errmsg')}}
		</div>
	</div>
</div>
@endif
<script type="text/javascript" role="alert">

$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); //5000 nanosecs means 5 sec

});
</script>