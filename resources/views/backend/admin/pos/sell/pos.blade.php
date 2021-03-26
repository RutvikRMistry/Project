@extends('backend.master')
@section('title',"View Sell")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
 <div class="row" data-plugin="matchHeight" data-by-row="true">
<div class="col-sm-12 col-lg-8 panel-body" >
   <div class="panel-heading" style="background-color: #fff;">
      <h3 class="panel-title"><i class="icon fa-keyboard-o" aria-hidden="true" style="font-size: 20px;"></i>POS TERMINAL</h3>
      <div style="padding-left: 30px; padding-right: 30px;">
         <div class="row">
            <div class="col-lg-4">
               <div class="example-col">
                  <div class="input-group bootstrap-touchspin">
                     <span class="input-group-btn" style="margin-top: 30px; margin-bottom: 30px;">
                     <button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><i class="icon fa-user-circle" aria-hidden="true"></i></button>
                     </span>
                     <div class="example" data-select2-id="125" style=" margin-top: 20px; margin-bottom: 20px;">
                        <select class="form-control select2-hidden-accessible" data-plugin="select2" data-placeholder="Walk-in Customers" data-allow-clear="true" data-select2-id="6" tabindex="-1" aria-hidden="true">
                           <option data-select2-id="8"></option>
                           <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="128">
                              <option value="AK" data-select2-id="129">Rushikesh</option>
                              <option value="HI" data-select2-id="130">Niraj</option>
                           </optgroup>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="7">
                        <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3xey-container" style="margin-top: 10px;">
                        <span class="select2-selection__rendered" id="select2-3xey-container" role="textbox" aria-readonly="true">
                        <span class="select2-selection__placeholder">Walk-in Customers</span>
                        </span>
                        <span class="select2-selection__arrow" role="presentation" style="margin-top: 10px;"><b role="presentation"></b></span>
                        </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                     </div>
                     <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                     <span class="input-group-btn" style="margin-top: 30px; margin-bottom: 30px;"><button class="btn btn-outline btn-default bootstrap-touchspin-up" type="button"><i class="icon fa-plus-circle" aria-hidden="true"></i></button></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="example-col">
                  <div class="input-group bootstrap-touchspin">
                     <div class="example" data-select2-id="125" style=" margin-top: 20px; margin-bottom: 20px;">
                        <select class="form-control select2-hidden-accessible" data-plugin="select2" data-placeholder="Commission Agent" data-allow-clear="true" data-select2-id="6" tabindex="-1" aria-hidden="true">
                           <option data-select2-id="8"></option>
                           <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="128">
                              <option value="AK" data-select2-id="129">Agent Rushikesh</option>
                              <option value="HI" data-select2-id="130">Agent Niraj</option>
                           </optgroup>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="7">
                        <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3xey-container" style="margin-top: 10px;">
                        <span class="select2-selection__rendered" id="select2-3xey-container" role="textbox" aria-readonly="true">
                        <span class="select2-selection__placeholder">Commission Agent</span>
                        </span>
                        <span class="select2-selection__arrow" role="presentation" style="margin-top: 10px;"><b role="presentation"></b></span>
                        </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                     </div>
                     <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="example-col">
                  <div class="input-group bootstrap-touchspin">
                     <span class="input-group-btn" style="margin-top: 30px; margin-bottom: 30px;">
                     <button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><i class="icon fa-barcode" aria-hidden="true"></i></button>
                     </span>
                     <div class="example" data-select2-id="125" style=" margin-top: 20px; margin-bottom: 20px;">
                        <select class="form-control select2-hidden-accessible" data-plugin="select2" data-placeholder="Enter Product Name/SKU/Scan Bar code" data-allow-clear="true" data-select2-id="6" tabindex="-1" aria-hidden="true">
                           <option data-select2-id="8"></option>
                           <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="128">
                              <option value="AK" data-select2-id="129">Rushikesh</option>
                              <option value="HI" data-select2-id="130">Niraj</option>
                           </optgroup>
                        </select>
                        <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="7">
                        <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3xey-container" style="margin-top: 10px;">
                        <span class="select2-selection__rendered" id="select2-3xey-container" role="textbox" aria-readonly="true">
                        <span class="select2-selection__placeholder">Enter Product Name/SKU/Scan Bar code</span>
                        </span>
                        <span class="select2-selection__arrow" role="presentation" style="margin-top: 10px;"><b role="presentation"></b></span>
                        </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                        </span>
                     </div>
                     <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Table Starts POS Entries and Delete -->
      <div style="padding: 30px;">
         <div class="bootstrap-table">
            <div class="fixed-table-body">
               <div class="fixed-table-toolbar"></div>
               <div class="fixed-table-container" style="height: 250px; padding-bottom: 36px;">
                  <div class="fixed-table-header" style="margin-right: 0px;"></div>
                  <table id="exampleTableFromData" data-mobile-responsive="true" class="table table-hover" style="margin-top: -36px;">
                     <thead style="background-color: #f1f4f5;">
                        <tr>
                           <th style="" data-field="Products">
                              <div class="th-inner ">Product</div>
                              <div class="fht-cell" style="width: 284px;"></div>
                           </th>
                           <th style="" data-field="Quantity">
                              <div class="th-inner ">Quantity</div>
                              <div class="fht-cell" style="width: 286px;"></div>
                           </th>
                           <th style="" data-field="Sub Total">
                              <div class="th-inner ">Sub Total</div>
                              <div class="fht-cell" style="width: 177px;"></div>
                           </th>
                           <th style="" data-field="Delete">
                              <div class="th-inner "><i class="icon fa-trash-o" aria-hidden="true"></i>Delete</div>
                              <div class="fht-cell" style="width: 77px;"></div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr data-index="0">
                           <td class="fht-cell" style="width: 307px;">
                              <span class="text-link text-info" title="Edit product Unit Price and Tax" data-toggle="modal" data-target="#row_edit_product_price_modal_1">
                              <div style="float: left; width: 10%;"><a class="avatar avatar-lg" href="javascript:void(0)"><img src="../../../assets/photos/2-600x600.jpg" alt="..." style="border-radius: 8px;">
                                 </a>
                              </div>
                              <div style="float: right; width: 90%; padding-left: 20px; padding-top: 15px;"><span>Bingo Pop Rings BPOP123456, Balaji <i class="icon fa-sticky-note" aria-hidden="true"></i></span></div>
                           </td>
                           <td class="fht-cell" style="width: 303px; ">
                              <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" class="form-control" name="touchSpinVertical" data-plugin="TouchSpin" data-verticalbuttons="true" value="0" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-outline btn-default bootstrap-touchspin-up" type="button"><i class="wb-plus"></i></button><button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><i class="wb-minus"></i></button></span></div>
                           </td>
                           <td class="fht-cell" style="width: 187px;"><b>5.50 $</b></td>
                           <td class="fht-cell" style="width: 77px; ">
                              <div class="time"><button type="button" class="btn btn-sm btn-danger" style="width: 100%">
                                 <i class="icon fa-trash-o" aria-hidden="true"></i><span class="text">DELETE</span></button>
                              </div>
                           </td>
                        </tr>
                        <tr data-index="0">
                           <td class="fht-cell" style="width: 307px;">
                              <span class="text-link text-info" title="Edit product Unit Price and Tax" data-toggle="modal" data-target="#row_edit_product_price_modal_1">
                              <div style="float: left; width: 10%;"><a class="avatar avatar-lg" href="javascript:void(0)"><img src="../../../assets/photos/3-600x600.jpg" alt="..." style="border-radius: 8px;">
                                 </a>
                              </div>
                              <div style="float: right; width: 90%; padding-left: 20px; padding-top: 15px;"><span>Bingo Pop Rings BPOP123456, Balaji <i class="icon fa-sticky-note" aria-hidden="true"></i></span></div>
                           </td>
                           <td class="fht-cell" style="width: 303px; ">
                              <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" class="form-control" name="touchSpinVertical" data-plugin="TouchSpin" data-verticalbuttons="true" value="0" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-outline btn-default bootstrap-touchspin-up" type="button"><i class="wb-plus"></i></button><button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><i class="wb-minus"></i></button></span></div>
                           </td>
                           <td class="fht-cell" style="width: 187px;"><b>5.50 $</b></td>
                           <td class="fht-cell" style="width: 77px; ">
                              <div class="time"><button type="button" class="btn btn-sm btn-danger" style="width: 100%">
                                 <i class="icon fa-trash-o" aria-hidden="true"></i><span class="text">DELETE</span></button>
                              </div>
                           </td>
                        </tr>
                        <tr data-index="0">
                           <td class="fht-cell" style="width: 307px;">
                              <span class="text-link text-info" title="Edit product Unit Price and Tax" data-toggle="modal" data-target="#row_edit_product_price_modal_1">
                              <div style="float: left; width: 10%;"><a class="avatar avatar-lg" href="javascript:void(0)"><img src="../../../assets/photos/2-600x600.jpg" alt="..." style="border-radius: 8px;">
                                 </a>
                              </div>
                              <div style="float: right; width: 90%; padding-left: 20px; padding-top: 15px;"><span>Bingo Pop Rings BPOP123456, Balaji <i class="icon fa-sticky-note" aria-hidden="true"></i></span></div>
                           </td>
                           <td class="fht-cell" style="width: 303px; ">
                              <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" class="form-control" name="touchSpinVertical" data-plugin="TouchSpin" data-verticalbuttons="true" value="0" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-outline btn-default bootstrap-touchspin-up" type="button"><i class="wb-plus"></i></button><button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><i class="wb-minus"></i></button></span></div>
                           </td>
                           <td class="fht-cell" style="width: 187px;"><b>5.50 $</b></td>
                           <td class="fht-cell" style="width: 77px; ">
                              <div class="time"><button type="button" class="btn btn-sm btn-danger" style="width: 100%">
                                 <i class="icon fa-trash-o" aria-hidden="true"></i><span class="text">DELETE</span></button>
                              </div>
                           </td>
                        </tr>
                        <tr data-index="0">
                           <td class="fht-cell" style="width: 307px;">
                              <span class="text-link text-info" title="Edit product Unit Price and Tax" data-toggle="modal" data-target="#row_edit_product_price_modal_1">
                              <div style="float: left; width: 10%;"><a class="avatar avatar-lg" href="javascript:void(0)"><img src="../../../assets/photos/1-600x600.jpg" alt="..." style="border-radius: 8px;">
                                 </a>
                              </div>
                              <div style="float: right; width: 90%; padding-left: 20px; padding-top: 15px;"><span>Bingo Pop Rings BPOP123456, Balaji <i class="icon fa-sticky-note" aria-hidden="true"></i></span></div>
                           </td>
                           <td class="fht-cell" style="width: 303px; ">
                              <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" class="form-control" name="touchSpinVertical" data-plugin="TouchSpin" data-verticalbuttons="true" value="0" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-outline btn-default bootstrap-touchspin-up" type="button"><i class="wb-plus"></i></button><button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><i class="wb-minus"></i></button></span></div>
                           </td>
                           <td class="fht-cell" style="width: 187px;"><b>5.50 $</b></td>
                           <td class="fht-cell" style="width: 77px; ">
                              <div class="time"><button type="button" class="btn btn-sm btn-danger" style="width: 100%">
                                 <i class="icon fa-trash-o" aria-hidden="true"></i><span class="text">DELETE</span></button>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="fixed-table-pagination" style="display: none;"></div>
            </div>
            <!-- Starts Here for Prices POS -->
            <div style="padding: 10px; ">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="example-col" style="padding-top: 5px;">Items: <i class="icon fa-dollar" aria-hidden="true"></i> 2</i></div>
                  </div>
                  <div class="col-lg-2">
                     <div class="example-col" style="padding-top: 5px;">Total: <i class="icon fa-dollar" aria-hidden="true"></i> 36</i></div>
                  </div>
                  <div class="col-lg-2">
                     <div class="example-col" style="padding-top: 5px;">Order Tax(+): <i class="icon fa-dollar" aria-hidden="true"></i> 38.2</i></div>
                  </div>
                  <div class="col-lg-2">
                     <div class="example-col" style="padding-top: 5px;">Total Payable: <i class="icon fa-dollar" aria-hidden="true"></i> 50.2</i></div>
                  </div>
                  <div class="col-lg-2">
                     <div class="example-col">
                        <div class="time" style="float: right;"><button type="button" class="btn btn-sm btn-primary" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i><span class="text">CANCEL</span></button>
                        </div>
                     </div>
                  </div>
                  <div style="padding-top: 20px; width: 100%">
                     <div class="btn-group btn-group-justified">
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-primary">
                           <i class="icon fa-file-text" aria-hidden="true" style="font-size: 32px;"></i>
                           <br>
                           <span class="text-uppercase hidden-sm-down">Draft</span>
                           </button>
                        </div>
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-info">
                           <i class="icon fa-newspaper-o" aria-hidden="true" style="font-size: 32px;"></i>
                           <br>
                           <span class="text-uppercase hidden-sm-down">Quotations</span>
                           </button>
                        </div>
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-danger">
                           <i class="icon fa-credit-card" aria-hidden="true" style="font-size: 32px;"></i>
                           <br>
                           <span class="text-uppercase hidden-sm-down">Card</span>
                           </button>
                        </div>
                        <div class="btn-group" role="group">
                           <button type="button" class="btn btn-warning">
                           <i class="icon fa-money" aria-hidden="true" style="font-size: 32px;"></i>
                           <br>
                           <span class="text-uppercase hidden-sm-down">Cash</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Here for Prices POS -->
         </div>
      </div>
      <!-- Table Ends POS Entries and Delete-->
   </div>
