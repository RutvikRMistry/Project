<!-- Top Menubar Starts Here-->
<div class="site-menubar site-menubar-light">
  <div class="site-menubar-body">
	<div>
	  <div>
		 <ul class="site-menu" data-plugin="menu">
			<li class="dropdown site-menu-item has-sub">
			<a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
					<i class="site-menu-icon icon fa-calendar" aria-hidden="true"></i>
					<span class="site-menu-title"><b>RESERVATION CRM</b></span>
						<span class="site-menu-arrow"></span>
				</a>
			<div class="dropdown-menu">
			  <div class="site-menu-scroll-wrap is-list">
				<div>
				  <div>
					<ul class="site-menu-sub site-menu-normal-list">
					  <li class="site-menu-item">
						 <a href="{{route('backend.admin.frontdesk.dashboard')}}">
						   <i class="site-menu-icon icon fa-dashboard" aria-hidden="true"></i>
							<span class="site-menu-title">Dashboard</span>
						 </a>
					  </li>
					 <li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-calendar" aria-hidden="true"></i>
						  <span class="site-menu-title">Reservations</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.reservation')}}/online">
							  <span class="site-menu-title">- Online Reservation</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.reservation')}}/offline">
							  <span class="site-menu-title">- Offline Reservation</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item">
						<a class="animsition-link" href="{{route('backend.admin.frontdesk.guest')}}">
						  <i class="site-menu-icon icon fa-male" aria-hidden="true"></i>
						  <span class="site-menu-title">Guest Information</span>
						</a>
					  </li>
					  <li class="site-menu-item">
						<a class="animsition-link" href="{{route('backend.admin.frontdesk.staff')}}">
						   <i class="icon fa-user-circle" aria-hidden="true"></i>
						  <span class="site-menu-title">Staff</span>
						</a>
					  </li>
					  <li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-hotel" aria-hidden="true"></i>
						  <span class="site-menu-title">Hotel Configurations</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.room_type')}}">
							  <span class="site-menu-title">- Room Types</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.rooms')}}">
							  <span class="site-menu-title">- Rooms</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.paid_service')}}">
							  <span class="site-menu-title">- Paid Services</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.coupon')}}">
							  <span class="site-menu-title">- Coupon Master</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.floor')}}">
							  <span class="site-menu-title">- Floors</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.amenities')}}">
							  <span class="site-menu-title">- Amenities</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.hotel_configure.tax')}}">
							  <span class="site-menu-title">- Taxes</span>
							</a>
						  </li>
						</ul>
					  </li>
					  <li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-cc-visa" aria-hidden="true"></i>
						  <span class="site-menu-title">Payment Settings</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.payment_setting.gateway')}}">
							  <span class="site-menu-title">- Gateways</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.payment_setting.payment_log')}}">
							  <span class="site-menu-title">- Payment Logs</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-cog" aria-hidden="true"></i>
						  <span class="site-menu-title">General Settings</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.general_settings')}}">
							  <span class="site-menu-title">- General Setting</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.general-setting.logo_and_fav_setting')}}">
							  <span class="site-menu-title">- Logo & Favicon</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="../frontdesk/general_setting/email_setting.html">
							  <span class="site-menu-title">- Email Settings</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.general-setting.sms_setting')}}">
							  <span class="site-menu-title">- SMS Seetings</span>
							</a>
						  </li>						  
						</ul>
					  </li>
					  <li class="site-menu-item has-sub">
						<a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-code" aria-hidden="true"></i>
						  <span class="site-menu-title">Website Settings</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.home')}}">
							  <span class="site-menu-title">- Home</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.gallery')}}">
							  <span class="site-menu-title">- Manage Gallery</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.blog')}}">
							  <span class="site-menu-title">- Blog</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.faq')}}">
							  <span class="site-menu-title">- FAQ's</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.contact')}}">
							  <span class="site-menu-title">- Contact Info.</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.social')}}">
							  <span class="site-menu-title">- Social Links</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.footer')}}">
							  <span class="site-menu-title">- Footer Content</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.fb')}}">
							  <span class="site-menu-title">- FB Comments</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.frontdesk.website_setting.login-bg')}}">
							  <span class="site-menu-title">- Login & Breadcrumb</span>
							</a>
						  </li>
						</ul>
					  </li>                 
					  </li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </li>
	   <!-- Reservation CRM Menu Ends-->

		<!-- Banquet CRM Menu Starts-->
		  <li class="dropdown site-menu-item has-sub">
			<a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
					<i class="site-menu-icon icon fa-cutlery" aria-hidden="true"></i>
					<span class="site-menu-title"><b>BANQUET CRM</b></span>
						<span class="site-menu-arrow"></span>
				</a>
			<div class="dropdown-menu">
			  <div class="site-menu-scroll-wrap is-list">
				<div>
				  <div>
					<ul class="site-menu-sub site-menu-normal-list">
					  <li class="site-menu-item">
						<a class="animsition-link" href="{{route('backend.admin.banquet.dashboard')}}">
						  <i class="site-menu-icon icon fa-dashboard" aria-hidden="true"></i>
						  <span class="site-menu-title">Dashboard</span>
						</a>
					  </li>
					  <li class="site-menu-item">
						<a class="animsition-link" href="{{route('backend.admin.banquet.calendar')}}">
						  <i class="site-menu-icon icon wb-calendar" aria-hidden="true"></i>
						  <span class="site-menu-title">Calendar</span>
						</a>
					  </li>
					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-hand-o-up" aria-hidden="true"></i>
						  <span class="site-menu-title">Sales</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.sales.lead')}}">
							  <span class="site-menu-title">- Leads</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.sales.quotation')}}">
							  <span class="site-menu-title">- Quotations</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.sales.invoice')}}">
							  <span class="site-menu-title">- Invoices</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.sales.customer')}}">
							  <span class="site-menu-title">- Customers</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.sales.contact')}}">
							  <span class="site-menu-title">- Contact Book</span>
							</a>
						  </li>
						</ul>
					  </li>
					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-birthday-cake" aria-hidden="true"></i>
						  <span class="site-menu-title">Functions</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.functions.event')}}">
							  <span class="site-menu-title">- Functions & Events</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.functions.calendar')}}">
							  <span class="site-menu-title">- Calendar</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.functions.ticket')}}">
							  <span class="site-menu-title">- Tickets</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-tasks" aria-hidden="true"></i>
						  <span class="site-menu-title">Task</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.task.todo')}}">
							  <span class="site-menu-title">- Todo</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.task.meeting')}}">
							  <span class="site-menu-title">- Meetings</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.task.call')}}">
							  <span class="site-menu-title">- Logged Calls</span>
							</a>
						  </li>
						</ul>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </li>
		<!-- Banquet CRM Menu Ends-->

		<!-- Point of Sale Menu Starts-->
		  <li class="dropdown site-menu-item has-sub">
			<a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
					<i class="icon fa-tv" aria-hidden="true"></i>
					<span class="site-menu-title"><b>POINT OF SALE</b></span>
						<span class="site-menu-arrow"></span>
				</a>
			<div class="dropdown-menu">
			  <div class="site-menu-scroll-wrap is-list">
				<div>
				  <div>
					<ul class="site-menu-sub site-menu-normal-list">
					  <li class="site-menu-item">
						<a class="animsition-link" href="{{route('backend.admin.pos.dashboard')}}">
						  <i class="site-menu-icon icon fa-dashboard" aria-hidden="true"></i>
						  <span class="site-menu-title">Dashboard</span>
						</a>
					  </li>
					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-drivers-license" aria-hidden="true"></i>
						  <span class="site-menu-title">Office Management</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.office.user')}}">
							  <span class="site-menu-title">- Users</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.office.role')}}">
							  <span class="site-menu-title">- Roles</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.office.sales_commission')}}">
							  <span class="site-menu-title">- Sales Commission Agents</span>
							</a>
						  </li>                              
						</ul>
					  </li>
					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-address-book-o" aria-hidden="true"></i>
						  <span class="site-menu-title">Contact Book</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.contact_book.supplier')}}">
							  <span class="site-menu-title">- Suppliers</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.contact_book.customer')}}">
							  <span class="site-menu-title">- Customers</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.contact_book.customer_group')}}">
							  <span class="site-menu-title">- Customer Groups</span>
							</a>
						  </li>                              
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-beer" aria-hidden="true"></i>
						  <span class="site-menu-title">Products</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.product.add')}}">
							  <span class="site-menu-title">- Add Product</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.product.index')}}">
							  <span class="site-menu-title">- List Products</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.product.print_label')}}">
							  <span class="site-menu-title">- Print Labels</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.product.variation')}}">
							  <span class="site-menu-title">- Variations</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.product.import')}}">
							  <span class="site-menu-title">- Import Products</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.product.import_opening')}}">
							  <span class="site-menu-title">- Import Opening Stock</span>
							</a>
						  </li>

						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-cart-arrow-down" aria-hidden="true"></i>
						  <span class="site-menu-title">Purchase</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.purchase.add')}}">
							  <span class="site-menu-title">- Add Purchase</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.purchase.index')}}">
							  <span class="site-menu-title">- List Purchase</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-shopping-basket" aria-hidden="true"></i>
						  <span class="site-menu-title">Sell</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.purchase.add')}}">
							  <span class="site-menu-title">- Add Sale</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.sell.index')}}">
							  <span class="site-menu-title">- All Sales</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.sell.pos_list')}}">
							  <span class="site-menu-title">- List POS</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.sell.pos')}}">
							  <span class="site-menu-title">- POS</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="../pos/sell/list_draft.html">
							  <span class="site-menu-title">- List Drafts</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="../pos/sell/list_quotations.html">
							  <span class="site-menu-title">- List quotations</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-caret-square-o-left" aria-hidden="true"></i>
						  <span class="site-menu-title">Sell Returns</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.sell_return.index')}}">
							  <span class="site-menu-title">- List Sell Return</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.sell_return.add')}}">
							  <span class="site-menu-title">- Sell Return</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-exchange" aria-hidden="true"></i>
						  <span class="site-menu-title">Stock Transfers</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.stock_transfer.list')}}">
							  <span class="site-menu-title">- List Stock Transfers</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.stock_transfer.add')}}">
							  <span class="site-menu-title">- Add Stock Transfer</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-random" aria-hidden="true"></i>
						  <span class="site-menu-title">Stock Adjustment</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.stock_adjustment.index')}}">
							  <span class="site-menu-title">- List Stock Adjustments</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.stock_adjustment.add')}}">
							  <span class="site-menu-title">- Add Stock Adjustment</span>
							</a>
						  </li>
						</ul>
					  </li>

					  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon icon fa-money" aria-hidden="true"></i>
						  <span class="site-menu-title">Expenses</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.expenses.add')}}">
							  <span class="site-menu-title">- Add Expenses</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.expenses.index')}}">
							  <span class="site-menu-title">- List Expenses</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.expenses.category')}}">
							  <span class="site-menu-title">- Expense Categories</span>
							</a>
						  </li>
						</ul>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </li>
		<!-- Point of Sale Menu Ends-->
		 <li class="dropdown site-menu-item has-sub">
			<a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
					<i class="site-menu-icon fa fa-bar-chart-o" aria-hidden="true"></i>
					<span class="site-menu-title">REPORT</span>
						<span class="site-menu-arrow"></span>
				</a>
			<div class="dropdown-menu">
			  <div class="site-menu-scroll-wrap is-list">
				<div>
				  <div>
					<ul class="site-menu-sub site-menu-normal-list">
					  <li class="site-menu-item">
						<a class="animsition-link" href="javascript:void(0);">
						  <i class="site-menu-icon icon fa-hotel" aria-hidden="true"></i>
						  <span class="site-menu-title">RESERVATION REPORTS</span>
						</a>

				
					  </li>
					</ul>
					<ul class="site-menu-sub site-menu-normal-list">
						  <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						  <i class="site-menu-icon fa fa-sliders" aria-hidden="true"></i>
						  <span class="site-menu-title">BANQUET REPORTS</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.event')}}">
							  <span class="site-menu-title">- Event Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.lead')}}">
							  <span class="site-menu-title">- Lead Reports</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.sale')}}">
							  <span class="site-menu-title">- Sales Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.contractor')}}">
							  <span class="site-menu-title">- Contractor Reports</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.forecasted')}}">
							  <span class="site-menu-title">- Forecasted Revenue</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.reservation')}}">
							  <span class="site-menu-title">- Reservation Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.banquet.report.payment_log')}}">
							  <span class="site-menu-title">- Payment Logs</span>
							</a>
						  </li>
						</ul>
					  </li>
					</ul>
					<ul class="site-menu-sub site-menu-normal-list">
						 <li class="site-menu-item has-sub">
					   <a href="javascript:void(0)">
						 <i class="site-menu-icon fa fa-line-chart" aria-hidden="true"></i>
						  <span class="site-menu-title">POS  REPORTS</span>
						  <span class="site-menu-arrow"></span>
						</a>
						<ul class="site-menu-sub">
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.profit_loss')}}">
							  <span class="site-menu-title">- Profit / Loss Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.purchase_sales')}}">
							  <span class="site-menu-title">- Purchase & Sale</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.tax')}}">
							  <span class="site-menu-title">- Tax Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.supplier_customer')}}">
							  <span class="site-menu-title">- Supplier & Customer Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.customer_group')}}">
							  <span class="site-menu-title">- Customer Groups Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.stock')}}">
							  <span class="site-menu-title">- Stock Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.stock_expiry')}}">
							  <span class="site-menu-title">- Stock Expiry Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.lot')}}">
							  <span class="site-menu-title">- Lot Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.trending')}}">
							  <span class="site-menu-title">- Trending Products</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.stock_adjustment')}}">
							  <span class="site-menu-title">- Stock Adjustment Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.product_purchase')}}">
							  <span class="site-menu-title">- Product Purchase Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.product_sell')}}">
							  <span class="site-menu-title">- Product Sell Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.purchase_payment')}}">
							  <span class="site-menu-title">- Purchase Payment Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.sell_payment')}}">
							  <span class="site-menu-title">- Sell Payment Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.expenses')}}">
							  <span class="site-menu-title">- Expense Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.register')}}">
							  <span class="site-menu-title">- Register Report</span>
							</a>
						  </li>
						  <li class="site-menu-item">
							<a class="animsition-link" href="{{route('backend.admin.pos.report.sales_representative')}}">
							  <span class="site-menu-title">- Sales Representative Report</span>
							</a>
						  </li>
						</ul>
						</li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </li>

		<!-- Configuration Menu Starts-->
		<li class="dropdown site-menu-item has-sub">
			<a data-toggle="dropdown" href="javascript:void(0)" data-dropdown-toggle="false">
					<i class="site-menu-icon wb-file" aria-hidden="true"></i>
					<span class="site-menu-title">CONFIGURATIONS</span>
						<span class="site-menu-arrow"></span>
				</a>
			<div class="dropdown-menu">
			  <div class="site-menu-scroll-wrap is-list">
				<div>
				  <div>
					<ul class="site-menu-sub site-menu-normal-list">
					  <li class="site-menu-item">
						<a href="{{route('backend.admin.configuration')}}">
						  <i class="site-menu-icon icon wb-settings" aria-hidden="true"></i>
						  <span class="site-menu-title">SETTINGS</span>
						</a>				
					  </li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </li>
		<!-- Point of Sale Menu Ends-->
	 </ul>      
	 </div>
	</div>
  </div>
</div>
