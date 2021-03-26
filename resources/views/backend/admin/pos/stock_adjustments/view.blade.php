@extends('backend.master')
@section('title',"View Stock Adjustment")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
               <thead>
                  <tr>
                     <th>Product</th>
                     <th>Quantity </th>
                     <th>Unit Price</th>
                     <th>Sub Total </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Bingo Pop Rings ( BPOP123456 )  </td>
                     <td>1</td>
                     <td>12.00 </td>
                     <td>0.00 </td>
                  </tr>
               </tbody>
            </table>
            <div>
         </header>
         <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
         <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
         </div>
         </div>
         <div class="row"></div>
         </div>
      </div>           
   </div>
</div>
 </div>

@endsection
	