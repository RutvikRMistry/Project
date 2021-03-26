@extends('backend.master')
@section('title',"View Register ")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Register Details ( 15th May, 2019 03:19 AM - 13th Aug, 2020 11:14 AM)</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="col-sm-12">
               <table class="table">
                  <tbody>
                     <tr>
                        <td>
                           Cash in hand:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">50,000.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Cash Payment:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">5,720.75 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Cheque Payment:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">10.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Card Payment:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">0.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Bank Transfer:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">0.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Custom Payment 1:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">0.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Other Payments:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">0.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           Total Sales:
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">5,730.75 $</span>
                        </td>
                     </tr>
                     <tr class="success">
                        <th>
                           Total Refund              
                        </th>
                        <td>
                           <b><span class="display_currency" data-currency_symbol="true">0.00 $</span></b><br>
                           <small>
                           </small>
                        </td>
                     </tr>
                     <tr class="success">
                        <th>
                           Total Cash              
                        </th>
                        <td>
                           <b><span class="display_currency" data-currency_symbol="true">55,720.75 $</span></b>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="col-md-12">
               <hr>
               <h3>Details of products sold</h3>
               <table class="table">
                  <tbody>
                     <tr>
                        <th>#</th>
                        <th>Brands</th>
                        <th>Quantity</th>
                        <th>Total amount</th>
                     </tr>
                     <tr>
                        <td>
                           1.
                        </td>
                        <td>
                           Balaji
                        </td>
                        <td>
                           1123.0000
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">6,186.00 $</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           2.
                        </td>
                        <td>
                        </td>
                        <td>
                           2.0000
                        </td>
                        <td>
                           <span class="display_currency" data-currency_symbol="true">15.00 $</span>
                        </td>
                     </tr>
                     <!-- Final details -->
                     <tr class="success">
                        <th>#</th>
                        <th></th>
                        <th>1125</th>
                        <th>
                           Order Tax: (+)
                           <span class="display_currency" data-currency_symbol="true">0.11 $</span>
                           <br>
                           Discount: (-)
                           <span class="display_currency" data-currency_symbol="true">404.25 $</span>
                           <br>
                           Grand Total:
                           <span class="display_currency" data-currency_symbol="true">5,796.86 $</span>
                        </th>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="col-sm-12">
               <b>User:</b> Mr David Felming<br>
               <b>Email:</b> davidfelming980@gmail.com
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary no-print" aria-label="Print">
               <i class="fa fa-print"></i> Print      </button>
               <button type="button" class="btn btn-default no-print" data-dismiss="modal">Cancel      </button>
            </div>
         </div>
      </div>
           
   </div>
</div>
</div>
 </div>

@endsection
	