</div>
<div class="col-sm-6 col-lg-4 panel-body">
<div class="panel-heading " style="background-color: #fff;">
<div class="form-group">
   <h3 class="panel-title" style="margin-left: -10px;"><i class="icon fa-cart-plus" aria-hidden="true"></i>Add to Products</h3>
   <div style="padding: 10px; background-color: #fff; width: 50%; float: left;"><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" data-select2-id="7"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ng8d-container"><span class="select2-selection__rendered" id="select2-ng8d-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">All Categories</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
   <div style="padding: 10px; background-color: #fff; width: 50%; float: right;"><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" data-select2-id="7"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ng8d-container"><span class="select2-selection__rendered" id="select2-ng8d-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">All Brands</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
   <div class="input-group" style="padding: 10px; background-color: #fff; width: 100%;">
      <input type="text" class="form-control" name="" placeholder="Search...">
      <span class="input-group-btn">
      <button type="submit" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
      </span>
   </div>
</div>
<div >
   <div class="w-full fixed-table-body" style="padding: 20px; background-color: #fff; height: 295px;">
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/9-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/10-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/1-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/2-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/3-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/4-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/6-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/7-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/8-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/9-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/10-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/1-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/2-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/3-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/4-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/6-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/7-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/8-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/9-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
      <div style="margin-left:10px; background-color: #fff; float: left;">
         <div class="card" style="width: 90px;">
            <img class="card-img-top img-fluid w-full" src="../../../assets/photos/10-600x600.jpg" alt="Card image cap">
            <div>
               <small class="text-muted">
                  Bingo Pop Rings 
                  <p>(BPOP123456)</p>
               </small>
            </div>
         </div>
      </div>
   </div>
   <div style="margin-top:0px;">
      <h3 class="panel-title" style="margin-left: -10px;">
         <i class="icon fa-pencil-square-o" aria-hidden="true" ></i>Your Recent Transactions
      </h3>
      <div class="col-xl-12">
         <!-- Example Tabs -->
         <div class="example-wrap">
            <div class="nav-tabs-horizontal" data-plugin="tabs">
               <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab" aria-selected="true">Final Trans.</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab" aria-selected="false">Quotations</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree" role="tab" aria-selected="false">Draft</a></li>
               </ul>
               <div class="tab-content pt-20">
                  <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                     <table class="tablesaw table-striped table-bordered table-hover tablesaw-sortable tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="tablesaw-7762">
                        <thead>
                           <tr>
                              <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                 <button class="tablesaw-sortable-btn">Pay No.<span class="tablesaw-sortable-arrow"></span></button>
                              </th>
                              <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                 <button class="tablesaw-sortable-btn">Invoiceo.<span class="tablesaw-sortable-arrow"></span></button>
                              </th>
                              <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                 <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                              </th>
                              <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                 <button class="tablesaw-sortable-btn">Edit<span class="tablesaw-sortable-arrow"></span></button>
                              </th>
                              <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                 <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="tablesaw-swipe-cellpersist"><a href="javascript:void(0)">1</a></td>
                              <td> 0020</td>
                              <td>
                                 <button type="button" class="btn btn-sm btn-info" style="width: 80px;"><i class="icon fa-dollar" aria-hidden="true"></i>
                                 <span class="text">82</span>
                                 </button>
                              </td>
                              <td><button type="button" class="btn btn-sm btn-warning"><i class="icon fa-trash" aria-hidden="true"></i>
                                 <span class="text">Edit</span></button>
                              </td>
                              <td><button type="button" class="btn btn-sm btn-primary"><i class="icon fa-trash" aria-hidden="true"></i>
                                 <span class="text">Delete</span></button>
                              </td>
                           </tr>
                           <tr>
                              <td class="tablesaw-swipe-cellpersist"><a href="javascript:void(0)">2</a></td>
                              <td>021</td>
                              <td>
                                 <button type="button" class="btn btn-sm btn-info" style="width: 80px;""><i class="icon fa-dollar" 
                                    aria-hidden="true"></i>
                                 <span class="text">82</span>
                                 </button>
                              </td>
                              <td><button type="button" class="btn btn-sm btn-warning"><i class="icon fa-trash" aria-hidden="true"></i>
                                 <span class="text">Edit</span></button>
                              </td>
                              <td><button type="button" class="btn btn-sm btn-primary"><i class="icon fa-trash" aria-hidden="true"></i>
                                 <span class="text">Delete</span></button>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                     <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                        <table class="tablesaw table-striped table-bordered table-hover tablesaw-sortable tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="tablesaw-7762">
                           <thead>
                              <tr>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Pay No.<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Invoiceo.<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Edit<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tablesaw-swipe-cellpersist"><a href="javascript:void(0)">1</a></td>
                                 <td> 0020</td>
                                 <td>
                                    <button type="button" class="btn btn-sm btn-info" style="width: 80px;"><i class="icon fa-dollar" aria-hidden="true"></i>
                                    <span class="text">82</span>
                                    </button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-warning"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Edit</span></button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-primary"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Delete</span></button>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="tablesaw-swipe-cellpersist"><a href="javascript:void(0)">2</a></td>
                                 <td>021</td>
                                 <td>
                                    <button type="button" class="btn btn-sm btn-info" style="width: 80px;""><i class="icon fa-dollar" 
                                       aria-hidden="true"></i>
                                    <span class="text">82</span>
                                    </button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-warning"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Edit</span></button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-primary"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Delete</span></button>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                     <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                        <table class="tablesaw table-striped table-bordered table-hover tablesaw-sortable tablesaw-swipe" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" data-tablesaw-minimap="" data-tablesaw-mode-switch="" id="tablesaw-7762">
                           <thead>
                              <tr>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Pay No.<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Invoiceo.<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Edit<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                                 <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="persist" class="tablesaw-sortable-head tablesaw-sortable-ascending tablesaw-swipe-cellpersist" data-tablesaw-sortable-numeric="false">
                                    <button class="tablesaw-sortable-btn">Amount<span class="tablesaw-sortable-arrow"></span></button>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tablesaw-swipe-cellpersist"><a href="javascript:void(0)">1</a></td>
                                 <td> 0020</td>
                                 <td>
                                    <button type="button" class="btn btn-sm btn-info" style="width: 80px;"><i class="icon fa-dollar" aria-hidden="true"></i>
                                    <span class="text">82</span>
                                    </button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-warning"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Edit</span></button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-primary"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Delete</span></button>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="tablesaw-swipe-cellpersist"><a href="javascript:void(0)">2</a></td>
                                 <td>021</td>
                                 <td>
                                    <button type="button" class="btn btn-sm btn-info" style="width: 80px;""><i class="icon fa-dollar" 
                                       aria-hidden="true"></i>
                                    <span class="text">82</span>
                                    </button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-warning"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Edit</span></button>
                                 </td>
                                 <td><button type="button" class="btn btn-sm btn-primary"><i class="icon fa-trash" aria-hidden="true"></i>
                                    <span class="text">Delete</span></button>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Example Tabs -->
      </div>
   </div>
</div>     
 </div>

@endsection
	