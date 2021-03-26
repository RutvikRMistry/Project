@extends('backend.master')
@section('title',"View Product")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Bingo Pop Rings</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="panel-body container-fluid">
               <div class="row">
                  <div class="col-lg-3">
                     <b>SKU:</b>
                     {{$pro->sku}}<br>
                     <b>Brand(work on it later): </b>
                     Balaji<br>
                     <b>Unit(work on it later): </b>
                     Pc(s)<br>
                     <b>Barcode Type: </b>
                     {{$pro->barcode_type}}
                  </div>
                  <div class="col-lg-3 offset-lg-6 text-right">
                     <b>Category(work on it later): </b>
                     Chesse Rings<br>
                     <b>Sub category(work on it later): </b>
                     Pop Rings<br> 
                     <b>Manage Stock?(work on it later): </b>
                     Yes                   <br>
                     <b>Alert quantity: </b>
                     {{$pro->alert_quantity}}
                  </div>
               </div>
               <div class="page-invoice-table table-responsive">
                  <table class="table table-hover text-right">
                     <thead>
                        <tr>
                           <th class="text-center">#</th>
                           <th>Description</th>
                           <th class="text-right">Quantity</th>
                           <th class="text-right">Unit Cost</th>
                           <th class="text-right">Total</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="text-center">
                              1
                           </td>
                           <td class="text-left">
                              Server hardware purchase
                           </td>
                           <td>
                              32
                           </td>
                           <td>
                              $75
                           </td>
                           <td>
                              $2152
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="text-right clearfix">
                  <div class="float-right">
                     <p>Sub - Total amount:
                        <span>$4800</span>
                     </p>
                     <p>VAT:
                        <span>$35</span>
                     </p>
                     <p class="page-invoice-amount">Grand Total:
                        <span>$4835</span>
                     </p>
                  </div>
               </div>
               <div class="text-right">
                  <button type="submit" class="btn btn-animate btn-animate-side btn-primary">
                  <span><i class="icon wb-shopping-cart" aria-hidden="true"></i> Proceed
                  to payment</span>
                  </button>
                  <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
                     onclick="javascript:window.print();">
                  <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
      
</div>
</div>
 </div>

@endsection
	