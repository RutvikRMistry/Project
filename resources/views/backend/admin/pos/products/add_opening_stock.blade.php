@extends('backend.master')
@section('title',"Add Opening Stock")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Opening Stock</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row">
               <div class="col-sm-12">
                  <table class="table table-condensed table-bordered table-th-green text-center table-striped add_opening_stock_table">
                     <thead>
                        <tr>
                           <th>Product Name</th>
                           <th>Quantity</th>
                           <th>Unit Cost (Before Tax)</th>
                           <th>Exp. Date</th>
                           <th>Subtotal (Before Tax)</th>
                           <th>&nbsp;</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              Bingo Pop Rings 
                              <input name="stocks[1][1][0][purchase_line_id]" type="hidden" value="1">
                           </td>
                           <td>
                              <div class="input-group">
                                 <input class="form-control input-sm input_number purchase_quantity" required="" name="stocks[1][1][0][quantity]" type="text" value="500.00">
                                 <span class="input-group-addon">
                                 Pc(s)
                                 </span>
                              </div>
                           </td>
                           <td>
                              <input class="form-control input-sm input_number unit_price" required="" name="stocks[1][1][0][purchase_price]" type="text" value="5.00">
                           </td>
                           <td>
                              <input class="form-control input-sm os_exp_date" readonly="" name="stocks[1][1][0][exp_date]" type="text">
                           </td>
                           <td>
                              <span class="row_subtotal_before_tax">2,500.00</span>
                           </td>
                           <td>
                              <button type="button" class="btn btn-primary btn-xs add_stock_row" data-sub-key="2" ><i class="fa fa-plus"></i></button>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              Bingo Pop Rings 
                              <input name="stocks[1][1][1][purchase_line_id]" type="hidden" value="2">
                           </td>
                           <td>
                              <div class="input-group">
                                 <input class="form-control input-sm input_number purchase_quantity" required="" name="stocks[1][1][1][quantity]" type="text" value="1,000.00">
                                 <span class="input-group-addon">
                                 Pc(s)
                                 </span>
                              </div>
                           </td>
                           <td>
                              <input class="form-control input-sm input_number unit_price" required="" name="stocks[1][1][1][purchase_price]" type="text" value="5.00">
                           </td>
                           <td>
                              <input class="form-control input-sm os_exp_date" readonly="" name="stocks[1][1][1][exp_date]" type="text">
                           </td>
                           <td>
                              <span class="row_subtotal_before_tax">5,000.00</span>
                           </td>
                           <td>
                              &nbsp;
                           </td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <td colspan=" "></td>
                           <td><strong>Total Amount (Exc. Tax): </strong> <span id="total_subtotal">7,500.00</span>
                              <input type="hidden" id="total_subtotal_hidden" value="0">
                           </td>
                        </tr>
                     </tfoot>
                  </table>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" >Save</button>
                     <button type="button" class="btn btn-default no-print" >Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>             
   </div>
</div>
</div>
 </div>

@endsection
	