@extends('backend.master')
@section('title',"Website Configuration")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">SETTINGS</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div class="row">
            <div class="col-xxl-3 col-lg-6 col-md-6">
               <!-- Sitemap List -->
               <i class="icon fa-calendar" aria-hidden="true"></i>
               <span class="site-menu-title"><b>RESERVATION CRM</b></span>
               <ul class="sitemap-list">
               <li>
                  <a href="#">
                  <i class="icon wb-settings"></i>
                  <span>General Setting</span>
                  </a>
                  <!-- Sitemap Children -->
                  <ul>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.general_settings')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>General Setting </span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.general-setting.logo_and_fav_setting')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Logo & Favicon</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.email_setting')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Email Setting </span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.general-setting.sms_setting')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>SMS Setting</span>
                        </a>
                     </li>
                     <!-- End Sitemap List Sub -->
                  </ul>
                  <!-- End Sitemap Children -->
               </li>
               <ul class="sitemap-list">
               <li>
                  <a href="#">
                  <i class="icon fa-cc-visa"></i>
                  <span>Payment Settings</span>
                  </a>
                  <!-- Sitemap Children -->
                  <ul>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.payment_setting.gateway')}}">
                        <i class="icon wb-link float-right"></i>
                        <span> Gateways </span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.payment_setting.payment_log')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Payment Logs</span>
                        </a>
                     </li>
                     <!-- End Sitemap List Sub -->
                  </ul>
                  <!-- End Sitemap Children -->
               </li>
               <li>
                  <a href="#">
                  <i class="icon wb-settings"></i>
                  <span>Web Setting</span>
                  </a>
                  <!-- Sitemap Children -->
                  <ul>
                     <li>
                        <a href="javascript:void();">
                        <i class="icon wb-link float-right"></i>
                        <span>Home</span>
                        </a>
                     </li>
                     <!-- Sitemap List Sub -->
                     <ul class="sitemap-list-sub">
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home')}}">
                           Banner Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.about')}}">
                           About Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.our_room')}}">
                           Our Room Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.service')}}">
                           Service Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.testimonial')}}">
                           Testimonial Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.video')}}">
                           Video Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.facility')}}">
                           Our Facility  Area
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.home.counter')}}">
                           Counter Area
                           </a>
                        </li>
                     </ul>
                     <!-- End Sitemap List Sub -->
                     <li>
                        <a href="javascript:void(0)">
                        <i class="icon wb-link float-right"></i>
                        <span>Gallery Manager</span>
                        </a>
                     </li>
                     <!-- Sitemap List Sub -->
                     <ul class="sitemap-list-sub">
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.gallery.category')}}">
                           Category
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.gallery')}}">
                           Gallery
                           </a>
                        </li>
                     </ul>
                     <li>
                        <a href="javascript:void(0)">
                        <i class="icon wb-link float-right"></i>
                        <span>Blog</span>
                        </a>
                     </li>
                     <!-- Sitemap List Sub -->
                     <ul class="sitemap-list-sub">
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.blog.category')}}">
                           Category
                           </a>
                        </li>
                        <li>
                           <a href="{{route('backend.admin.frontdesk.website_setting.blog')}}">
                           Post
                           </a>
                        </li>
                     </ul>
                     <!-- End Sitemap List Sub -->
                     <li>
                        <a href="{{route('backend.admin.frontdesk.website_setting.faq')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>FAQ</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.website_setting.contact')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Contact</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.website_setting.social')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Social Link</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.website_setting.footer')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Footer Content</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.website_setting.fb')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Fb Comment Script</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('backend.admin.frontdesk.website_setting.login-bg')}}">
                        <i class="icon wb-link float-right"></i>
                        <span>Login & Breadcrumb</span>
                        </a>
                     </li>
                     <!-- End Sitemap Children -->
                     </li>
                  </ul>
                  <!-- End Sitemap List -->
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6">
            <!-- Sitemap List -->
            <i class="icon fa-cutlery" aria-hidden="true"></i>
            <span class="site-menu-title"><b>Banquet CRM</b></span>     
            <ul class="sitemap-list">
            <li class="is-single">
            <a href="#">
            <i class="icon wb-settings"></i>
            <span>Configuration</span>
            </a>
            <!-- Sitemap Children -->
            <!-- Sitemap Sections -->
            <ul>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.sales_team')}}">
            <i class="icon wb-link float-right"></i>
            <span>Sales Teams</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <li>
            <a href="{{route('backend.admin.banquet.sttings.staff')}}">
            <i class="icon wb-link float-right"></i>
            <span>Staff</span>
            </a>
            </li>
            <!-- End Sitemap List Sub -->
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>Option</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="{{route('backend.admin.banquet.sttings.option')}}">
            Option
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.option.caterer')}}">
            Cateres Type
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.option.event')}}">
            Event Types
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.option.deposit')}}">
            Deposit Type
            </a>
            </li>
            </ul>
            <!-- End Sitemap List Sub -->
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>Contractor</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="{{route('backend.admin.banquet.sttings.contractor.caterer')}}">
            Caterer
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.contractor.photographer')}}">
            Photographer
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.contractor.entertainer')}}">
            Entertainer
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.contractor.decorator')}}">
            Decorator
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.contractor.miscellaneous')}}">
            Miscellaneous
            </a>
            </li>
            </ul>
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>Function Setting</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.parking')}}">
            Parking
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.equipment')}}">
            Equipment
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.transport_service')}}">
            Transport Service
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.event_location')}}">
            Event Location
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.hotel')}}">
            Hotel
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.hotel_room')}}">
            Hotel Rooms
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.lead_source')}}">
            Lead Source
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.function.agreement')}}">
            Agreement
            </a>
            </li>
            </ul>
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>Menu</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="{{route('backend.admin.banquet.sttings.menu')}}">
            Menu
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.menu.type')}}">
            Menu Type
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.menu.sub_menu')}}">
            Sub Menu
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.sttings.menu.item')}}">
            Menu Item
            </a>
            </li>
            </ul>
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>Templates</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="#">
            Email
            </a>
            </li>
            </ul>
            <!-- End Sitemap List Sub -->
            <li>
            <a href="{{route('backend.admin.banquet.sttings.subscription_plan')}}">
            <i class="icon wb-link float-right"></i>
            <span>Billing</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.setting')}}">
            <i class="icon wb-link float-right"></i>
            <span>Setting</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.banquet.setting.payment_gateway')}}">
            <i class="icon wb-link float-right"></i>
            <span>Payment Info</span>
            </a>
            </li>
            </ul>
            <!-- End Sitemap Sections -->
            </li>
            <!-- Sitemap Children -->
            <!-- End Sitemap Children -->
            </li>
            </ul>
            <!-- End Sitemap List -->
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6">
            <!-- Sitemap List -->
            <i class="icon fa-tv" aria-hidden="true"></i>
            <span class="site-menu-title"><b>POINT OF SALE</b></span>     
            <ul class="sitemap-list">
            <li>
            <a href="#">
            <i class="icon wb-settings"></i>
            <span>Settings</span>
            </a>
            <!-- Sitemap Children -->
            <ul>
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>Super Admin</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="">
            Packages
            </a>
            </li>
            </ul>
            <li>
            <a href="javascript:void(0)">
            <i class="icon wb-link float-right"></i>
            <span>User Management</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <ul class="sitemap-list-sub">
            <li>
            <a href="">
            User
            </a>
            </li>
            <li>
            <a href="">
            Roles
            </a>
            </li>
            <li>
            <a href="">
            Sales Commission Agents
            </a>
            </li>
            </ul>
            <li>
            <a href="{{route('backend.admin.pos.setting.business_setting')}}">
            <i class="icon wb-link float-right"></i>
            <span>Business Settings</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.system_setting')}}">
            <i class="icon wb-link float-right"></i>
            <span>System Settings</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.business_location')}}">
            <i class="icon wb-link float-right"></i>
            <span>Business Location</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.invoice')}}">
            <i class="icon wb-link float-right"></i>
            <span>Invoice Settings</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.barcode')}}">
            <i class="icon wb-link float-right"></i>
            <span>Barcode Settings</span>
            </a>
            </li>
            <!-- End Sitemap List Sub -->
            <li>
            <a href="{{route('backend.admin.pos.setting.receipt_printer')}}">
            <i class="icon wb-link float-right"></i>
            <span>Receipt Printers</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.brand')}}">
            <i class="icon wb-link float-right"></i>
            <span>Brands</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.tax_rate')}}">
            <i class="icon wb-link float-right"></i>
            <span>Tax Rates</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.unit')}}">
            <i class="icon wb-link float-right"></i>
            <span>Units</span>
            </a>
            </li>
            <li>
            <a href="{{route('backend.admin.pos.setting.category')}}">
            <i class="icon wb-link float-right"></i>
            <span>Categories</span>
            </a>
            </li>
            <!-- End Sitemap Children -->
            </li>
            </ul>
            <!-- End Sitemap List -->
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6">
            <!-- Sitemap List -->
            <i class="site-menu-icon icon wb-settings" aria-hidden="true"></i>
            <span class="site-menu-title">THIRD-PARTY<b></b></span>     
            <ul class="sitemap-list">
            <li>
            <a href="#">
            <i class="site-menu-icon icon fa-cogs"></i>
            <span>THIRD-PARTY API</span>
            </a>
            <!-- Sitemap Children -->
            <ul>
            <li>
            <a href="../superadmin/third_party/payment_gateway.html">
            <i class="icon wb-link float-right"></i>
            <span>Payment Gateway</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <li>
            <a href="../superadmin/third_party/channel_partner.html">
            <i class="icon wb-link float-right"></i>
            <span>Channel Partner</span>
            </a>
            </li>
            <!-- Sitemap List Sub -->
            <li>
            <a href="../superadmin/third_party/api_integration.html">
            <i class="icon wb-link float-right"></i>
            <span>API Integrations</span>
            </a>
            </li>
            <li>
            <a href="../superadmin/third_party/kiosk_setting.html">
            <i class="icon wb-link float-right"></i>
            <span>Kiosk Settings</span>
            </a>
            </li>
            <!-- End Sitemap Children -->
            </li>
            </ul>
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
	