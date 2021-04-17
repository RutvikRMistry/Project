@extends('backend.master')
@section('title',"Function Overview")
@section('content')

@push('styles')
<link rel="stylesheet" href="{{asset('assets/examples/css/apps/taskboard.min.css')}}">
@endpush
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

<meta id="token" name="token" value="7f732lO91l5gv1lDZX8jg7pxRDGBJOhtzXnuTBDR">

<meta id="userId" name="userId" value="17">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>-->
<!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
<!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
<![endif]-->
<link href="https://saas.banquetcrm.com/css/libs.d37f103a9036ae8263526571bb5d77d7.css" rel="stylesheet" type="text/css"/>
<link href="https://saas.banquetcrm.com/css/secure.1Furfhe8BFbkEhXn1xcYPr8jYAACNpfV7p.css" rel="stylesheet" type="text/css">
<link href="https://saas.banquetcrm.com/css/icheck.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="https://saas.banquetcrm.com/img/fav.ico" type="image/x-icon">
<link rel="icon" href="https://saas.banquetcrm.com/img/fav.ico" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="https://saas.banquetcrm.com/css/tooltipster.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://saas.banquetcrm.com/css/custom_event.css"/>
    <link href="https://saas.banquetcrm.com/css/editor.css" type="text/css" rel="stylesheet"/>
    <style>
        .select2-selection--multiple{
            overflow: hidden !important;
            height: auto !important;
        }
         #event_times{
             background: #f2f2f2;
             padding-top: 15px;
             margin-bottom: 10px;
         }
        #event_times .col-md-12{
            height: 3px;
            background: #ffffff;
            margin-bottom: 15px;
        }
    </style>
