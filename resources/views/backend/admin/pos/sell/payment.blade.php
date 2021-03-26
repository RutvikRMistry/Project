@extends('backend.master')
@section('title',"Payment")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">View Payments ( Invoice No.: 0020 )</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row" >
               <div class="col-lg-4 form-group">
                  Customer:
                  <address>
                     <strong>walk</strong>
                     <br>Mobile: 100
                  </address>
               </div>
               <div class="col-lg-4 form-group">
                  Business:
                  <address>
                     <strong>AltaVista</strong>
                     POS<br>Dubai<br>Dubai,Dubai,UAE
                  </address>
               </div>
               <div class="col-lg-4 form-group">
                  <b>Invoice No.:</b> #0020<br>
                  <b>Date:</b> 07-22-2020<br>
                  <b>Payment Status:</b> Paid<br>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <table class="table table-striped">
                     <tbody>
                        <tr>
                           <th>Date</th>
                           <th>Reference No</th>
                           <th>Amount</th>
                           <th>Payment Method</th>
                           <th>Payment Note</th>
                           <th class="no-print">Actions</th>
                        </tr>
                        <tr>
                           <td>07-22-2020</td>
                           <td>SP2020/0038</td>
                           <td><span class="display_currency" data-currency_symbol="true">5.61 $</span></td>
                           <td>Cash</td>
                           <td></td>
                           <td class="no-print">
                              <a href="{{route('backend.admin.pos.sell.edit_payment')}}">
                              <button type="button" class="btn btn-info btn-xs edit_payment" ><i class="glyphicon glyphicon-edit"></i></button> </a>
                              &nbsp; <button type="button" class="btn btn-danger btn-xs delete_payment" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="form-group row"  style="margin: auto;">
               <button type="button" class="btn btn-primary no-print" aria-label="Print" >
               <i class="fa fa-print"></i> Print      </button>
               <button type="button" class="btn btn-default no-print" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
@endsection
	