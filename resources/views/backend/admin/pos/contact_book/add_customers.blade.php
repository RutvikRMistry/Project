@extends('backend.master')
@section('title',"Add Role")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Roles</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form>
               <div class="row" >
                  <div class="col-lg-4 form-group">
                     <h5>Role Name:*:</h5>
                     <input class="form-control" required="" placeholder="Role Name" name="name" type="text" id="name">
                  </div>
               </div>
               <!-- End Panel Basic -->
               <div class="row" style="height:70px">
                  <div class="col-lg-4 ">
                     <h5>Permissions:</h5>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-lg-2 ">
                     <h5>User</h5>
                  </div>
                  <div class="col-lg-2 ">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete User</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Supplier</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="supplier.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View supplier</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="supplier.create" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Add supplier</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="supplier.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit supplier</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="supplier.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete supplier</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Customer</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="customer.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View customer</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"name="permissions[]" type="checkbox" value="customer.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add customer</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="customer.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit customer</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="customer.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete customer</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Product</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add product</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="product.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit product</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete product</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.opening_stock"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Add Opening Stock</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Purchase & Stock Adjustment</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View purchase & Stock Adjustment</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add purchase & Stock Adjustment</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit purchase & Stock Adjustment</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.delete" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete purchase & Stock Adjustment</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Sell</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="direct_sell.access" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Access sell</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Brand</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View tax rate</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add tax rate</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.update" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit tax rate</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete tax rate</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Unit</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.create" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add unit</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit unit</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete unit</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Category</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="category.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">View category</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="category.create" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Add category</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="category.update" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Edit category</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="category.delete" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">Delete category</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Report</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase_n_sell_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View purchase & sell report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="tax_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View Tax report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="contacts_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View Supplier & Customer report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="expense_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View expense report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="profit_loss_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">  View profit/loss report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="stock_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View stock report, stock adjustment report & stock expiry report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="trending_product_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View trending product report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="register_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View register report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sales_representative.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked">  View sales representative report</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Settings</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="business_settings.access" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Access business settings</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="barcode_settings.access"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Access barcode settings</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="invoice_settings.access" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Access invoice settings</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="expense.access"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> Access expenses</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-4 ">
                     <h5>Home </h5>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="dashboard.data"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           />
                        <label for="inputUnchecked"> View Home data</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary pull-right">Update</button>                       
                  </div>
               </div>
            </form>
         </div>
      </div>
             
   </div>
</div>
</div>
 </div>

@endsection
	