<!-- Top Menubar Ends Here-->
<div class="page">
    @include('backend.partials.leftbar.shortcuts')
    <div class="page-main">
        <div class="page-header">
            <h1 class="page-title">Create Function</h1>
        </div>
        <div style="width: 100%; padding: 30px;">
            @if($errors->all())
            <div class="row">
                <div class="col">
                    @foreach($errors->all() as $msg)
                    <div class="alert alert-danger" role="alert">
                        {{$msg}}
                    </div>
                    @endforeach
                </div>
            </div>
            @endif()


            <div class="panel panel-primary cnts">
                <form method="POST" action="https://saas.banquetcrm.com/function/2" accept-charset="UTF-8" id="event"
                    enctype="multipart/form-data"><input name="_method" type="hidden" value="PUT"><input name="_token"
                        type="hidden" value="7f732lO91l5gv1lDZX8jg7pxRDGBJOhtzXnuTBDR">
                    <div class="panel-body">
                        <div id="rootwizard">
                            <div class="col-xs-2">
							<ul class="nav nav-tabs mr-25" role="tablist">
								<li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#booking_details" aria-controls="exampleTabsLeftOne" role="tab" aria-selected="true"><i class="icon fa-address-card" aria-hidden="true" style="font-size: 18px;"></i> Booking Details</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#menu_details" aria-controls="exampleTabsLeftTwo" role="tab" aria-selected="false"><i class="icon fa-columns" aria-hidden="true" style="font-size: 18px;"></i> Food Menu</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#eating_details" aria-controls="exampleTabsLeftThree" role="tab" aria-selected="false"><i class="icon fa-clock-o" aria-hidden="true" style="font-size: 18px;"></i> Eating Times</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#equipment_details" aria-controls="exampleTabsLeftFour" role="tab" aria-selected="false"><i class="icon fa-video-camera" aria-hidden="true" style="font-size: 18px;"></i> Equipment Requirements</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#contractor_details" aria-controls="exampleTabsLeftFive" role="tab" aria-selected="false"><i class="icon fa-truck" aria-hidden="true" style="font-size: 18px;"></i> Function Contractors</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#finance_details" aria-controls="exampleTabsLeftSix" role="tab" aria-selected="false"><i class="icon fa-money" aria-hidden="true" style="font-size: 18px;"></i> Financial Deposits</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#guest_pickup_details" aria-controls="exampleTabsLeftSeven" role="tab" aria-selected="false"><i class="icon fa-bus" aria-hidden="true" style="font-size: 18px;"></i> Guest Pickups</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#valet_parking_details" aria-controls="exampleTabsLeftEight" role="tab" aria-selected="false"><i class="icon fa-automobile" aria-hidden="true" style="font-size: 18px;"></i>Valet Parking</a></li>
								<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#additional_details_last" aria-controls="exampleTabsLeftNine" role="tab" aria-selected="false" style="
								/* height: 400px; */
								"><i class="icon fa-info-circle" aria-hidden="true" style="font-size: 18px;"></i> Additional Information</a></li>
								<li class="nav-item" role="presentation"><a> </a></li>
							</ul>
                            </div>


                            <div class="col-xs-10">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="booking_details">
                                        <div class="event_collapse_padding">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="booking" class="control-label required">Client
                                                            Name</label>
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Booking"
                                                                id="booking" style="display :none" name="booking"
                                                                type="text" value="Anna Strong">
                                                            <select class="form-control select2" id="client"
                                                                onchange="fillCutomerInfo(this.value)" name="client">
                                                                <option value="">Select Customer</option>
                                                                <option value="2">Jessica Jonson (Toll Brothers)
                                                                </option>
                                                                <option value="3">James Smith (Toll Brothers)</option>
                                                                <option value="4" selected="selected">Anna Strong (Toll
                                                                    Brothers)</option>
                                                                <option value="5">Iron Man (Personal)</option>
                                                                <option value="6">Iron Man (Personal)</option>
                                                                <option value="7">Ode Palestine (Personal)</option>
                                                                <option value="8">Rush Patel (Personal)</option>
                                                                <option value="9">lelo l (Personal)</option>
                                                                <option value="10">Ammar Aker (Jawwal Palestinee)
                                                                </option>
                                                                <option value="11">Param Ramanan (Personal)</option>
                                                                <option value="12">test john (Personal)</option>
                                                                <option value="13">Mark jennings (Personal)</option>
                                                                <option value="14">oliver queen (Personal)</option>
                                                                <option value="15">Rajaram raj (Personal)</option>
                                                                <option value="16">John Olson (Personal)</option>
                                                                <option value="17">Thakur Ravi (Personal)</option>
                                                                <option value="18">Saimina Makhijani (Personal)</option>
                                                                <option value="19">Vinay Katwe (California Cartage
                                                                    Express)</option>
                                                                <option value="26">test (Personal)</option>
                                                                <option value="27">Mohammed (Personal)</option>
                                                                <option value="28"> (Personal)</option>
                                                                <option value="29"> ()</option>
                                                                <option value="30">svq eqr (Toll Brothers)</option>
                                                                <option value="31">Farhan (Personal)</option>
                                                                <option value="32">dev (Personal)</option>
                                                                <option value="33">test contact (California Cartage
                                                                    Express)</option>
                                                                <option value="34">ajay sharma (California Cartage
                                                                    Express)</option>
                                                                <option value="35">shamshuddin (Personal)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="client_email" class="control-label required">Email
                                                            ID</label>
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Email Id"
                                                                name="client_email" type="email"
                                                                value="annastrong07@gmail.com" id="client_email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="client_phone"
                                                            class="control-label required">Phone</label>
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Phone" min="0"
                                                                name="client_phone" type="number" value="8508507575"
                                                                id="client_phone">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="client_company"
                                                            class="control-label required">Company</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="client_company"
                                                                name="client_company">
                                                                <option value="">Select Company</option>
                                                                <option value="Personal">Personal</option>
                                                                <option value="2">California Cartage Express</option>
                                                                <option value="4">Jawwal Palestinee</option>
                                                                <option value="3" selected="selected">Toll Brothers
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="country_id"
                                                            class="control-label required">Country</label>
                                                        <div class="controls">
                                                            <select id="country_id" class="form-control select2"
                                                                name="country_id">
                                                                <option value="">Select country</option>
                                                                <option value="1">Afghanistan</option>
                                                                <option value="2">Albania</option>
                                                                <option value="3">Algeria</option>
                                                                <option value="4">American Samoa</option>
                                                                <option value="5">Andorra</option>
                                                                <option value="6">Angola</option>
                                                                <option value="7">Anguilla</option>
                                                                <option value="8">Antarctica</option>
                                                                <option value="9">Antigua And Barbuda</option>
                                                                <option value="10">Argentina</option>
                                                                <option value="11">Armenia</option>
                                                                <option value="12">Aruba</option>
                                                                <option value="13">Australia</option>
                                                                <option value="14">Austria</option>
                                                                <option value="15">Azerbaijan</option>
                                                                <option value="16">Bahamas The</option>
                                                                <option value="17">Bahrain</option>
                                                                <option value="18">Bangladesh</option>
                                                                <option value="19">Barbados</option>
                                                                <option value="20">Belarus</option>
                                                                <option value="21">Belgium</option>
                                                                <option value="22">Belize</option>
                                                                <option value="23">Benin</option>
                                                                <option value="24">Bermuda</option>
                                                                <option value="25">Bhutan</option>
                                                                <option value="26">Bolivia</option>
                                                                <option value="27">Bosnia and Herzegovina</option>
                                                                <option value="28">Botswana</option>
                                                                <option value="29">Bouvet Island</option>
                                                                <option value="30">Brazil</option>
                                                                <option value="31">British Indian Ocean Territory
                                                                </option>
                                                                <option value="32">Brunei</option>
                                                                <option value="33">Bulgaria</option>
                                                                <option value="34">Burkina Faso</option>
                                                                <option value="35">Burundi</option>
                                                                <option value="36">Cambodia</option>
                                                                <option value="37">Cameroon</option>
                                                                <option value="38">Canada</option>
                                                                <option value="39">Cape Verde</option>
                                                                <option value="40">Cayman Islands</option>
                                                                <option value="41">Central African Republic</option>
                                                                <option value="42">Chad</option>
                                                                <option value="43">Chile</option>
                                                                <option value="44">China</option>
                                                                <option value="45">Christmas Island</option>
                                                                <option value="46">Cocos (Keeling) Islands</option>
                                                                <option value="47">Colombia</option>
                                                                <option value="48">Comoros</option>
                                                                <option value="49">Congo</option>
                                                                <option value="50">Congo The Democratic Republic Of The
                                                                </option>
                                                                <option value="51">Cook Islands</option>
                                                                <option value="52">Costa Rica</option>
                                                                <option value="53">Cote D&#039;Ivoire (Ivory Coast)
                                                                </option>
                                                                <option value="54">Croatia (Hrvatska)</option>
                                                                <option value="55">Cuba</option>
                                                                <option value="56">Cyprus</option>
                                                                <option value="57">Czech Republic</option>
                                                                <option value="58">Denmark</option>
                                                                <option value="59">Djibouti</option>
                                                                <option value="60">Dominica</option>
                                                                <option value="61">Dominican Republic</option>
                                                                <option value="62">East Timor</option>
                                                                <option value="63">Ecuador</option>
                                                                <option value="64">Egypt</option>
                                                                <option value="65">El Salvador</option>
                                                                <option value="66">Equatorial Guinea</option>
                                                                <option value="67">Eritrea</option>
                                                                <option value="68">Estonia</option>
                                                                <option value="69">Ethiopia</option>
                                                                <option value="70">External Territories of Australia
                                                                </option>
                                                                <option value="71">Falkland Islands</option>
                                                                <option value="72">Faroe Islands</option>
                                                                <option value="73">Fiji Islands</option>
                                                                <option value="74">Finland</option>
                                                                <option value="75">France</option>
                                                                <option value="76">French Guiana</option>
                                                                <option value="77">French Polynesia</option>
                                                                <option value="78">French Southern Territories</option>
                                                                <option value="79">Gabon</option>
                                                                <option value="80">Gambia The</option>
                                                                <option value="81">Georgia</option>
                                                                <option value="82">Germany</option>
                                                                <option value="83">Ghana</option>
                                                                <option value="84">Gibraltar</option>
                                                                <option value="85">Greece</option>
                                                                <option value="86">Greenland</option>
                                                                <option value="87">Grenada</option>
                                                                <option value="88">Guadeloupe</option>
                                                                <option value="89">Guam</option>
                                                                <option value="90">Guatemala</option>
                                                                <option value="91">Guernsey and Alderney</option>
                                                                <option value="92">Guinea</option>
                                                                <option value="93">Guinea-Bissau</option>
                                                                <option value="94">Guyana</option>
                                                                <option value="95">Haiti</option>
                                                                <option value="96">Heard and McDonald Islands</option>
                                                                <option value="97">Honduras</option>
                                                                <option value="98">Hong Kong S.A.R.</option>
                                                                <option value="99">Hungary</option>
                                                                <option value="100">Iceland</option>
                                                                <option value="101">India</option>
                                                                <option value="102">Indonesia</option>
                                                                <option value="103">Iran</option>
                                                                <option value="104">Iraq</option>
                                                                <option value="105">Ireland</option>
                                                                <option value="106">Israel</option>
                                                                <option value="107">Italy</option>
                                                                <option value="108">Jamaica</option>
                                                                <option value="109">Japan</option>
                                                                <option value="110">Jersey</option>
                                                                <option value="111">Jordan</option>
                                                                <option value="112">Kazakhstan</option>
                                                                <option value="113">Kenya</option>
                                                                <option value="114">Kiribati</option>
                                                                <option value="115">Korea North</option>
                                                                <option value="116">Korea South</option>
                                                                <option value="117">Kuwait</option>
                                                                <option value="118">Kyrgyzstan</option>
                                                                <option value="119">Laos</option>
                                                                <option value="120">Latvia</option>
                                                                <option value="121">Lebanon</option>
                                                                <option value="122">Lesotho</option>
                                                                <option value="123">Liberia</option>
                                                                <option value="124">Libya</option>
                                                                <option value="125">Liechtenstein</option>
                                                                <option value="126">Lithuania</option>
                                                                <option value="127">Luxembourg</option>
                                                                <option value="128">Macau S.A.R.</option>
                                                                <option value="129">Macedonia</option>
                                                                <option value="130">Madagascar</option>
                                                                <option value="131">Malawi</option>
                                                                <option value="132">Malaysia</option>
                                                                <option value="133">Maldives</option>
                                                                <option value="134">Mali</option>
                                                                <option value="135">Malta</option>
                                                                <option value="136">Man (Isle of)</option>
                                                                <option value="137">Marshall Islands</option>
                                                                <option value="138">Martinique</option>
                                                                <option value="139">Mauritania</option>
                                                                <option value="140">Mauritius</option>
                                                                <option value="141">Mayotte</option>
                                                                <option value="142">Mexico</option>
                                                                <option value="143">Micronesia</option>
                                                                <option value="144">Moldova</option>
                                                                <option value="145">Monaco</option>
                                                                <option value="146">Mongolia</option>
                                                                <option value="147">Montserrat</option>
                                                                <option value="148">Morocco</option>
                                                                <option value="149">Mozambique</option>
                                                                <option value="150">Myanmar</option>
                                                                <option value="151">Namibia</option>
                                                                <option value="152">Nauru</option>
                                                                <option value="153">Nepal</option>
                                                                <option value="154">Netherlands Antilles</option>
                                                                <option value="155">Netherlands The</option>
                                                                <option value="156">New Caledonia</option>
                                                                <option value="157">New Zealand</option>
                                                                <option value="158">Nicaragua</option>
                                                                <option value="159">Niger</option>
                                                                <option value="160">Nigeria</option>
                                                                <option value="161">Niue</option>
                                                                <option value="162">Norfolk Island</option>
                                                                <option value="163">Northern Mariana Islands</option>
                                                                <option value="164">Norway</option>
                                                                <option value="165">Oman</option>
                                                                <option value="166">Pakistan</option>
                                                                <option value="167">Palau</option>
                                                                <option value="168" selected="selected">Palestinian
                                                                    Territory Occupied</option>
                                                                <option value="169">Panama</option>
                                                                <option value="170">Papua new Guinea</option>
                                                                <option value="171">Paraguay</option>
                                                                <option value="172">Peru</option>
                                                                <option value="173">Philippines</option>
                                                                <option value="174">Pitcairn Island</option>
                                                                <option value="175">Poland</option>
                                                                <option value="176">Portugal</option>
                                                                <option value="177">Puerto Rico</option>
                                                                <option value="178">Qatar</option>
                                                                <option value="179">Reunion</option>
                                                                <option value="180">Romania</option>
                                                                <option value="181">Russia</option>
                                                                <option value="182">Rwanda</option>
                                                                <option value="183">Saint Helena</option>
                                                                <option value="184">Saint Kitts And Nevis</option>
                                                                <option value="185">Saint Lucia</option>
                                                                <option value="186">Saint Pierre and Miquelon</option>
                                                                <option value="187">Saint Vincent And The Grenadines
                                                                </option>
                                                                <option value="188">Samoa</option>
                                                                <option value="189">San Marino</option>
                                                                <option value="190">Sao Tome and Principe</option>
                                                                <option value="191">Saudi Arabia</option>
                                                                <option value="192">Senegal</option>
                                                                <option value="193">Serbia</option>
                                                                <option value="194">Seychelles</option>
                                                                <option value="195">Sierra Leone</option>
                                                                <option value="196">Singapore</option>
                                                                <option value="197">Slovakia</option>
                                                                <option value="198">Slovenia</option>
                                                                <option value="199">Smaller Territories of the UK
                                                                </option>
                                                                <option value="200">Solomon Islands</option>
                                                                <option value="201">Somalia</option>
                                                                <option value="202">South Africa</option>
                                                                <option value="203">South Georgia</option>
                                                                <option value="204">South Sudan</option>
                                                                <option value="205">Spain</option>
                                                                <option value="206">Sri Lanka</option>
                                                                <option value="207">Sudan</option>
                                                                <option value="208">Suriname</option>
                                                                <option value="209">Svalbard And Jan Mayen Islands
                                                                </option>
                                                                <option value="210">Swaziland</option>
                                                                <option value="211">Sweden</option>
                                                                <option value="212">Switzerland</option>
                                                                <option value="213">Syria</option>
                                                                <option value="214">Taiwan</option>
                                                                <option value="215">Tajikistan</option>
                                                                <option value="216">Tanzania</option>
                                                                <option value="217">Thailand</option>
                                                                <option value="218">Togo</option>
                                                                <option value="219">Tokelau</option>
                                                                <option value="220">Tonga</option>
                                                                <option value="221">Trinidad And Tobago</option>
                                                                <option value="222">Tunisia</option>
                                                                <option value="223">Turkey</option>
                                                                <option value="224">Turkmenistan</option>
                                                                <option value="225">Turks And Caicos Islands</option>
                                                                <option value="226">Tuvalu</option>
                                                                <option value="227">Uganda</option>
                                                                <option value="228">Ukraine</option>
                                                                <option value="229">United Arab Emirates</option>
                                                                <option value="230">United Kingdom</option>
                                                                <option value="231">United States</option>
                                                                <option value="232">United States Minor Outlying Islands
                                                                </option>
                                                                <option value="233">Uruguay</option>
                                                                <option value="234">Uzbekistan</option>
                                                                <option value="235">Vanuatu</option>
                                                                <option value="236">Vatican City State (Holy See)
                                                                </option>
                                                                <option value="237">Venezuela</option>
                                                                <option value="238">Vietnam</option>
                                                                <option value="239">Virgin Islands (British)</option>
                                                                <option value="240">Virgin Islands (US)</option>
                                                                <option value="241">Wallis And Futuna Islands</option>
                                                                <option value="242">Western Sahara</option>
                                                                <option value="243">Yemen</option>
                                                                <option value="244">Yugoslavia</option>
                                                                <option value="245">Zambia</option>
                                                                <option value="246">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="state_id"
                                                            class="control-label required">State</label>
                                                        <div class="controls">
                                                            <select id="state_id" class="form-control select2"
                                                                name="state_id">
                                                                <option value="2761">al-Khalil</option>
                                                                <option value="2762">al-Quds</option>
                                                                <option value="2746">Ariha</option>
                                                                <option value="2747">Bayt Lahm</option>
                                                                <option value="2748" selected="selected">Bethlehem
                                                                </option>
                                                                <option value="2749">Dayr-al-Balah</option>
                                                                <option value="2750">Ghazzah</option>
                                                                <option value="2751">Ghazzah ash-Shamaliyah</option>
                                                                <option value="2752">Janin</option>
                                                                <option value="2753">Khan Yunis</option>
                                                                <option value="2754">Nabulus</option>
                                                                <option value="2755">Qalqilyah</option>
                                                                <option value="2756">Rafah</option>
                                                                <option value="2757">Ram Allah wal-Birah</option>
                                                                <option value="2758">Salfit</option>
                                                                <option value="2759">Tubas</option>
                                                                <option value="2760">Tulkarm</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="city_id" class="control-label required">City</label>
                                                        <div class="controls">
                                                            <select id="city_id" class="form-control select2"
                                                                name="city_id">
                                                                <option value="31709" selected="selected">Beit Jala
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="zip" class="control-label">Zipcode</label>
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Zip code"
                                                                name="zipcode" type="text" value="123456">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lead_source" class="control-label required">Lead
                                                            Source</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="lead_source"
                                                                name="lead_source">
                                                                <option value="">Select Source</option>
                                                                <option value="3" selected="selected">Facebook</option>
                                                                <option value="8">Hoarding</option>
                                                                <option value="6">Instagram</option>
                                                                <option value="7">Newspaper</option>
                                                                <option value="5">Twitter</option>
                                                                <option value="4">Website</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="salesteam" class="control-label required">Sales
                                                            Team</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="sales_team_id"
                                                                name="salesteam">
                                                                <option value="">Select Sales team</option>
                                                                <option value="2" selected="selected">Mike&#039;s Sales
                                                                    Team</option>
                                                                <option value="4">fgh</option>
                                                                <option value="5">asaaaaaaaa</option>
                                                                <option value="6">asaaaaaaaa</option>
                                                                <option value="7">test sales team</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="owner" class="control-label required">Lead
                                                            Owner</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="owner"
                                                                name="owner"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="event_name" class="control-label required">Function
                                                            Name</label>
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Name"
                                                                name="event_name" type="text" value="Odeh&#039;s Party"
                                                                id="event_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="type_event" class="control-label required">Type of
                                                            Function</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="type_event"
                                                                name="type_event">
                                                                <option value="">Select Function Type</option>
                                                                <option value="1">Birthday Party</option>
                                                                <option value="2" selected="selected">Birthday Party
                                                                </option>
                                                                <option value="3">Cocktail</option>
                                                                <option value="4">Conference</option>
                                                                <option value="13">Corporate</option>
                                                                <option value="5">Corporate Event</option>
                                                                <option value="17">Dance PArty</option>
                                                                <option value="12">Fair</option>
                                                                <option value="11">Other</option>
                                                                <option value="15">party</option>
                                                                <option value="6">Rehearsal Dinner</option>
                                                                <option value="10">Retirement Party</option>
                                                                <option value="7">Shower</option>
                                                                <option value="14">Social Events</option>
                                                                <option value="8">Special Occasion</option>
                                                                <option value="9">Wedding</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>








                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="status" class="control-label required">Function
                                                            Status</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="status"
                                                                name="status">
                                                                <option value="CLOSE">Close</option>
                                                                <option value="LOST">Lost</option>
                                                                <option value="PROSPECT">Prospect</option>
                                                                <option value="TENTATIVE">Tentative</option>
                                                                <option value="DEFINITE" selected="selected">Definite
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="expected_guest"
                                                            class="control-label required">Expected Guest</label>
                                                        <input class="form-control" placeholder="Non Veg" min="0"
                                                            name="expected_guests_non_veg" type="hidden" value="0">
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Expected Guest"
                                                                min="0" name="expected_guests_veg" type="number"
                                                                value="30">
                                                        </div>
                                                    </div>

















                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="guaranteed_guest"
                                                            class="control-label required">Guaranteed Guest</label>
                                                        <input class="form-control" placeholder="Non Veg" min="0"
                                                            name="guaranteed_guest_non_veg" type="hidden" value="0">
                                                        <div class="controls">
                                                            <input class="form-control" placeholder="Guaranteed Guest"
                                                                min="0" name="guaranteed_guest_veg" type="number"
                                                                value="20">
                                                        </div>
                                                    </div>

















                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="start_date" class="control-label required">Function
                                                            Start Date</label>
                                                        <div class="controls">
                                                            <input class="form-control datepicker"
                                                                placeholder="Start date" id="start_date"
                                                                oninput="getDateTimes(this.value)" name="start_date"
                                                                type="text" value="2019-09-05">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="end_date" class="control-label required">Function
                                                            End Date</label>
                                                        <div class="controls">
                                                            <input class="form-control datepicker"
                                                                placeholder="End Date" id="end_date"
                                                                oninput="getDateTimes(this.value)" name="end_date"
                                                                type="text" value="2019-09-06">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12"></div>
                                                <div id="event_times" class="col-md-12">
                                                    <div class="col-md-2">
                                                        <div class="form-group"><label
                                                                class="control-label">Date</label>
                                                            <div class="controls">
                                                                5th Sep, 2019
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Occasion</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="event_occasion_0" value="1st day"
                                                                    placeholder="Event Occasion">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label required">Function Time</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input type="text" class="form-control timepicker"
                                                                    name="event_start_time_0" value="09:35 am"
                                                                    placeholder="Event Start Time" onchange>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <div class="input-group" style="margin-top: 33px">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input type="text" class="form-control timepicker"
                                                                    name="event_end_time_0" value="10:35 am"
                                                                    placeholder="Event End Time" onchange>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label required">Setup</label>
                                                            <div class="controls">
                                                                <input type="text" class="form-control timepicker"
                                                                    name="setup_0" id="setup_0" value="08:35 am"
                                                                    placeholder="Setup" onchange="getLocations(0)">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label required">Teardown</label>
                                                            <div class="controls">
                                                                <input type="text" class="form-control timepicker"
                                                                    name="teardown_0" id="teardown_0" value="11:35 am"
                                                                    placeholder="Tear Down" onchange="getLocations(0)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="location"
                                                                class="control-label required">Function Location</label>
                                                            <div class="controls">
                                                                <select id="location_0"
                                                                    class="form-control select2 add_select2"
                                                                    onchange="locationChange(0)"
                                                                    name="location_0"></select>
                                                            </div>
                                                            <script>
                                                            rules['location_0'] = {
                                                                required: true
                                                            }
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label required">Rental Price /
                                                                Day(₵)</label>
                                                            <div class="controls">
                                                                <input type="number" class="form-control"
                                                                    name="location_rent_0" id="location_rent_0"
                                                                    value="1800" placeholder="Rental price per day">
                                                            </div>
                                                            <script>
                                                            rules['location_rent_0'] = {
                                                                required: true
                                                            }
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"></div>
                                                    <div class="col-md-2">
                                                        <div class="form-group"><label
                                                                class="control-label">Date</label>
                                                            <div class="controls">
                                                                6th Sep, 2019
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Occasion</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="event_occasion_1" value="2nd day"
                                                                    placeholder="Event Occasion">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label required">Function Time</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input type="text" class="form-control timepicker"
                                                                    name="event_start_time_1" value="09:35 am"
                                                                    placeholder="Event Start Time" onchange>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <div class="input-group" style="margin-top: 33px">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input type="text" class="form-control timepicker"
                                                                    name="event_end_time_1" value="10:35 am"
                                                                    placeholder="Event End Time" onchange>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label required">Setup</label>
                                                            <div class="controls">
                                                                <input type="text" class="form-control timepicker"
                                                                    name="setup_1" id="setup_1" value="08:35 am"
                                                                    placeholder="Setup" onchange="getLocations(1)">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="control-label required">Teardown</label>
                                                            <div class="controls">
                                                                <input type="text" class="form-control timepicker"
                                                                    name="teardown_1" id="teardown_1" value="11:35 am"
                                                                    placeholder="Tear Down" onchange="getLocations(1)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="location"
                                                                class="control-label required">Function Location</label>
                                                            <div class="controls">
                                                                <select id="location_1"
                                                                    class="form-control select2 add_select2"
                                                                    onchange="locationChange(1)" name="location_1">
                                                                    <option value="3" selected="selected">Seasons
                                                                        Ballroom (150 Guests)</option>
                                                                </select>
                                                            </div>
                                                            <script>
                                                            rules['location_1'] = {
                                                                required: true
                                                            }
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label required">Rental Price /
                                                                Day(₵)</label>
                                                            <div class="controls">
                                                                <input type="number" class="form-control"
                                                                    name="location_rent_1" id="location_rent_1"
                                                                    value="1800" placeholder="Rental price per day">
                                                            </div>
                                                            <script>
                                                            rules['location_rent_1'] = {
                                                                required: true
                                                            }
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"></div>
                                                </div>
                                                <select id="dummy_location_select" style="display: none" name="">
                                                    <option value="" selected="selected">Select Location</option>
                                                    <option value="3">Seasons Ballroom (150 Guests)</option>
                                                    <option value="2">Versailles Ballroom (200 Guests)</option>
                                                </select>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="manager" class="control-label required">Function
                                                            Manager</label>
                                                        <div class="controls">
                                                            <select class="form-control select2" id="managers"
                                                                name="manager">
                                                                <option value="">Function Manager</option>
                                                                <option value="19">Adan Brown</option>
                                                                <option value="32">Saachi Katwe</option>
                                                            </select>
                                                        </div>
                                                        <a href="https://saas.banquetcrm.com/staff/create" align="right"
                                                            class="addManager btn btn-warning pull-right"
                                                            style="margin-top: 34px;"><i class="fa fa-plus-circle"
                                                                aria-hidden="true"></i> Add Manager</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Any Kids</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="under_12_year" class="control-label">Under 12
                                                            Years</label>
                                                        <div class="controls">
                                                            <input class="form-control" name="under_12_year" type="text"
                                                                value="0" id="under_12_year">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="under_5_year" class="control-label">Under 5
                                                            Years</label>
                                                        <div class="controls">
                                                            <input class="form-control" name="under_5_year" type="text"
                                                                value="0" id="under_5_year">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="man" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Add New Manager</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="name"
                                                                    class="control-label required">Name</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="manager_name"
                                                                        name="name" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="gender"
                                                                    class="control-label required">Gender</label>
                                                                <div class="controls">
                                                                    <div class="input-group">
                                                                        <label>
                                                                            <input type="radio" name="manager_gender"
                                                                                value="Male" class='icheckblue'>
                                                                            Male
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" name="manager_gender"
                                                                                value="Female" class='icheckblue'>
                                                                            Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email" class="control-label required">Email
                                                                    ID</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="manager_email"
                                                                        name="email" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="contact"
                                                                    class="control-label required">Contact</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="manager_contact"
                                                                        name="contact" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    onclick="addManager()"> Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="menu_details">
                                        <div>
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#day1" data-toggle="tab"><i
                                                            class="material-icons"></i><b>Day 1</b></a>
                                                </li>
                                                <li><a href="#day2" data-toggle="tab"><i
                                                            class="material-icons"></i><b>Day 2</b></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane  active " id="day1">
                                                    <h1 class="text-center">1st day - 09/05/2019 (9:35 AM to 10:35 AM)
                                                    </h1>
                                                    <div class="row" id="main_veg_menu1">

                                                        <div id="veg_menu_holder">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="main_menu" class="control-label">Menu
                                                                        Types</label>
                                                                    <div class="controls">
                                                                        <select class="form-control select2" multiple
                                                                            id="menuType_veg_1" name="menuType_veg_1[]">
                                                                            <optgroup label="Birthday Party Menu">
                                                                                <option value="3">Menu Option 1</option>
                                                                                <option value="4">Menu Option 2</option>
                                                                            </optgroup>
                                                                            <optgroup label="Brunch Menu">
                                                                                <option value="5" selected="selected">
                                                                                    The Brunch Buffet</option>
                                                                            </optgroup>
                                                                            <optgroup label="Ashlie Wedding">
                                                                                <option value="6">Begin with a Social
                                                                                    Hour</option>
                                                                                <option value="7">Elegantly Plated
                                                                                    Dinners</option>
                                                                                <option value="8">Grand Buffet Dinners
                                                                                </option>
                                                                                <option value="10">Bar Options</option>
                                                                                <option value="11">Hors d&#039;oeuvre
                                                                                    Reception</option>
                                                                            </optgroup>
                                                                            <optgroup label="Holly Loscig Menu">
                                                                                <option value="14">Builder a Burger
                                                                                </option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="menu_item"
                                                                    class="control-label required">Sub Menu
                                                                    Items</label>
                                                                <div id="veg_menu_item_div_1">
                                                                    <div class="form-group" id="veg_type_div_5_1">
                                                                        <label class="control-label">The Brunch
                                                                            Buffet</label>
                                                                        <div class="controls">
                                                                            <div class="col-md-10">
                                                                                <select class="form-control select2"
                                                                                    multiple id="menuItem_veg_5_1"
                                                                                    name="menuItem_veg_5_1[]">
                                                                                    <optgroup label="Salads">
                                                                                        <option value="18">Chilled
                                                                                            Marinated Roasted Vegetable
                                                                                            Salad</option>
                                                                                        <option value="19"
                                                                                            selected="selected">Chilled
                                                                                            Tortellini Salad</option>
                                                                                    </optgroup>
                                                                                    <optgroup label="Entrees">
                                                                                        <option value="20">Gourmet
                                                                                            Assorted Quiche</option>
                                                                                        <option value="21">French Toast
                                                                                            with Vermont Maple Syrup
                                                                                        </option>
                                                                                    </optgroup>
                                                                                    <optgroup label="Desserts">
                                                                                        <option value="22">Freshly
                                                                                            Brewed Regular Coffee
                                                                                        </option>
                                                                                        <option value="23">Decaffeinated
                                                                                            Coffee</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <a href="#menu_item_model_veg_5_1"
                                                                                    class="btn btn-primary"
                                                                                    data-toggle="modal">Show Price</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal fade"
                                                                            id="menu_item_model_veg_5_1" role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal">×</button>
                                                                                        <h4 class="modal-title">Items
                                                                                            Price</h4>
                                                                                    </div>
                                                                                    <div class="modal-body"
                                                                                        id="menu_items_model_data_veg_5_1">
                                                                                        <div
                                                                                            id="menu_item_acc_veg_19_1">
                                                                                            <div class="event-collapse-div"
                                                                                                data-toggle="collapse"
                                                                                                data-parent="#accordion"
                                                                                                href="#sub_menu_item_veg_19_1"
                                                                                                aria-expanded="true">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-6 text-left">
                                                                                                        <b>Chilled
                                                                                                            Tortellini
                                                                                                            Salad</b>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-6 text-right">
                                                                                                        <i
                                                                                                            class="fa fa-fw fa-chevron-down"></i><i
                                                                                                            class="fa fa-fw fa-chevron-right"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div id="sub_menu_item_veg_19_1"
                                                                                                class="multi-collapse collapse"
                                                                                                aria-expanded="true"
                                                                                                style="">
                                                                                                <div
                                                                                                    class="event_collapse_padding">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-md-12">
                                                                                                            <div
                                                                                                                class="form-group required">
                                                                                                                <label
                                                                                                                    class="control-label">Price
                                                                                                                    Per
                                                                                                                    Person</label>
                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label>
                                                                                                                        <input
                                                                                                                            checked
                                                                                                                            type="radio"
                                                                                                                            value="1_5"
                                                                                                                            name="menu_items_priceveg_19_1"
                                                                                                                            class="icheck">
                                                                                                                        ₵5
                                                                                                                        /
                                                                                                                        1
                                                                                                                    </label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="service_type"
                                                                    class="control-label required">Service Type</label>
                                                                <div class="controls">
                                                                    <select class="form-control select2"
                                                                        id="service_type" name="service_type_1">
                                                                        <option value="">Select Service Type</option>
                                                                        <option value="4" selected="selected">Buffet
                                                                        </option>
                                                                        <option value="3">Cafeteria Services</option>
                                                                        <option value="2">Plated Services</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="head_table"
                                                                    class="control-label required">Table</label>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                name="head_table_1" id="all_day"
                                                                                class='icheck'>
                                                                            Head Table
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="head_table_count_1" value="16"
                                                                                    class='icheckblue'>
                                                                                16
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="head_table_count_1" value="18"
                                                                                    class='icheckblue'>
                                                                                18
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="head_table_count_1" value="20"
                                                                                    class='icheckblue'>
                                                                                20
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                name="dinning_table_1" id="all_day"
                                                                                class='icheck' checked>
                                                                            Dining Table
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="dinning_table_count_1"
                                                                                    value="16" class='icheckblue'
                                                                                    checked>
                                                                                16
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="dinning_table_count_1"
                                                                                    value="18" class='icheckblue'>
                                                                                18
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="dinning_table_count_1"
                                                                                    value="20" class='icheckblue'>
                                                                                20
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="day2">
                                                    <h1 class="text-center">2nd day - 09/06/2019 (9:35 AM to 10:35 AM)
                                                    </h1>
                                                    <div class="row" id="main_veg_menu2">

                                                        <div id="veg_menu_holder">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="main_menu" class="control-label">Menu
                                                                        Types</label>
                                                                    <div class="controls">
                                                                        <select class="form-control select2" multiple
                                                                            id="menuType_veg_2" name="menuType_veg_2[]">
                                                                            <optgroup label="Birthday Party Menu">
                                                                                <option value="3">Menu Option 1</option>
                                                                                <option value="4">Menu Option 2</option>
                                                                            </optgroup>
                                                                            <optgroup label="Brunch Menu">
                                                                                <option value="5">The Brunch Buffet
                                                                                </option>
                                                                            </optgroup>
                                                                            <optgroup label="Ashlie Wedding">
                                                                                <option value="6">Begin with a Social
                                                                                    Hour</option>
                                                                                <option value="7">Elegantly Plated
                                                                                    Dinners</option>
                                                                                <option value="8">Grand Buffet Dinners
                                                                                </option>
                                                                                <option value="10">Bar Options</option>
                                                                                <option value="11">Hors d&#039;oeuvre
                                                                                    Reception</option>
                                                                            </optgroup>
                                                                            <optgroup label="Holly Loscig Menu">
                                                                                <option value="14">Builder a Burger
                                                                                </option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="menu_item"
                                                                    class="control-label required">Sub Menu
                                                                    Items</label>
                                                                <div id="veg_menu_item_div_2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="service_type"
                                                                    class="control-label required">Service Type</label>
                                                                <div class="controls">
                                                                    <select class="form-control select2"
                                                                        id="service_type" name="service_type_2">
                                                                        <option value="">Select Service Type</option>
                                                                        <option value="4" selected="selected">Buffet
                                                                        </option>
                                                                        <option value="3">Cafeteria Services</option>
                                                                        <option value="2">Plated Services</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="head_table"
                                                                    class="control-label required">Table</label>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                name="head_table_2" id="all_day"
                                                                                class='icheck'>
                                                                            Head Table
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="head_table_count_2" value="16"
                                                                                    class='icheckblue'>
                                                                                16
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="head_table_count_2" value="18"
                                                                                    class='icheckblue'>
                                                                                18
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="head_table_count_2" value="20"
                                                                                    class='icheckblue'>
                                                                                20
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                name="dinning_table_2" id="all_day"
                                                                                class='icheck' checked>
                                                                            Dining Table
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group">
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="dinning_table_count_2"
                                                                                    value="16" class='icheckblue'
                                                                                    checked>
                                                                                16
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="dinning_table_count_2"
                                                                                    value="18" class='icheckblue'>
                                                                                18
                                                                            </label>
                                                                            <label>
                                                                                <input type="radio"
                                                                                    name="dinning_table_count_2"
                                                                                    value="20" class='icheckblue'>
                                                                                20
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="eating_details">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#time_day1" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 1</b></a></li>
                                            <li><a href="#time_day2" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 2</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane  active " id="time_day1">
                                                <h1 class="text-center">1st day - 09/05/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="service_time" class="control-label">Service
                                                                Time</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select Service Time" onchange
                                                                    name="service_time1" type="text" value="09:39 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="canapes" class="control-label">Canapes</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select Canapes Time" onchange
                                                                    name="canapes1" type="text" value="09:42 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Bar open</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select open Time" onchange
                                                                    name="bar_open1" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Bar close</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select close Time" onchange
                                                                    name="bar_close1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3" id="morning_start_time_div">
                                                        <div class="form-group">
                                                            <label for="morning_start_time"
                                                                class="control-label">Morning Snacks</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Snacks Start Time" onchange
                                                                    name="morning_start_time1" type="text"
                                                                    value="09:42 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="morning_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Snacks End Time" onchange
                                                                    name="morning_end_time1" type="text"
                                                                    value="09:42 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" id="morning_tea_start_time_div">
                                                        <div class="form-group">
                                                            <label for="mr_tea_start_time" class="control-label">Morning
                                                                Tea / Coffee</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Tea / Coffee Start Time"
                                                                    onchange name="mr_tea_start_time1" type="text"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="morning_tea_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Tea / Coffee End Time" onchange
                                                                    name="mr_tea_end_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3" id="lunch_start_time_div">
                                                        <div class="form-group">
                                                            <label for="lunch_start_time"
                                                                class="control-label">Lunch</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Lunch Start Time" onchange
                                                                    name="lunch_start_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="lunch_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Lunch End Time" onchange
                                                                    name="lunch_end_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" id="af_tea_start_time_div">
                                                        <div class="form-group">
                                                            <label for="af_tea_start_time"
                                                                class="control-label">Afternoon Tea / Coffee</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Afternoon Tea / Coffee Start Time"
                                                                    onchange name="af_tea_start_time1" type="text"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="af_tea_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Afternoon Tea / Coffee End Time"
                                                                    onchange name="af_tea_end_time1" type="text"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="evening_start_time"
                                                                class="control-label">Evening Snacks</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Evening Snacks Start Time" onchange
                                                                    name="evening_start_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Evening Snacks End Time" onchange
                                                                    name="evening_end_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dinner_start_time"
                                                                class="control-label">Dinner</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Dinner Start Time" onchange
                                                                    name="dinner_start_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Dinner End Time" onchange
                                                                    name="dinner_end_time1" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="time_day2">
                                                <h1 class="text-center">2nd day - 09/06/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="service_time" class="control-label">Service
                                                                Time</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select Service Time" onchange
                                                                    name="service_time2" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="canapes" class="control-label">Canapes</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select Canapes Time" onchange
                                                                    name="canapes2" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Bar open</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select open Time" onchange
                                                                    name="bar_open2" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label">Bar close</label>
                                                            <div class="controls">
                                                                <input class="form-control timepicker"
                                                                    placeholder="Select close Time" onchange
                                                                    name="bar_close2" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3" id="morning_start_time_div">
                                                        <div class="form-group">
                                                            <label for="morning_start_time"
                                                                class="control-label">Morning Snacks</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Snacks Start Time" onchange
                                                                    name="morning_start_time2" type="text"
                                                                    value="09:42 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="morning_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Snacks End Time" onchange
                                                                    name="morning_end_time2" type="text"
                                                                    value="09:42 AM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" id="morning_tea_start_time_div">
                                                        <div class="form-group">
                                                            <label for="mr_tea_start_time" class="control-label">Morning
                                                                Tea / Coffee</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Tea / Coffee Start Time"
                                                                    onchange name="mr_tea_start_time2" type="text"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="morning_tea_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Morning Tea / Coffee End Time" onchange
                                                                    name="mr_tea_end_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3" id="lunch_start_time_div">
                                                        <div class="form-group">
                                                            <label for="lunch_start_time"
                                                                class="control-label">Lunch</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Lunch Start Time" onchange
                                                                    name="lunch_start_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="lunch_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Lunch End Time" onchange
                                                                    name="lunch_end_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" id="af_tea_start_time_div">
                                                        <div class="form-group">
                                                            <label for="af_tea_start_time"
                                                                class="control-label">Afternoon Tea / Coffee</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Afternoon Tea / Coffee Start Time"
                                                                    onchange name="af_tea_start_time2" type="text"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field" id="af_tea_end_time_div">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Afternoon Tea / Coffee End Time"
                                                                    onchange name="af_tea_end_time2" type="text"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="evening_start_time"
                                                                class="control-label">Evening Snacks</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Evening Snacks Start Time" onchange
                                                                    name="evening_start_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Evening Snacks End Time" onchange
                                                                    name="evening_end_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="dinner_start_time"
                                                                class="control-label">Dinner</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">From</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Dinner Start Time" onchange
                                                                    name="dinner_start_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 end_field">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"></label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"
                                                                    id="basic-addon1">To</span>
                                                                <input class="form-control timepicker"
                                                                    placeholder="Dinner End Time" onchange
                                                                    name="dinner_end_time2" type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="equipment_details">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#eq_day1" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 1</b></a></li>
                                            <li><a href="#eq_day2" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 2</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane  active " id="eq_day1">
                                                <h1 class="text-center">1st day - 09/05/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" value="4" name="equipment_1[]"
                                                                    id="all_day" class='icheck'>
                                                                Dance Floor
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" value="2" name="equipment_1[]"
                                                                    id="all_day" class='icheck'>
                                                                LCD Projecter
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" value="5" name="equipment_1[]"
                                                                    id="all_day" class='icheck'>
                                                                Pachet Dj Botez 30-50 Persoane
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" value="3" name="equipment_1[]"
                                                                    id="all_day" class='icheck'>
                                                                Speakers
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="eq_day2">
                                                <h1 class="text-center">2nd day - 09/06/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" value="4" name="equipment_2[]"
                                                                    id="all_day" class='icheck'>
                                                                Dance Floor
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" value="2" name="equipment_2[]"
                                                                    id="all_day" class='icheck'>
                                                                LCD Projecter
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" value="5" name="equipment_2[]"
                                                                    id="all_day" class='icheck'>
                                                                Pachet Dj Botez 30-50 Persoane
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" value="3" name="equipment_2[]"
                                                                    id="all_day" class='icheck'>
                                                                Speakers
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="contractor_details">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#contractor_day1" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 1</b></a></li>
                                            <li><a href="#contractor_day2" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 2</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane  active " id="contractor_day1">
                                                <h1 class="text-center">1st day - 09/05/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="caterers" class="control-label">Caterers</label>
                                                            <div class="controls">
                                                                <select class="form-control select2" id="caterers"
                                                                    onchange="filterContractorCaterer(this.value,&quot;caterer&quot;,1)"
                                                                    name="caterers1">
                                                                    <option value="" selected="selected">Select Caterer
                                                                    </option>
                                                                    <option value="4">asdasdasd</option>
                                                                    <option value="2">Ashlie Caterer</option>
                                                                    <option value="3">Unique Caterers</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="caterer_packages1">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="photo"
                                                                class="control-label">Photographer</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    id="photographers_id"
                                                                    onchange="filterContractor(this.value,&quot;photo&quot;,1)"
                                                                    name="photo1">
                                                                    <option value="" selected="selected">Select
                                                                        Photographer</option>
                                                                    <option value="2">COUNTRY CAMERA STUDIO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="photo_packages1">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="decorator"
                                                                class="control-label">Decorator</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    onchange="filterContractor(this.value,&quot;decorator&quot;,1)"
                                                                    name="decorator1">
                                                                    <option value="" selected="selected">Select
                                                                        decorator</option>
                                                                    <option value="2">IMAGINATIONS</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="decorator_packages1">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="entertainment"
                                                                class="control-label">Entertainment</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    onchange="filterContractor(this.value,&quot;entertain&quot;,1)"
                                                                    name="entertainment1">
                                                                    <option value="" selected="selected">Select
                                                                        Entertainment</option>
                                                                    <option value="2">BIGG ROMEO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="entertain_packages1">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label for="otherService" class="control-label">Other
                                                                Service</label>
                                                            <div class="controls">
                                                                <select class="form-control miscs" id="miscellaneous1"
                                                                    multiple onchange="filterOther1(1)"
                                                                    name="otherService1[]">
                                                                    <option value="">Miscellaneous</option>
                                                                    <option value="2">HEAD FIRST HAIR DESIGNS &amp;
                                                                        SALON</option>
                                                                    <option value="4">test</option>
                                                                </select>
                                                                <span class="help-block"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" id="other_packages1">

                                                </div>
                                            </div>
                                            <div class="tab-pane " id="contractor_day2">
                                                <h1 class="text-center">2nd day - 09/06/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="caterers" class="control-label">Caterers</label>
                                                            <div class="controls">
                                                                <select class="form-control select2" id="caterers"
                                                                    onchange="filterContractorCaterer(this.value,&quot;caterer&quot;,2)"
                                                                    name="caterers2">
                                                                    <option value="" selected="selected">Select Caterer
                                                                    </option>
                                                                    <option value="4">asdasdasd</option>
                                                                    <option value="2">Ashlie Caterer</option>
                                                                    <option value="3">Unique Caterers</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="caterer_packages2">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="photo"
                                                                class="control-label">Photographer</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    id="photographers_id"
                                                                    onchange="filterContractor(this.value,&quot;photo&quot;,2)"
                                                                    name="photo2">
                                                                    <option value="" selected="selected">Select
                                                                        Photographer</option>
                                                                    <option value="2">COUNTRY CAMERA STUDIO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="photo_packages2">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="decorator"
                                                                class="control-label">Decorator</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    onchange="filterContractor(this.value,&quot;decorator&quot;,2)"
                                                                    name="decorator2">
                                                                    <option value="" selected="selected">Select
                                                                        decorator</option>
                                                                    <option value="2">IMAGINATIONS</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="decorator_packages2">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="entertainment"
                                                                class="control-label">Entertainment</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    onchange="filterContractor(this.value,&quot;entertain&quot;,2)"
                                                                    name="entertainment2">
                                                                    <option value="" selected="selected">Select
                                                                        Entertainment</option>
                                                                    <option value="2">BIGG ROMEO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="entertain_packages2">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label for="otherService" class="control-label">Other
                                                                Service</label>
                                                            <div class="controls">
                                                                <select class="form-control miscs" id="miscellaneous2"
                                                                    multiple onchange="filterOther2(2)"
                                                                    name="otherService2[]">
                                                                    <option value="">Miscellaneous</option>
                                                                    <option value="2">HEAD FIRST HAIR DESIGNS &amp;
                                                                        SALON</option>
                                                                    <option value="4">test</option>
                                                                </select>
                                                                <span class="help-block"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" id="other_packages2">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="finance_details">
                                        <div class="row">


















                                            <input name="food_beverage_min" type="hidden">
                                            <input name="rental_fee" type="hidden">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deposit_amounts" class="control-label required">Deposit
                                                        Amounts</label>
                                                    <div class="controls">
                                                        <input class="form-control" name="deposit_amounts" type="text"
                                                            id="deposit_amounts">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deposit_date" class="control-label required">Deposit
                                                        Due</label>
                                                    <div class="controls">
                                                        <input class="form-control" id="deposit_date"
                                                            placeholder="Select Due Date" name="deposit_date"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="2nd_deposit" class="control-label">2nd Deposit</label>
                                                    <div class="controls">
                                                        <input class="form-control" name="2nd_deposit" type="text"
                                                            id="2nd_deposit">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deposit_2_date" class="control-label">2nd Deposit Due
                                                        Date</label>
                                                    <div class="controls">
                                                        <input class="form-control" id="deposit_2_date"
                                                            placeholder="Select 2nd Due Date" name="deposit_2_date"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="balance_due_date" class="control-label required">Balance
                                                        Due Date</label>
                                                    <div class="controls">
                                                        <input class="form-control" id="balance_due_date"
                                                            placeholder="Select Balance Due Date"
                                                            name="balance_due_date" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deposit_types" class="control-label required">Deposit
                                                        Type</label>
                                                    <div class="controls">
                                                        <select class="form-control select2" id="deposit_type"
                                                            name="deposit_types">
                                                            <option value="" selected="selected">Select Deposit Type
                                                            </option>
                                                            <option value="3">Card</option>
                                                            <option value="4">Cash</option>
                                                            <option value="5">Cheque</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>








































                                    <div class="tab-pane" id="guest_pickup_details">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#guest_day1" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 1</b></a></li>
                                            <li><a href="#guest_day2" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 2</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane  active " id="guest_day1">
                                                <h1 class="text-center">1st day - 09/05/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="guest_pick"
                                                                class="control-label">Company</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    name="guest_pick_1">
                                                                    <option value="">Select Transportation Service
                                                                    </option>
                                                                    <option value="2">J &amp; J Luxury Transportation
                                                                    </option>
                                                                    <option value="3">WGM Taxi Transportation</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="van_choice" class="control-label">Van
                                                                Choice</label>
                                                            <div class="controls">
                                                                <input class="form-control" name="van_choice_1"
                                                                    type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="staff_choice" class="control-label">Staff
                                                                Choice</label>
                                                            <div class="controls">
                                                                <select class="form-control select2 staff_choice_main"
                                                                    id="staff_choice" multiple="multiple"
                                                                    name="staff_choice_1[]">
                                                                    <option value="" selected="selected">Team leader
                                                                    </option>
                                                                    <option value="18">David Felming (Field Marketing)
                                                                    </option>
                                                                    <option value="19">Adan Brown (Banquet Manager)
                                                                    </option>
                                                                    <option value="32">Saachi Katwe (Banquet Manager)
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <a class="fa fa-plus-circle add_item" data-toggle="modal"
                                                            data-target="#staff_value"> Add Value</a>
                                                    </div>

                                                    <div id="demo" class="row">
                                                        <div class="col-md-6 room_check_box">
                                                            <div class="form-group">
                                                                <label for="room" class="control-label">Hotels &amp;
                                                                    Rooms</label>
                                                                <div class="form-group">
                                                                    <div class="col-md-12" style="margin-bottom: 10px">
                                                                        <select class="form-control select2"
                                                                            id="hotelName"
                                                                            onchange="filterRoom(this.value,1)"
                                                                            name="hotelName_1">
                                                                            <option value="" selected="selected">Select
                                                                                Hotel</option>
                                                                            <option value="3">Courtyard by</option>
                                                                            <option value="4">Hampton Inn Philadelphia
                                                                                Center</option>
                                                                            <option value="5">Maarten Kamerling</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12" id="filterRooms1">
                                                                        <label>
                                                                            No Room Available
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="function_address" class="control-label">Function
                                                                Address</label>
                                                            <div class="controls">
                                                                <input class="form-control" name="function_address_1"
                                                                    type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="guest_day2">
                                                <h1 class="text-center">2nd day - 09/06/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="guest_pick"
                                                                class="control-label">Company</label>
                                                            <div class="controls">
                                                                <select class="form-control select2"
                                                                    name="guest_pick_2">
                                                                    <option value="">Select Transportation Service
                                                                    </option>
                                                                    <option value="2">J &amp; J Luxury Transportation
                                                                    </option>
                                                                    <option value="3">WGM Taxi Transportation</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="van_choice" class="control-label">Van
                                                                Choice</label>
                                                            <div class="controls">
                                                                <input class="form-control" name="van_choice_2"
                                                                    type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="staff_choice" class="control-label">Staff
                                                                Choice</label>
                                                            <div class="controls">
                                                                <select class="form-control select2 staff_choice_main"
                                                                    id="staff_choice" multiple="multiple"
                                                                    name="staff_choice_2[]">
                                                                    <option value="" selected="selected">Team leader
                                                                    </option>
                                                                    <option value="18">David Felming (Field Marketing)
                                                                    </option>
                                                                    <option value="19">Adan Brown (Banquet Manager)
                                                                    </option>
                                                                    <option value="32">Saachi Katwe (Banquet Manager)
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <a class="fa fa-plus-circle add_item" data-toggle="modal"
                                                            data-target="#staff_value"> Add Value</a>
                                                    </div>

                                                    <div id="demo" class="row">
                                                        <div class="col-md-6 room_check_box">
                                                            <div class="form-group">
                                                                <label for="room" class="control-label">Hotels &amp;
                                                                    Rooms</label>
                                                                <div class="form-group">
                                                                    <div class="col-md-12" style="margin-bottom: 10px">
                                                                        <select class="form-control select2"
                                                                            id="hotelName"
                                                                            onchange="filterRoom(this.value,2)"
                                                                            name="hotelName_2">
                                                                            <option value="" selected="selected">Select
                                                                                Hotel</option>
                                                                            <option value="3">Courtyard by</option>
                                                                            <option value="4">Hampton Inn Philadelphia
                                                                                Center</option>
                                                                            <option value="5">Maarten Kamerling</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12" id="filterRooms2">
                                                                        <label>
                                                                            No Room Available
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="function_address" class="control-label">Function
                                                                Address</label>
                                                            <div class="controls">
                                                                <input class="form-control" name="function_address_2"
                                                                    type="text" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="staff_value" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Add New Staff</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="name"
                                                                    class="control-label required">Name</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="staff_name"
                                                                        name="name" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email" class="control-label required">Email
                                                                    ID</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="staff_email"
                                                                        name="email" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="contact"
                                                                    class="control-label required">Contact</label>
                                                                <div class="controls">
                                                                    <input class="form-control" id="staff_contact"
                                                                        name="contact" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    onclick="addStaff()">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="valet_parking_details">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#valet_day1" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 1</b></a></li>
                                            <li><a href="#valet_day2" data-toggle="tab"><i
                                                        class="material-icons"></i><b>Day 2</b></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane  active " id="valet_day1">
                                                <h1 class="text-center">1st day - 09/05/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="parking" class="control-label">Valet
                                                                Parking</label>
                                                            <div class="controls">
                                                                <select class="form-control select2" name="parking_1">
                                                                    <option value="">Select parking Service</option>
                                                                    <option value="4">aldrin</option>
                                                                    <option value="3">Global Parking</option>
                                                                    <option value="2">Valet Parking</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="valet_day2">
                                                <h1 class="text-center">2nd day - 09/06/2019 (9:35 AM to 10:35 AM)</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="parking" class="control-label">Valet
                                                                Parking</label>
                                                            <div class="controls">
                                                                <select class="form-control select2" name="parking_2">
                                                                    <option value="">Select parking Service</option>
                                                                    <option value="4">aldrin</option>
                                                                    <option value="3">Global Parking</option>
                                                                    <option value="2">Valet Parking</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane form-panel-event" id="additional_details_last">
                                        <div class="form-group">
                                            <label for="message" class="control-label">Message</label>
                                            <div class="controls">
                                                <input class="form-control" id="txtEditor" name="message" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <button type="submit" class="btn btn-primary">UPDATE</button>
                                                    <a href="https://saas.banquetcrm.com/function"
                                                        class="btn btn-primary">CANCEL</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="#">First</a></li>
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="#">Last</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="modal" id="mdl_location_booked" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mdl_book_title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="mdl_book_body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.content -->
    </div>
    </aside>

    <div class="modal fade" id="all-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <button type="button " class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body" id="mmb-modal-content">

                </div>
            </div>
        </div>
    </div>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
</div>
<!-- global js -->







</div>
</div>


<script src="https://saas.banquetcrm.com/js/libs.4fc67c7b0f3759023aa88463557e8fc4.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/metisMenu.min.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/lcrm_app.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/secure.c4eaab5cdee714f22d6f.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/icheck.min.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/notify.js" type="text/javascript"></script>


@endsection