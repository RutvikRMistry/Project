@extends('backend.master')
@section('title',"System Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title"> System Settings</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
    <div class="panel-body" style="background-color: #fff; ">
        <div>
            <form action="{{route('backend.admin.pos.setting.system_setting.update',$business->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
		   <header class="panel-heading">
               <h3><b>POS</b></h3>
               <div class="row" >
                  <h4 class="panel-title">Add keyboard shortcuts:
                     <br>
                     <small class="text-muted">Shortcut should be the names of the keys separated by '+'; Example: ctrl+shift+b, ctrl+h</small>
                  </h4>
               </div>
               <div class="row" >
                  <h4 class="panel-title">Available key names are:
                     <br>
                     <small class="text-muted">shift, ctrl, alt, backspace, tab, enter, return, capslock, esc, escape, space, pageup, pagedown, end, home,
                     </small>
                     <br>
                     <small class="text-muted">left, up, right, down, ins, del, and plus</small> 
                  </h4>
               </div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h5>Operations  </h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Keyboard Shortcut</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Operations</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Keyboard Shortcut</h5>
                  </div>
               </div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h5>Express Checkout:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control valid" name="shortcuts[pos][express_checkout]" type="text" value="{{!empty($shortcuts["pos"]["express_checkout"]) ? $shortcuts["pos"]["express_checkout"] : null}}" aria-invalid="false">
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Edit Discount:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][edit_discount]" type="text" value="{{!empty($shortcuts["pos"]["edit_discount"]) ? $shortcuts["pos"]["edit_discount"] : null}}">
                  </div>
               </div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h5>Pay & Checkout:  </h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control valid" name="shortcuts[pos][pay_n_ckeckout]" type="text" value="{{!empty($shortcuts["pos"]["pay_n_ckeckout"]) ? $shortcuts["pos"]["pay_n_ckeckout"] : null}}" aria-invalid="false">
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Edit Order Tax:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control valid" name="shortcuts[pos][edit_order_tax]" type="text" value="{{!empty($shortcuts["pos"]["edit_order_tax"]) ? $shortcuts["pos"]["edit_order_tax"] : null}}" aria-invalid="false">
                  </div>
               </div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h5>Draft:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][draft]" type="text" value="{{!empty($shortcuts["pos"]["draft"]) ? $shortcuts["pos"]["draft"] : null}}">
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Add Payment Row:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][add_payment_row]" type="text" value="{{!empty($shortcuts["pos"]["add_payment_row"]) ? $shortcuts["pos"]["add_payment_row"] : null}}">
                  </div>
               </div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h5>Cancel:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][cancel]" type="text" value="{{!empty($shortcuts["pos"]["cancel"]) ? $shortcuts["pos"]["cancel"] : null}}">
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Finalize Payment:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][finalize_payment]" type="text" value="{{!empty($shortcuts["pos"]["finalize_payment"]) ? $shortcuts["pos"]["finalize_payment"] : null}}">
                  </div>
               </div>
               <div class="row" style="margin: auto;">
                  <div class="col-lg-3 form-group">
                     <h5>Go to product quantity:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][recent_product_quantity]" type="text" value="{{!empty($shortcuts["pos"]["recent_product_quantity"]) ? $shortcuts["pos"]["recent_product_quantity"] : null}}">
                  </div>
                  <div class="col-lg-3 form-group">
                     <h5>Add new product:</h5>
                  </div>
                  <div class="col-lg-3 form-group">
                     <input class="form-control" name="shortcuts[pos][add_new_product]" type="text" value="{{!empty($shortcuts["pos"]["add_new_product"]) ? $shortcuts["pos"]["add_new_product"] : null}}">
                  </div>
               </div>
        </div>
         </header>
      </div>
   </div>
   <div class="page-main">
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
               <div>
                  <header class="panel-heading">
                     <h3><b>POS settings:</b></h3>
                  </header>
                  <div class="row" style="margin: auto;">
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="disable_pay_checkout" name="pos_settings[disable_pay_checkout]" 
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="1" {{$pos_settings['disable_pay_checkout']?"checked":""}}
							 >
                           <label for="disable_pay_checkout"> Disable pay & checkout</label>
						   
                        </li>
                     </div>
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="disable_draft" name="pos_settings[disable_draft]"
							value="1"  {{$pos_settings['disable_draft']?"checked":""}} data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                              />
                           <label for="disable_draft"> Disable Draft </label>
                        </li>
                     </div>
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="disable_express_checkout" name="pos_settings[disable_express_checkout]" 
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="1" {{$pos_settings['disable_express_checkout']?"checked":""}}
                              />
                           <label for="disable_express_checkout">  Disable Express Checkout</label>
                        </li>
                     </div>
                  </div>
                  <div class="row" style="margin: auto;">
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="hide_product_suggestion" name="pos_settings[hide_product_suggestion]"
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="1" {{$pos_settings['hide_product_suggestion']?"checked":""}}
                              />
                           <label for="hide_product_suggestion">  Don't show product suggestion</label>
                        </li>
                     </div>
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="hide_recent_trans" name="pos_settings[hide_recent_trans]"
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="1" {{$pos_settings['hide_recent_trans']?"checked":""}}
                              />
                           <label for="hide_recent_trans">  Don't show recent transactions</label>
                        </li>
                     </div>
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="disable_discount" name="pos_settings[disable_discount]"
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="1" {{$pos_settings['disable_discount']?"checked":""}}
                              />
                           <label for="disable_discount">  Disable Discount</label>
                        </li>
                     </div>
                  </div>
                  <div class="row" style="margin: auto;">
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="disable_order_tax" name="pos_settings[disable_order_tax]"
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="1" {{$pos_settings['disable_order_tax']?"checked":""}}
                              />
                           <label for="disable_order_tax"> Disable order tax</label>
                        </li>
                     </div>
                  </div>
               </div>
            </header>
         </div>
      </div>
      <div class="page-main">
         <div style="width: 100%; padding: 30px;">
            <div class="panel-body" style="background-color: #fff; ">
               <header class="panel-heading">
                  <div>
                     <header class="panel-heading">
                        <h3><b>Enable/Disable Modules</b></h3>
                     </header>
                    <div class="row" style="margin: auto;">
					@php
                            $enabled_modules = '';
                            if(!empty($business->enabled_modules)){
                                $enabled_modules = json_decode($business->enabled_modules,true);
								
							}
							
                        @endphp
					
					@foreach($modules as $k => $v)
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="{{$v['name']}}" name="enabled_modules[]"
                                 data-plugin="iCheck" {{(in_array($k, $enabled_modules) ? "checked" : "")}} data-checkbox-class="icheckbox_flat-blue" value="{{$k}}"
                                  />
                              <label for="{{$v['name']}}"> {{$v['name']}}</label>
							  
                           </li>
                        </div>
					@endforeach
                        
                        
						
                     </div>
                    
					
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="row" style="margin: auto;">
                     <div class="col-lg-4 form-group">
                        <h5>SKU prefix:</h5>
						
						
                        <select class="form-control" data-plugin="selectpicker" id="theme_color" name="theme_color" aria-hidden="true">
						<option value="">--Please Select--</option>
						@foreach($theme_colors as $k => $theme_colors)
                           
                           <option value="{{$k}}" {{$business->theme_color == $k?"selected":""}}>{{$theme_colors}}</option>
                           
						@endforeach
                        </select>
                     </div>
                  </div>
				  <button type="submit" class="btn btn-primary float-right">Update Settings</button>
            </div>
			
            </header>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
               <div class="col-sm-12 col-md-6">
                  <div id="DataTables_Table_0_filter" class="dataTables_filter">
					
				  </div>
               </div>
            </div>
            <div class="row"></div>
         </div>
      </div>
   </div>
      
</div>
</div>
 </div>

@endsection
	