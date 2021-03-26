@extends('backend.master')
@section('title',"Business Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Business Settings</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.pos.setting.business_setting.update',$business->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
               <!-- Panel Basic -->
               <div class="panel">
			   
                  <header class="panel-heading">
                     <div class="panel-actions"></div>
                     <h3 class="panel-title p-10">Business</h3>
                  </header>
                  <div class="examm">
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Business Name<strong class="text-danger">*</strong></h5>
                           <input class="form-control valid"  placeholder="Business Name" name="name" type="text"  id="name" aria-required="true" aria-invalid="false" value="{{$business->name}}" required>
							<span class="text-danger">{{$errors->first('name')}}</span>
						</div>
                        <div class="col-lg-4 form-group">
                           <h5>Start Date:<strong class="text-danger">*</strong></h5>
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="icon wb-calendar" aria-hidden="true"></i>
                              </span>
							  @php
                                        $start_date = null;
                                        if(!empty($business->start_date)){
                                            $start_date = date(('m/d/Y'), strtotime($business->start_date));
                                        }
                                    @endphp
                              <input type="text" class="form-control" data-plugin="datepicker" placeholder="Start Date"  name="start_date" type="text" value="{{$start_date}}" id="start_date" required />
																																								
								
						   </div>
						   <span class="text-danger">{{$errors->first('start_date')}}</span>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Default profit percent<strong class="text-danger">*</strong></h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-plus-circle" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" min="0" step="0.01" max="100" name="default_profit_percent" type="number"  id="default_profit_percent" value="{{$business->default_profit_percent}}" required>
                              </div>
							  <span class="text-danger">{{$errors->first('default_profit_percent')}}</span>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Currency:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-money" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"  data-plugin="selectpicker" required id="currency_id" name="currency_id" tabindex="-1" aria-hidden="true" aria-required="true">
                                    <option value="">--Currency--</option>
									@foreach($cur as $currency)
                                    <option value="{{$currency->id}}" {{$currency->id == $business->currency_id?'selected':''}}> {{$currency->currency}}</option>
                                    @endforeach
                                 </select>
                              </div>
							  <span class="text-danger">{{$errors->first('currency_id')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Currency Symbol Placement:</h5>
                           <select class="form-control" data-plugin="select2"  id="currency_symbol_placement" name="currency_symbol_placement" tabindex="-1" aria-hidden="true" aria-required="true" required>
                              <option value="">--Select--</option>
							  <option value="before" {{$business->currency_symbol_placement == 'before'?'selected':''}}>Before amount</option>
                              <option value="after" {{$business->currency_symbol_placement == 'after'?'selected':''}}>After amount</option>
                           </select>
						   <span class="text-danger">{{$errors->first('currency_symbol_placement')}}</span>
                        </div>
						
                        <div class="col-lg-4 form-group">
                           <h5> Time zone:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-clock-o" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"  data-plugin="selectpicker" id="time_zone" name="time_zone" tabindex="-1" aria-hidden="true" aria-required="true">
                                    <option value="">--Select TimeZone--</option>
									@foreach($timezone_list as $timezone)
                                    <option value="{{$timezone}}" {{$timezone == $business->time_zone?'selected':''}}>{{$timezone}}</option>
                                    @endforeach
                                 </select>
								  
                              </div>
							  <span class="text-danger">{{$errors->first('time_zone')}}</span>
                           </div>
                        </div>
                     </div>
                     <!-- End Panel Basic -->
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>File Upload</h5>
                           <div class="input-group input-group-file" data-plugin="inputGroupFile">
                              <input type="text" class="form-control" readonly="">
                              <span class="input-group-btn">
                              <span class="btn btn-success btn-file">
                              <i class="icon wb-upload" aria-hidden="true"></i>
                              <input accept="image/*" name="business_logo" type="file" id="business_logo">
                              </span>
                              </span>
                           </div>
						   <span class="text-danger">{{$errors->first('business_logo')}}</span>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Financial year start month: </h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"data-plugin="selectpicker" required=""  id="fy_start_month" name="fy_start_month" tabindex="-1" aria-hidden="true" aria-required="true">
                                    <option value=""  >--Select--</option>
                                    <option value="1"  {{$business->fy_start_month == '1'?'selected':''}}>January</option>
                                    <option value="2"  {{$business->fy_start_month == '2'?'selected':''}}>February</option>
                                    <option value="3"  {{$business->fy_start_month == '3'?'selected':''}}>March</option>
                                    <option value="4"  {{$business->fy_start_month == '4'?'selected':''}}>April</option>
                                    <option value="5"  {{$business->fy_start_month == '5'?'selected':''}}> May</option>
                                    <option value="6"  {{$business->fy_start_month == '6'?'selected':''}}>June</option>
                                    <option value="7"  {{$business->fy_start_month == '7'?'selected':''}}>July</option>
                                    <option value="8"  {{$business->fy_start_month == '8'?'selected':''}}>August</option>
                                    <option value="9"  {{$business->fy_start_month == '9'?'selected':''}}>September</option>
                                    <option value="10" {{$business->fy_start_month == '10'?'selected':''}}>October</option>
                                    <option value="11" {{$business->fy_start_month == '10'?'selected':''}}>November</option>
                                    <option value="12" {{$business->fy_start_month == '12'?'selected':''}}>December</option>
                                 </select>
                              </div>
							  <span class="text-danger">{{$errors->first('fy_start_month')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Stock Accounting Method<strong class="text-danger">*</strong></h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control" data-plugin="selectpicker" id="accounting_method" name="accounting_method" tabindex="-1" aria-hidden="true" aria-required="true" required>
                                    <option value="" >--Select--</option>
                                    <option value="fifo" {{$business->accounting_method == 'fifo'?'selected':''}}>FIFO (First In First Out)</option>
                                    <option value="lifo" {{$business->accounting_method == 'lifo'?'selected':''}}>LIFO (Last In First Out)</option>
                                 </select>
                              </div>
							  <span class="text-danger">{{$errors->first('accounting_method')}}</span>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Transaction Edit Days<strong class="text-danger">*</strong></h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-edit" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" placeholder="Transaction Edit Days" required name="transaction_edit_days" type="number" value="{{$business->transaction_edit_days}}" id="transaction_edit_days" aria-required="true">           
                              </div>
							  <span class="text-danger">{{$errors->first('transaction_edit_days')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Date Format<strong class="text-danger">*</strong></h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"data-plugin="selectpicker" required id="date_format" name="date_format" tabindex="-1" aria-hidden="true" aria-required="true">
                                    <option value="d-m-Y"{{$business->date_format == 'd-m-y'?'selected':''}}>dd-mm-yyyy</option>
                                    <option value="m-d-Y" {{$business->date_format == 'm-d-y'?'selected':''}}>mm-dd-yyyy</option>
                                    <option value="d/m/Y" {{$business->date_format == 'd/m/y'?'selected':''}}>dd/mm/yyyy</option>
                                    <option value="m/d/Y" {{$business->date_format == 'm/d/y'?'selected':''}}>mm/dd/yyyy</option>
                                 </select>
                              </div>
							  <span class="text-danger">{{$errors->first('date_format')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Time Format<strong class="text-danger">*</strong></h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-clock-o" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"data-plugin="selectpicker" required id="time_format" name="time_format" tabindex="-1" aria-hidden="true" aria-required="true">
                                    <option value="12" {{$business->time_format == '12'?'selected':''}}>12 Hour</option>
                                    <option value="24" {{$business->time_format == '24'?'selected':''}}>24 Hour</option>
                                 </select>
                              </div>
							  <span class="text-danger">{{$errors->first('time_format')}}</span>
                           </div>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">Tax</h3>
                     </header>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Tax 1 Name:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" placeholder="GST / VAT / Other" name="tax_label_1" type="text" id="tax_label_1" value="{{$business->tax_label_1}}">           
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Tax No.:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" name="tax_number_1" type="text" id="tax_number_1" value="{{$business->tax_number_1}}">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Tax 2 Name:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" placeholder="GST / VAT / Other" name="tax_label_2" type="text" id="tax_label_2" value="{{$business->tax_label_2}}">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Tax 2 No:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" name="tax_number_2" type="text" id="tax_number_2" value="{{$business->tax_number_2}}">           
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 form-group">
                           <div class="checkbox-custom checkbox-default">
                              <input type="checkbox" id="enable" name="enable_inline_tax"
                                 vlaue="{{$business->enable_inline_tax}}" {{$business->enable_inline_tax?'checked':''}}/>
                              <label for="enable" style="padding: inherit;">Enable inline tax in purchase and sell</label>
                           </div>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">Product</h3>
                     </header>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-6 form-group">
                           <h5>SKU prefix:</h5>
                           <input class="form-control text-uppercase" name="sku_prefix" type="text" id="sku_prefix" value="{{$business->sku_prefix}}">
                        </div>
                        <div class="col-lg-6 form-group">
                           <h5>Default Unit:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-balance-scale" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control" data-plugin="selectpicker" id="default_unit" name="default_unit" tabindex="-1" aria-hidden="true">
                                    <option value="">Please Select</option>
                                    <option value="1" {{$business->default_unit == '1'?'selected':''}}>Pieces</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-6 form-group">
                           <div class="checkbox-custom checkbox-default">
                              <input type="checkbox" id="inputBasicRemember" name="enable_product_expiry" value="{{$business->enable_product_expiry}}"
								  {{$business->enable_product_expiry?'checked':''}}/>
                              <label for="inputBasicRemember"style="padding: inherit;">Enable Product Expiry:</label>
                           </div>
                           <select class="form-control" id="expiry_type" name="expiry_type" data-plugin="selectpicker">
						   <option>--Select--</option>
                              <option value="add_expiry"{{$business->expiry_type == 'add_expiry'?'selected':''}} >
                                 Add item expiry
                              </option>
                              <option value="add_manufacturing"{{$business->expiry_type == 'add_manufacturing'?'selected':''}}>Add manufacturing date &amp; expiry period</option>
                           </select>
                        </div>
                        <div class="col-lg-6 form-group">
                           <h5>On Product Expiry: </h5>
                           <div class="row" style="margin: auto;">
                              <div class="col-md-6" style="padding: inherit;">
                                 <input class="form-control pull-left" placeholder="stop n days before"    id="stop_selling_before" name="stop_selling_before" type="number" value="{{$business->stop_selling_before}}" aria-required="true">
                              </div>
                              <div class="col-md-6"style="margin: inherit;padding: inherit;">
                                 <select class="form-control" data-plugin="select2" id="on_product_expiry" name="on_product_expiry" required>
                                    <option value="keep_selling" {{$business->on_product_expiry == 'keep_selling'?'selected':''}} >Keep Selling</option>
                                    <option value="stop_selling"{{$business->on_product_expiry == 'stop_selling'?'selected':''}} >Stop Selling n days before</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="brand" name="enable_brand"
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                value="{{$business->enable_brand}}" {{$business->enable_brand?'checked':''}} />
                              <label for="brand">Enable Brand</label>
                           </li>
                        </div>
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="enable_category" name="enable_category"
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_category}} "
                                 {{$business->enable_category?'checked':''}} />
                              <label for="enable_category">Enable Categories</label>
                           </li>
                        </div>
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="sub_category" name="enable_sub_category"
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_sub_category}}"
								{{$business->enable_sub_category?'checked':''}}		/>
                              <label for="sub_category">Enables Sub-Categories</label>
                           </li>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="price_tax" name="enable_price_tax" 
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_price_tax}}"
                                {{$business->enable_price_tax?'checked':''}} />
                              <label for="price_tax">Enable  Price & Tax info</label>
                           </li>
                        </div>
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="rack" name="enable_racks"
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_racks}}"
                                {{$business->enable_racks?'checked':''}} />
                              <label for="rack"> Enable Racks </label>
                           </li>
                        </div>
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="enable_row" name="enable_row"
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_row}}"
                                {{$business->enable_row?'checked':''}} />
                              <label for="enable_row">Enables Row</label>
                           </li>
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="position" name="enable_position" 
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_position}}"
                                {{$business->enable_position?'checked':''}} />
                              <label for="position">Enable  Position</label>
                           </li>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">Sale</h3>
                     </header>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-3 form-group">
                           <h5>Default Sale Discount<strong class="text-danger">*</strong></h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <input class="form-control" min="0" step="0.01" max="100" name="default_sales_discount" type="number" id="default_sales_discount" value="{{$business->default_sales_discount}}" required />           
                              </div>
							  <span class="text-danger">{{$errors->first('default_sales_discount')}}</span>
                           </div>
                        </div>
                        <div class="col-lg-3 form-group">
                           <h5>Default Sale Tax:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"data-plugin="selectpicker" id="default_sales_tax" name="default_sales_tax" tabindex="-1" aria-hidden="true">
                                    <option value="">Default Sale Tax</option>
                                    <option value="1" {{$business->default_sales_tax == '1'?'selected':''}}>sddfd</option>
                                    <option value="2" {{$business->default_sales_tax == '2'?'selected':''}}>s</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 form-group">
                           <h5>Sales Commission Agent:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control"  id="sales_cmsn_agnt" required name="sales_cmsn_agnt" tabindex="-1" aria-hidden="true">
                                    <option value="">--Select--</option>
                                    <option value="logged_in_user"{{$business->sales_cmsn_agnt == 'logged_in_user'?'selected':''}} >Logged in user</option>
                                    <option value="user" {{$business->sales_cmsn_agnt == 'user'?'selected':''}}>Select from user's list</option>
                                    <option value="cmsn_agnt"{{$business->sales_cmsn_agnt == 'cmsn_agnt'?'selected':''}} >Select from commission agent's list</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 form-group">
                           <h5>Sales Item Addition Method:</h5>
                           <div class="form-group">
                              <div class="input-group input-group-icon">
                                 <span class="input-group-addon">
                                 <span class="form-control-icon wb-map" aria-hidden="true"></span>
                                 </span>
                                 <select class="form-control" data-plugin="selectpicker" id="item_addition_method" name="item_addition_method" aria-hidden="true">
                                    <option value="">--Select--</option>
                                    <option value="0" {{$business->item_addition_method == '0'?'selected':''}}>Add item in new row</option>
                                    <option value="1" {{$business->item_addition_method == '1'?'selected':''}}>Increase item quantity if it already exists</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">Purchases</h3>
                     </header>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="purchase"  name="enable_editing_product_from_purchase" 
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_editing_product_from_purchase}}"
									{{$business->enable_editing_product_from_purchase?'selected':''}}/>
                              <label for="purchase"> Enable editing product price from purchase screen</label>
                           </li>
                        </div>
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="enable_purchase_status" name="enable_purchase_status" 
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_purchase_status}}"
									{{$business->enable_purchase_status?'selected':''}}/>
                              <label for="enable_purchase_status">Enable Purchase Status </label>
                           </li>
                        </div>
                        <div class="col-lg-4 form-group">
                           <li class="mb-15">
                              <input type="checkbox" class="icheckbox-primary" id="enable_lot_number" name="enable_lot_number" 
                                 data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                                 />
                              <label for="inputUnchecked"> Enable Lot number</label>
                           </li>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">Dashboard</h3>
                     </header>
                     <div class="col-lg-3 form-group">
                        <h5>View Stock Expiry Alert For<strong class="text-danger">*</strong></h5>
                        <div class="form-group">
                           <div class="input-group input-group-icon">
                              <span class="input-group-addon">
                              <span class="fa fa-calendar-times-o" aria-hidden="true"></span>
                              </span>
                              <input class="form-control" name="stock_expiry_alert_days" type="number" value="{{$business->stock_expiry_alert_days}}" id="stock_expiry_alert_days" aria-required="true" required /><span class="input-group-addon">Days</span>
                           </div>
						   <span class="text-danger">{{$errors->first('stock_expiry_alert_days')}}</span>
                        </div>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">System</h3>
                     </header>
                     <div class="col-lg-4 form-group">
                        <li class="mb-15">
                           <input type="checkbox" class="icheckbox-primary" id="enable_tooltip"  name="enable_tooltip" 
                              data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" value="{{$business->enable_tooltip}}"
								{{$business->enable_tooltip?'checked':''}}/>
                           <label for="enable_tooltip"> Show help text </label>
                        </li>
                     </div>
                     <div class="dropdown-divider"></div>
                     <header class="panel-heading">
                        <div class="panel-actions"></div>
                        <h3 class="panel-title p-10">Prefixes for auto generation of reference number</h3>
                     </header>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Purchase Order:</h5>
						   @php
                            $purchase_prefix = '';
                            if(!empty($business->ref_no_prefixes)){
                                $purchase_prefix = json_decode($business->ref_no_prefixes,true);
								
							}
                        @endphp
								
                           <input class="form-control" name="ref_no_prefixes[purchase]" type="text"  id="ref_no_prefixes[purchase]" value="{{$purchase_prefix['purchase']}}">
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Stock Transfer:</h5>
						   @php
                            $stock_transfer_prefix = '';
                            if(!empty($business->ref_no_prefixes['stock_transfer'])){
                                $stock_transfer_prefix = json_decode($business->ref_no_prefixes,true);
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[stock_transfer]" type="text" value="{{$purchase_prefix['stock_transfer']}}" id="ref_no_prefixes[stock_transfer]">
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Stock Adjustment:</h5>
						   @php
                            $stock_adjustment_prefix = '';
                            if(!empty($business->ref_no_prefixes['stock_adjustment'])){
                                $stock_adjustment_prefix = json_decode($business->ref_no_prefixes,true);
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[stock_adjustment]" type="text" value="{{$purchase_prefix['stock_adjustment']}}" id="ref_no_prefixes[stock_adjustment]">
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Sell Return:</h5>
						   @php
                            $sell_return_prefix = '';
                            if(!empty($business->ref_no_prefixes['sell_return'])){
                                $sell_return_prefix = json_decode($business->ref_no_prefixes,true);
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[sell_return]" type="text" value="{{$purchase_prefix['sell_return']}}" id="ref_no_prefixes[sell_return]">
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Expenses:</h5>
						    @php
                            $expenses_prefix = '';
                            if(!empty($business->ref_no_prefixes['expense'])){
                                $expenses_prefix = json_decode($business->ref_no_prefixes,true);
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[expense]" type="text" value="{{$purchase_prefix['expense']}}" id="ref_no_prefixes[expense]">
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Contacts:</h5>
						   @php
                            $contacts_prefix = '';
                            if(!empty($business->ref_no_prefixes['contacts'])){
                                $contacts_prefix = json_decode($business->ref_no_prefixes,true);
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[contacts]" type="text" value="CO" id="{{$purchase_prefix['contacts']}}">
                        </div>
                     </div>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-4 form-group">
                           <h5>Purchase Payment:</h5>
						   @php
                            $purchase_payment = '';
                            if(!empty($business->ref_no_prefixes['purchase_payment'])){
                                $purchase_payment = json_decode($business->ref_no_prefixes,true);
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[purchase_payment]" type="text" value="{{$purchase_prefix['purchase_payment']}}" id="ref_no_prefixes[purchase_payment]">              
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Sell Payment:</h5>
						    @php
                            $sell_payment = '';
                            if(!empty($business->ref_no_prefixes['sell_payment'])){
                                $sell_payment = $business->ref_no_prefixes['sell_payment'];
                            }
                        @endphp
                           <input class="form-control" name="ref_no_prefixes[sell_payment]" type="text" value="{{$purchase_prefix['sell_payment']}}" id="ref_no_prefixes[sell_payment]">
                        </div>
                        <div class="col-lg-4 form-group">
                           <h5>Business Location:</h5>
						   @php
                            $business_location_prefix = '';
                            if(!empty($business->ref_no_prefixes['business_location'])){
                                $business_location_prefix = $business->ref_no_prefixes['business_location'];
                            }
                        @endphp
						   
                           <input class="form-control" name="ref_no_prefixes[business_location]" type="text" value="{{$purchase_prefix['business_location']}}" id="ref_no_prefixes[business_location]">
                        </div>
                     </div>
					 @php 
						//print_r($business->stop_selling_before);
					 @endphp
					 <input type="hidden" value="{{$business->owner_id}}" name="owner_id">
					 <input type="hidden" value="{{$business->stop_selling_before}}" name="stop_selling_before">
                     <div class="form-group row"  style="margin: auto;">
                        <div class="col-md-9">
                           <button type="submit" class="btn btn-primary">Update Setting </button>
                        </div>
                     </div>
					 <br/>
                  </div>
               </div>
         </div>
         </form>
         <div class="row"></div>
      </div>
   </div>
</div>
     
</div>
 </div>

@endsection
	