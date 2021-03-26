@extends('backend.master')
@section('title',"Edit Function")
@section('content')
<!-- Top Menubar Ends Here-->
 <div class="page">
 <div class="page-main">
<div class="page-header">
   <h1 class="page-title">Edit Function</h1>
</div>
<div class="page-content">
<div class="panel">
   <div class="panel-body">
      <p>
      <div class="nav-tabs-vertical" data-plugin="tabs">
         <ul class="nav nav-tabs mr-25" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLeftOne" aria-controls="exampleTabsLeftOne" role="tab" aria-selected="true"><i class="icon fa-address-card" aria-hidden="true" style="font-size: 18px;"></i> Booking Details</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftTwo" aria-controls="exampleTabsLeftTwo" role="tab" aria-selected="false"><i class="icon fa-columns" aria-hidden="true" style="font-size: 18px;"></i> Food Menu</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftThree" aria-controls="exampleTabsLeftThree" role="tab" aria-selected="false"><i class="icon fa-clock-o" aria-hidden="true" style="font-size: 18px;"></i> Eating Times</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftFour" aria-controls="exampleTabsLeftFour" role="tab" aria-selected="false"><i class="icon fa-video-camera" aria-hidden="true" style="font-size: 18px;"></i> Equipment Requirements</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftFive" aria-controls="exampleTabsLeftFive" role="tab" aria-selected="false"><i class="icon fa-truck" aria-hidden="true" style="font-size: 18px;"></i> Function Contractors</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftSix" aria-controls="exampleTabsLeftSix" role="tab" aria-selected="false"><i class="icon fa-money" aria-hidden="true" style="font-size: 18px;"></i> Financial Deposits</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftSeven" aria-controls="exampleTabsLeftSeven" role="tab" aria-selected="false"><i class="icon fa-bus" aria-hidden="true" style="font-size: 18px;"></i> Guest Pickups</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftEight" aria-controls="exampleTabsLeftEight" role="tab" aria-selected="false"><i class="icon fa-automobile" aria-hidden="true" style="font-size: 18px;"></i>Valet Parking</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftNine" aria-controls="exampleTabsLeftNine" role="tab" aria-selected="false" style="
               /* height: 400px; */
               "><i class="icon fa-info-circle" aria-hidden="true" style="font-size: 18px;"></i> Additional Information</a></li>
            <li class="nav-item" role="presentation"><a> </a></li>
         </ul>
         <div class="tab-content py-15">
            <div class="tab-pane active" id="exampleTabsLeftOne" role="tabpanel">
               <div>
                  <!--Booking Details Starts here -->
                  <div>
                     <!--Booking Details Starts here -->
                     <div>
                        <!--Booking Details Starts here -->
                        <div>
                           <!--abc -->
                           <div class="row">
                              <div class="col-lg-4">
                                 <h5>Client Name:*</h5>
                                 <select id="client" onchange="fillCutomerInfo(this.value)" name="client" class="form-control " tabindex="-1" aria-hidden="true">
                                    <option value="">Select Customer</option>
                                    <option value="2">Jessica Jonson (Toll Brothers)</option>
                                    <option value="3">James Smith (Toll Brothers)</option>
                                    <option value="4">Anna Strong (Toll Brothers)</option>
                                    <option value="5">Iron Man (Personal)</option>
                                    <option value="6" selected="selected">Iron Man (Personal)</option>
                                    <option value="7">Ode Palestine (Personal)</option>
                                    <option value="8">Rush Patel (Personal)</option>
                                    <option value="9">lelo l (Personal)</option>
                                    <option value="10">Ammar Aker (Jawwal Palestine)</option>
                                    <option value="11">Param Ramanan (Personal)</option>
                                    <option value="12">test john (Personal)</option>
                                    <option value="13">Mark jennings (Personal)</option>
                                    <option value="14">oliver queen (Personal)</option>
                                    <option value="15">Rajaram raj (Personal)</option>
                                    <option value="16">John Olson (Personal)</option>
                                    <option value="17">Thakur Ravi (Personal)</option>
                                    <option value="18">Saimina Makhijani (Personal)</option>
                                    <option value="19">Vinay Katwe (California Cartage Express)</option>
                                    <option value="26">test  (Personal)</option>
                                    <option value="27">Mohammed  (Personal)</option>
                                    <option value="28">  (Personal)</option>
                                    <option value="29">  ()</option>
                                    <option value="30">svq eqr (Toll Brothers)</option>
                                    <option value="31">Farhan  (Personal)</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Email ID:* </h5>
                                 <input placeholder="Email Id" name="client_email" type="email" value="ironman@ironman.com" id="client_email" class="form-control tooltipstered">              
                              </div>
                              <div class="col-lg-4">
                                 <h5>Phone:*</h5>
                                 <input placeholder="Phone" min="0" name="client_phone" type="number" value="1234567891" id="client_phone" class="form-control tooltipstered">              
                              </div>
                           </div>
                           <div class="row" style="padding-top: 10px;">
                              <div class="col-lg-4">
                                 <h5>Company:*</h5>
                                 <select id="client_company" name="client_company" class="form-control " tabindex="-1" aria-hidden="true">
                                    <option value="">Select Company</option>
                                    <option value="Personal" selected="selected">Personal</option>
                                    <option value="2">California Cartage Express</option>
                                    <option value="4">Jawwal Palestine</option>
                                    <option value="3">Toll Brothers</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Country:*</h5>
                                 <select id="country_id" name="country_id" class="form-control " tabindex="-1" aria-hidden="true">
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
                                    <option value="13" selected="selected">Australia</option>
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
                                    <option value="31">British Indian Ocean Territory</option>
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
                                    <option value="50">Congo The Democratic Republic Of The</option>
                                    <option value="51">Cook Islands</option>
                                    <option value="52">Costa Rica</option>
                                    <option value="53">Cote D'Ivoire (Ivory Coast)</option>
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
                                    <option value="70">External Territories of Australia</option>
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
                                    <option value="168">Palestinian Territory Occupied</option>
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
                                    <option value="187">Saint Vincent And The Grenadines</option>
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
                                    <option value="199">Smaller Territories of the UK</option>
                                    <option value="200">Solomon Islands</option>
                                    <option value="201">Somalia</option>
                                    <option value="202">South Africa</option>
                                    <option value="203">South Georgia</option>
                                    <option value="204">South Sudan</option>
                                    <option value="205">Spain</option>
                                    <option value="206">Sri Lanka</option>
                                    <option value="207">Sudan</option>
                                    <option value="208">Suriname</option>
                                    <option value="209">Svalbard And Jan Mayen Islands</option>
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
                                    <option value="232">United States Minor Outlying Islands</option>
                                    <option value="233">Uruguay</option>
                                    <option value="234">Uzbekistan</option>
                                    <option value="235">Vanuatu</option>
                                    <option value="236">Vatican City State (Holy See)</option>
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
                              <div class="col-lg-4">
                                 <h5>State:*</h5>
                                 <select id="state_id" name="state_id" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="246">Australian Capital Territory</option>
                                    <option value="266">New South Wales</option>
                                    <option value="267">Northern Territory</option>
                                    <option value="269" selected="selected">Queensland</option>
                                    <option value="270">South Australia</option>
                                    <option value="271">Tasmania</option>
                                    <option value="273">Victoria</option>
                                    <option value="275">Western Australia</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 10px;">
                              <div class="col-lg-4">
                                 <h5>City:*</h5>
                                 <select id="city_id" name="city_id" class="form-control " tabindex="-1" aria-hidden="true">
                                    <option value="6579">Acacia Ridge</option>
                                    <option value="6580" selected="selected">Aitkenvale</option>
                                    <option value="6581">Alderley</option>
                                    <option value="6582">Alexander Hills</option>
                                    <option value="6583">Archerfield</option>
                                    <option value="6584">Ashmore</option>
                                    <option value="6585">Atherton</option>
                                    <option value="6586">Ayr</option>
                                    <option value="6587">Beachmere</option>
                                    <option value="6588">Beenleigh</option>
                                    <option value="6589">Beerwah</option>
                                    <option value="6590">Bell</option>
                                    <option value="6591">Belmont</option>
                                    <option value="6592">Biloela</option>
                                    <option value="6593">Birkdale</option>
                                    <option value="6594">Blackwater</option>
                                    <option value="6595">Bongaree</option>
                                    <option value="6596">Bonogin</option>
                                    <option value="6597">Boonah</option>
                                    <option value="6598">Bowen</option>
                                    <option value="6599">Brendale</option>
                                    <option value="6600">Brisbane</option>
                                    <option value="6601">Buddina</option>
                                    <option value="6602">Buderim</option>
                                    <option value="6603">Bundaberg</option>
                                    <option value="6604">Bundall</option>
                                    <option value="6605">Burleigh Heads</option>
                                    <option value="6606">Burpengary</option>
                                    <option value="6607">Cabaland</option>
                                    <option value="6608">Caboolture</option>
                                    <option value="6609">Cairns</option>
                                    <option value="6610">Cairns Northern Beaches</option>
                                    <option value="6611">Caloundra</option>
                                    <option value="6612">Capalaba</option>
                                    <option value="6613">Charters Towers</option>
                                    <option value="6614">Childers</option>
                                    <option value="6615">Cleveland</option>
                                    <option value="6616">Coolum Beach</option>
                                    <option value="6617">Coopers Plain</option>
                                    <option value="6618">Dalby</option>
                                    <option value="6619">Deception Bay</option>
                                    <option value="6620">Eagle Farm</option>
                                    <option value="6621">Eagleby</option>
                                    <option value="6622">Emerald</option>
                                    <option value="6623">Emundi</option>
                                    <option value="6624">Forest Lake</option>
                                    <option value="6625">Gatton</option>
                                    <option value="6626">Gladstone</option>
                                    <option value="6627">Gold Coast</option>
                                    <option value="6628">Gowrie Junction</option>
                                    <option value="6629">Gympie</option>
                                    <option value="6630">Helensvale</option>
                                    <option value="6631">Hervey Bay</option>
                                    <option value="6632">Ingham</option>
                                    <option value="6633">Innisfail</option>
                                    <option value="6634">Ipswich</option>
                                    <option value="6635">Jindalee</option>
                                    <option value="6636">Julatten</option>
                                    <option value="6637">Kawana Waters</option>
                                    <option value="6638">Kingaroy</option>
                                    <option value="6639">Lawnton</option>
                                    <option value="6640">Loganholme</option>
                                    <option value="6641">Mackay</option>
                                    <option value="6642">Mareeba</option>
                                    <option value="6643">Maroochydore</option>
                                    <option value="6644">Maroochydore-Mooloolaba</option>
                                    <option value="6645">Maryborough</option>
                                    <option value="6646">Miami</option>
                                    <option value="6647">Milton</option>
                                    <option value="6648">Molendinar</option>
                                    <option value="6649">Moranbah</option>
                                    <option value="6650">Morayfield</option>
                                    <option value="6651">Mossman</option>
                                    <option value="6652">Mount Glorious</option>
                                    <option value="6653">Mount Isa</option>
                                    <option value="6654">Murarrie</option>
                                    <option value="6655">Nairand Kay</option>
                                    <option value="6656">Nambour</option>
                                    <option value="6657">Nerang</option>
                                    <option value="6658">Nobby Beach</option>
                                    <option value="6659">Noosa Heads</option>
                                    <option value="6660">Noosaville</option>
                                    <option value="6661">Paddington</option>
                                    <option value="6662">Port Douglas</option>
                                    <option value="6663">Robina</option>
                                    <option value="6664">Rockhampton</option>
                                    <option value="6665">Rocklea</option>
                                    <option value="6666">Roma</option>
                                    <option value="6667">Rubyvale</option>
                                    <option value="6668">Sanctuary Cove</option>
                                    <option value="6669">Slade Point</option>
                                    <option value="6670">Southport</option>
                                    <option value="6671">Suburb</option>
                                    <option value="6672">Sunshine Coast</option>
                                    <option value="6673">Tewantin-Noosa</option>
                                    <option value="6674">The Summit</option>
                                    <option value="6675">Toowong</option>
                                    <option value="6676">Toowoomba</option>
                                    <option value="6677">Townsville</option>
                                    <option value="6678">Victoria Point</option>
                                    <option value="6679">Warwick</option>
                                    <option value="6680">Willawong</option>
                                    <option value="6681">Yatala</option>
                                    <option value="6682">Yeppoon</option>
                                    <option value="6683">Zillmere</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Zipcode:</h5>
                                 <input placeholder="Zip code" name="zipcode" type="text" value="123457" class="form-control tooltipstered">
                              </div>
                              <div class="col-lg-4">
                                 <h5>Lead Source:*</h5>
                                 <select id="lead_source" name="lead_source" class="form-control" tabindex="-1" aria-hidden="true">
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
                           <div class="row" style="padding-top: 10px;">
                              <div class="col-lg-4">
                                 <h5>Sales Team:*</h5>
                                 <select id="sales_team_id" name="salesteam" class="form-control " tabindex="-1" aria-hidden="true">
                                    <option value="">Select Sales team</option>
                                    <option value="2" selected="selected">Mike's Sales Team</option>
                                    <option value="4">fgh</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h4 class="example-title">Lead Owner:*</h4>
                                 <select id="owner" name="owner" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="18">David Felming</option>
                                    <option value="19">Adan Brown</option>
                                    <option value="32">Saachi Katwe</option>
                                    <option value="">Staff Members</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Event Name:</h5>
                                 <input placeholder="Name" name="event_name" type="text" value="Iron Man Birthday Party" id="event_name" class="form-control tooltipstered"> 
                              </div>
                           </div>
                           <!-- End Panel Basic -->
                           <div class="row" style="padding-top: 10px;">
                              <div class="col-lg-4">
                                 <h5>Type of Event:*</h5>
                                 <select id="type_event" name="type_event" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="">Select Function Type</option>
                                    <option value="1">Birthday Party</option>
                                    <option value="2" selected="selected">Birthday Party</option>
                                    <option value="3">Cocktail</option>
                                    <option value="4">Conference</option>
                                    <option value="13">Corporate</option>
                                    <option value="5">Corporate Event</option>
                                    <option value="12">Fair</option>
                                    <option value="11">Other</option>
                                    <option value="6">Rehearsal Dinner</option>
                                    <option value="10">Retirement Party</option>
                                    <option value="7">Shower</option>
                                    <option value="14">Social Events</option>
                                    <option value="8">Special Occasion</option>
                                    <option value="9">Wedding</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Event Status:*</h5>
                                 <select id="status" name="status" class="form-control " tabindex="-1" aria-hidden="true">
                                    <option value="CLOSE">Close</option>
                                    <option value="LOST">Lost</option>
                                    <option value="PROSPECT">Prospect</option>
                                    <option value="TENTATIVE" selected="selected">Tentative</option>
                                    <option value="DEFINITE">Definite</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Expected Guest:*</h5>
                                 <div tabindex="0" class="spinnerUi">
                                    <input placeholder="Expected Guest" min="0" name="expected_guests_veg" type="number" value="100" class="form-control tooltipstered">
                                    <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
                              <div class="col-lg-4">
                                 <h5>Gaurnteed Guest:*</h5>
                                 <div tabindex="0" class="spinnerUi">
                                    <input placeholder="Guaranteed Guest" min="0" name="guaranteed_guest_veg" type="number" value="100" class="form-control tooltipstered">
                                    <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Event Start Date:*</h5>
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="icon wb-calendar" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="Start date" id="start_date" oninput="getDateTimes(this.value)" name="start_date" type="text" value="2019-07-22" class="form-control datepicker tooltipstered">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Event End Date:*</h5>
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="icon wb-calendar" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="End Date" id="end_date" oninput="getDateTimes(this.value)" name="end_date" type="text" value="2019-07-22" class="form-control datepicker tooltipstered">
                                 </div>
                              </div>
                           </div>
                           <div style="background-color: #f1f4f5; padding: 10px; border-radius: 5px;">
                              <!-- test --> 
                              <div class="row" style="padding-top: 10px;">
                                 <div class="col-lg-2">
                                    <h5>Date:</h5>
                                 </div>
                                 <div class="col-lg-2 form-group">
                                    <h4 class="example-title">Occasion:</h4>
                                 </div>
                                 <div class="col-lg-2 form-group">
                                    <h4 class="example-title">Event Time:</h4>
                                 </div>
                                 <div class="col-lg-2 form-group">
                                    <h4 class="example-title"></h4>
                                 </div>
                                 <div class="col-lg-2 form-group">
                                    <h4 class="example-title">Setup:*</h4>
                                 </div>
                                 <div class="col-lg-2 form-group">
                                    <h4 class="example-title">Teardown:*</h4>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h5><i class="icon wb-calendar" aria-hidden="true"></i> 27th Sep, 2019</h5>
                                 </div>
                                 <div class="col-lg-2">
                                    <input type="text" name="event_occasion_0" value="Casamento" placeholder="Event Occasion" class="form-control tooltipstered">
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="input-daterange" data-plugin="datepicker">
                                       <div class="input-group">
                                          <span class="input-group-addon">
                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                          </span>
                                          <input type="text" name="event_start_time_0" value="16:46 pm" placeholder="Event Start Time" onchange="" class="form-control timepicker tooltipstered">
                                       </div>
                                       <div class="input-group">
                                          <span class="input-group-addon">to</span>
                                          <input type="text" name="event_end_time_0" value="00:49 am" placeholder="Event End Time" onchange="" class="form-control timepicker tooltipstered">                      
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-2">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-time" aria-hidden="true"></i>
                                       </span>
                                       <input type="text" name="setup_0" id="setup_0" value="16:46 pm" placeholder="Setup" onchange="getLocations(0)" class="form-control timepicker tooltipstered">
                                    </div>
                                 </div>
                                 <div class="col-lg-2">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-time" aria-hidden="true"></i>
                                       </span>
                                       <input type="text" name="teardown_0" id="teardown_0" value="20:46 pm" placeholder="Tear Down" onchange="getLocations(0)" class="form-control timepicker tooltipstered">
                                    </div>
                                 </div>
                              </div>
                              <div class="row" style="padding-top: 10px;">
                                 <div class="col-lg-4">
                                    <h5>Event Location:*</h5>
                                    <select id="location_0" onchange="locationChange(0)" name="location_0" class="form-control" tabindex="-1" aria-hidden="true">
                                       <option value="2" selected="selected">Versailles Ballroom (200 Guests)</option>
                                    </select>
                                 </div>
                                 <div class="col-lg-4 form-group">
                                    <h5>Rental Price / Day(₵)</h5>
                                    <div tabindex="0" class="spinnerUi">
                                       <input type="number" name="location_rent_0" id="location_rent_0" value="2000" placeholder="Rental price per day" class="form-control tooltipstered">
                                       <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 10px;">
                              <div class="col-lg-6">
                                 <h5>Event Manager:*</h5>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px;">
                              <div class="col-lg-6">
                                 <select id="managers" name="manager" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="">Function Manager</option>
                                    <option value="19" selected="selected">Adan Brown</option>
                                    <option value="32">Saachi Katwe</option>
                                 </select>
                              </div>
                              <div class="col-md-6">
                                 <a href="../../banquet/function/new_staff.html">
                                 <button type="button" class="btn btn-primary">Add Manager</button></a>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px;">
                              <div class="col-lg-12">
                                 <h5>Any Kids</h5>
                              </div>
                              <div class="col-lg-6">
                                 <span class="badge badge-warning">Under 12 Years</span>     
                                 <input name="under_12_year" type="text" value="10" id="under_12_year" class="form-control tooltipstered">
                              </div>
                              <div class="col-lg-6">
                                 <span class="badge badge-warning">Under 5 Years</span>     
                                 <input name="under_5_year" type="text" value="5" id="under_5_year" class="form-control tooltipstered">
                              </div>
                           </div>
                           <!--it ends here -->            
                           <div class="form-group row" style="padding-top:10px;">
                              <div class="col-md-12">
                                 <button type="submit" class="btn btn-primary">Submit </button>
                                 <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                              </div>
                           </div>
                        </div>
                        <!--Booking Details Ends here -->           
                     </div>
                  </div>
                  <!--Booking Details Ends here -->            
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftTwo" role="tabpanel">
               <!-- Quaerat --> 
               <div class="tab-pane active" id="exampleTabsLeftTwo" role="tabpanel">
                  <div id="menu_details" class="tab-pane active">
                     <div>
                        <ul class="nav nav-tabs-horizontal">
                           <li class="nav-link active" style="padding: 10px;border-bottom: 1px solid #ddd !important;color: #1b0431;"><a href="#day1" data-toggle="tab" aria-expanded="true" class="active"><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 1</b></a></li>
                           <li class="" style="padding: 10px;"><a href="#day2" data-toggle="tab" aria-expanded="false" class=""><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 2</b></a></li>
                        </ul>
                        <div class="tab-content">
                           <div id="day1" class="tab-pane active">
                              <div class="row" style="padding: 20px;">
                                 <!-- 1 text here...  --> 
                              </div>
                              <h3 class="text-center">Casamento - 07/22/2019 (4:46 PM to 12:49 AM)</h3>
                              <form>
                                 <div class="col-lg-12 form-group" style="padding: 0;">
                                    <div class="example-wrap" style="margin-bottom: 0px;">
                                       <h4 class="example-title">Menu Types </h4>
                                       <div class="select2-primary">
                                          <select multiple="" id="menuType_veg_1" name="menuType_veg_1[]" class="form-control" data-plugin="select2" tabindex="-1" aria-hidden="true">
                                             <optgroup label="Birthday Party Menu">
                                                <option value="3">Menu Option 1</option>
                                                <option value="4">Menu Option 2</option>
                                             </optgroup>
                                             <optgroup label="Brunch Menu">
                                                <option value="5">The Brunch Buffet</option>
                                             </optgroup>
                                             <optgroup label="Ashlie Wedding">
                                                <option value="6">Begin with a Social Hour</option>
                                                <option value="7">Elegantly Plated Dinners</option>
                                                <option value="8">Grand Buffet Dinners</option>
                                                <option value="10" selected="selected">Bar Options</option>
                                                <option value="11">Hors d'oeuvre Reception</option>
                                             </optgroup>
                                             <optgroup label="Holly Loscig Menu">
                                                <option value="14">Builder a Burger</option>
                                             </optgroup>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 " style="padding: 0px;margin: 0px;">
                                    <h4 class="example-title">Sub Menu Items: *</h4>
                                 </div>
                                 <h5 style="padding-top: 10px;">MENU OPTION 1</h5>
                                 <div style="padding: 0px;" class="row">
                                    <div class="col-lg-10 ">
                                       <div>
                                          <div class="select2-primary">
                                             <select multiple="" id="menuItem_veg_10_1" name="menuItem_veg_10_1[]" class="form-control" data-plugin="select2" tabindex="-1" aria-hidden="true">
                                                <optgroup label="Open Bar">
                                                   <option value="41" selected="selected">Domestic Beer</option>
                                                   <option value="42">Wine</option>
                                                </optgroup>
                                                <optgroup label="Light Bar">
                                                   <option value="43">Domestic Beer</option>
                                                   <option value="44">Wine</option>
                                                   <option value="45">Juice</option>
                                                </optgroup>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                       <button type="button" class="btn btn-primary">Show Price</button>
                                    </div>
                                 </div>
                                 <h5>THE BRUNCH BUFFET</h5>
                                 <div class="row" style="padding: 0px;">
                                    <div class="col-lg-10 form-group">
                                       <div>
                                          <div class="select2-primary">
                                             <select id="service_type" name="service_type_1" class="form-control" data-plugin="select2" tabindex="-1" aria-hidden="true">
                                                <option value="">Select Service Type</option>
                                                <option value="4">Buffet</option>
                                                <option value="3">Cafeteria Services</option>
                                                <option value="2" selected="selected">Plated Services</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                       <button type="button" class="btn btn-primary">Show Price</button>
                                    </div>
                                 </div>
                                 <h5>BEGIN WITH A SOCIAL HOUR</h5>
                                 <div class="row" style="padding: 0px;">
                                    <div class="col-lg-10 form-group">
                                       <div>
                                          <div class="select2-primary">
                                             <select class="form-control" multiple="" data-plugin="select2" data-select2-id="39" tabindex="-1" aria-hidden="true">
                                                <option value="1" selected="" data-select2-id="41">Tortilla Chips With Salsa Dip</option>
                                                <option value="2">Potato Chips With Onion Dip</option>
                                                <option value="3" selected="" data-select2-id="42">Chicken Fingers With Assorted Dipping Sauces</option>
                                                <option value="4">Cheese &amp; Pepperoni Pizza</option>
                                                <option value="5">Regular and Decaffeinated Coffee</option>
                                                <option value="4"> Hot Tea</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                       <button type="button" class="btn btn-primary">Show Price</button>
                                    </div>
                                 </div>
                                 <h5>ELEGANTLY PLATED DINNERS</h5>
                                 <div class="row" style="padding: 0px;">
                                    <div class="col-lg-10 form-group">
                                       <div>
                                          <div class="select2-primary">
                                             <select class="form-control" data-plugin="select2" multiple="" data-plugin="select2" data-select2-id="39" tabindex="-1" aria-hidden="true">
                                                <option value="1" selected="" data-select2-id="41">Tortilla Chips With Salsa Dip</option>
                                                <option value="2">Potato Chips With Onion Dip</option>
                                                <option value="3" selected="" data-select2-id="42">Chicken Fingers With Assorted Dipping Sauces</option>
                                                <option value="4">Cheese &amp; Pepperoni Pizza</option>
                                                <option value="5">Regular and Decaffeinated Coffee</option>
                                                <option value="4"> Hot Tea</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                       <button type="button" class="btn btn-primary">Show Price</button>
                                    </div>
                                 </div>
                                 <h5>GRAND BUFFET DINNERS</h5>
                                 <div class="row" style="padding: 0px;">
                                    <div class="col-lg-10 form-group">
                                       <div>
                                          <div class="select2-primary">
                                             <select class="form-control " data-plugin="select2" multiple="" data-plugin="select2" data-select2-id="39" tabindex="-1" aria-hidden="true">
                                                <option value="1" selected="" data-select2-id="41">Tortilla Chips With Salsa Dip</option>
                                                <option value="2">Potato Chips With Onion Dip</option>
                                                <option value="3" selected="" data-select2-id="42">Chicken Fingers With Assorted Dipping Sauces</option>
                                                <option value="4">Cheese &amp; Pepperoni Pizza</option>
                                                <option value="5">Regular and Decaffeinated Coffee</option>
                                                <option value="4"> Hot Tea</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-2 form-group">
                                       <button type="button" class="btn btn-primary">Show Price</button>
                                    </div>
                                 </div>
                                 <h4 class="example-title">Service Type: *</h4>
                                 <div class="row" style="/* margin: auto; */">
                                    <div class="col-lg-6">
                                       <select class="form-control" data-plugin="select2" data-plugin="select2" data-select2-id="69" tabindex="-1" aria-hidden="true">
                                          <optgroup label="Please Select">
                                             <option value="R1" data-select2-id="71">Select Service Type</option>
                                             <option value="R1">Buffet</option>
                                             <option value="R1">Cafeteria Services</option>
                                             <option value="R1">Plated Services</option>
                                          </optgroup>
                                       </select>
                                    </div>
                                 </div>
                                 <h4 class="example-title">Table:*</h4>
                                 <div class="row" style="
                                    width: 55%;
                                    ">
                                    <div class="col-sm-2" style="
                                       ">
                                       <li class="mb-15" style="display: inline-table;">
                                          <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                          <label for="inputChecked" class="">Head Table</label>
                                       </li>
                                    </div>
                                    <div class="col-sm-02" style="padding: 0px;">
                                       <div class="row" style="/* margin-left: 5px; *//* display: inherit; *//* width: 100%; */">
                                          <div>
                                             <ul>
                                                <li style="display: inline;padding-right: 15px;">
                                                   <div class="iradio_flat-blue" style="position: relative;"><input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios" data-plugin="iCheck" data-radio-class="iradio_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                   <label for="inputRadiosChecked" style="padding: 2px;margin: 0px;">16</label>
                                                </li>
                                                <li style="display: inline; padding-right: 15px;">
                                                   <div class="iradio_flat-blue" style="position: relative;"><input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios" data-plugin="iCheck" data-radio-class="iradio_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                   <label for="inputRadiosChecked" style="padding: 2px;margin: 0px;">18</label>
                                                </li>
                                                <li class="mb-15" style="display: inline; padding-right: 15px;">
                                                   <div class="iradio_flat-blue" style="position: relative;"><input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios" data-plugin="iCheck" data-radio-class="iradio_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                   <label for="inputRadiosChecked" style="padding: 2px;margin: 0px;">20</label>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row" style="width: 55%;">
                                    <div class="col-sm-2">
                                       <li class="mb-15" style="display: inline-table;">
                                          <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                          <label for="inputChecked" class="">Dining Table</label>
                                       </li>
                                    </div>
                                    <div class="col-sm-02" style="padding: 0px;">
                                       <div class="row" style="/* margin-left: 5px; *//* display: inherit; *//* width: 100%; */">
                                          <div>
                                             <ul>
                                                <li style="display: inline;padding-right: 15px;">
                                                   <div class="iradio_flat-blue" style="position: relative;"><input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios" data-plugin="iCheck" data-radio-class="iradio_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                   <label for="inputRadiosChecked" style="padding: 2px;margin: 0px;">16</label>
                                                </li>
                                                <li style="display: inline; padding-right: 15px;">
                                                   <div class="iradio_flat-blue" style="position: relative;"><input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios" data-plugin="iCheck" data-radio-class="iradio_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                   <label for="inputRadiosChecked" style="padding: 2px;margin: 0px;">18</label>
                                                </li>
                                                <li class="mb-15" style="display: inline; padding-right: 15px;">
                                                   <div class="iradio_flat-blue" style="position: relative;"><input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios" data-plugin="iCheck" data-radio-class="iradio_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                   <label for="inputRadiosChecked" style="padding: 2px;margin: 0px;">20</label>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-9">
                                       <button type="button" class="btn btn-primary">Submit </button>
                                       <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                                    </div>
                                 </div>
                                 <!-- <h4 class="example-title">Service Type:*</h4> -->
                              </form>
                           </div>
                           <div id="day2" class="tab-pane">
                              <div class="row" style="padding: 20px;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftThree" role="tabpanel">
               <div>
                  <ul class="nav nav-tabs-horizontal">
                     <li class="nav-link active" style="padding: 10px;border-bottom: 1px solid #ddd !important;color: #1b0431;"><a href="#dayE1" data-toggle="tab" aria-expanded="true" class="active"><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 1</b></a></li>
                     <li style="padding: 10px;"><a href="#dayE2" data-toggle="tab" aria-expanded="false" class=""><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 2</b></a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="dayE1" class="tab-pane active">
                        <div class="row" style="padding: 20px;"></div>
                        <h3 class="text-center">Casamento - 07/22/2019 (4:46 PM to 12:49 AM)</h3>
                        <form>
                           <div class="row" style="padding-top: 10px;">
                              <div class="col-lg-6">
                                 <h4 class="example-title">Service Time</h4>
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="icon wb-time" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="Select Service Time" onchange="" name="service_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                    
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <h4 class="example-title">Canapes</h4>
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="icon wb-time" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="Select Canapes Time" onchange="" name="canapes1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                    
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 15px;">
                              <div class="col-lg-6">
                                 <h4 class="example-title">Bar open</h4>
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="icon wb-time" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="Select open Time" onchange="" name="bar_open1" type="text" value="09:43 PM" class="form-control timepicker tooltipstered">                    
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <h4 class="example-title">Bar close</h4>
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="icon wb-time" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="Select close Time" onchange="" name="bar_close1" type="text" value="12:43 AM" class="form-control timepicker tooltipstered">                    
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 15px;">
                              <div class="col-lg-6">
                                 <h4 class="example-title">Morning Snacks</h4>
                                 <div class="input-daterange" data-plugin="datepicker">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-calendar" aria-hidden="true"></i>
                                       </span>
                                       <input placeholder="Morning Snacks Start Time" onchange="" name="morning_start_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                    <div class="input-group">
                                       <span class="input-group-addon">to</span>
                                       <input placeholder="Morning Snacks End Time" onchange="" name="morning_end_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <h4 class="example-title">Morning Tea / Coffee</h4>
                                 <div class="input-daterange" data-plugin="datepicker">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-calendar" aria-hidden="true"></i>
                                       </span>
                                       <input placeholder="Morning Tea / Coffee Start Time" onchange="" name="mr_tea_start_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                    <div class="input-group">
                                       <span class="input-group-addon">to</span>
                                       <input placeholder="Morning Tea / Coffee End Time" onchange="" name="mr_tea_end_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 15px;">
                              <div class="col-lg-6">
                                 <h4 class="example-title">Lunch</h4>
                                 <div class="input-daterange" data-plugin="datepicker">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-calendar" aria-hidden="true"></i>
                                       </span>
                                       <input placeholder="Lunch Start Time" onchange="" name="lunch_start_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                    <div class="input-group">
                                       <span class="input-group-addon">to</span>
                                       <input placeholder="Lunch End Time" onchange="" name="lunch_end_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <h4 class="example-title">Afternoon Tea / Coffee</h4>
                                 <div class="input-daterange" data-plugin="datepicker">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-calendar" aria-hidden="true"></i>
                                       </span>
                                       <input placeholder="Afternoon Tea / Coffee Start Time" onchange="" name="af_tea_start_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                    <div class="input-group">
                                       <span class="input-group-addon">to</span>
                                       <input placeholder="Afternoon Tea / Coffee End Time" onchange="" name="af_tea_end_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top: 15px;">
                              <div class="col-lg-6">
                                 <h4 class="example-title">Evening Snacks</h4>
                                 <div class="input-daterange" data-plugin="datepicker">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-calendar" aria-hidden="true"></i>
                                       </span>
                                       <input placeholder="Evening Snacks Start Time" onchange="" name="evening_start_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                    <div class="input-group">
                                       <span class="input-group-addon">to</span>
                                       <input placeholder="Evening Snacks End Time" onchange="" name="evening_end_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <h4 class="example-title">Dinner</h4>
                                 <div class="input-daterange" data-plugin="datepicker">
                                    <div class="input-group">
                                       <span class="input-group-addon">
                                       <i class="icon wb-calendar" aria-hidden="true"></i>
                                       </span>
                                       <input placeholder="Dinner Start Time" onchange="" name="dinner_start_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                    <div class="input-group">
                                       <span class="input-group-addon">to</span>
                                       <input placeholder="Dinner End Time" onchange="" name="dinner_end_time1" type="text" value="06:26 PM" class="form-control timepicker tooltipstered">                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <h4 class="example-title">Service Type:*</h4> -->
                        </form>
                     </div>
                     <div id="dayE2" class="tab-pane">
                        <div class="row" style="padding: 20px;"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftFour" role="tabpanel">
               <div>
                  <ul class="nav nav-tabs-horizontal">
                     <li class="nav-link active" style="padding: 10px;border-bottom: 1px solid #ddd !important;color: #1b0431;"><a href="#dayEq1" data-toggle="tab" aria-expanded="true" class="active"><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 1</b></a></li>
                     <li style="padding: 10px;"><a href="#dayEq2" data-toggle="tab" aria-expanded="false" class=""><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 2</b></a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="dayEq1" class="tab-pane active">
                        <div class="row" style="padding: 20px;">
                           <!-- 1 text here... -->  
                        </div>
                        <h3 class="text-center">Casamento - 07/22/2019 (4:46 PM to 12:49 AM)</h3>
                        <form>
                           <div class="row" style="padding-top: 15px;">
                              <div class="col-sm-12" style="width:100%;/* background-color:#efedef; */padding: 10px;">
                                 <ul style="width: 100%;/* background-color: #eded; */padding-left: 1px;">
                                    <li style="display: inline-table;padding-right: 20px;">
                                       <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                       <label for="inputChecked">Dance Floor</label>
                                    </li>
                                    <li style="display: inline-table;padding-right: 20px;">
                                       <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                       <label for="inputChecked">LCD Projecter</label>
                                    </li>
                                    <li style="display: inline-table;padding-right: 20px;">
                                       <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                       <label for="inputChecked">Disc Jockey</label>
                                    </li>
                                    <li style="display: inline-table;padding-right: 20px;">
                                       <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                       <label for="inputChecked">Speakers</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- <h4 class="example-title">Service Type:*</h4> -->
                        </form>
                     </div>
                     <div id="dayEq2" class="tab-pane">
                        <div class="row" style="padding: 20px;">2 text here...</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftFive" role="tabpanel">
               <div>
                  <ul class="nav nav-tabs-horizontal">
                     <li class="nav-link active" style="padding: 10px;border-bottom: 1px solid #ddd !important;color: #1b0431;"><a href="#dayfc1" data-toggle="tab" aria-expanded="true" class="active"><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 1</b></a></li>
                     <li style="padding: 10px;"><a href="#dayfc2" data-toggle="tab" aria-expanded="false" class=""><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 2</b></a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="dayfc1" class="tab-pane active">
                        <div class="row" style="padding: 20px;"></div>
                        <h3 class="text-center">Casamento - 07/22/2019 (4:46 PM to 12:49 AM)</h3>
                        <form>
                           <div class="row">
                              <div class="col-lg-12 ">
                                 <h4 class="example-title">Caterers</h4>
                                 <select id="caterers" onchange="filterContractorCaterer(this.value,&quot;caterer&quot;,1)" name="caterers1" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="selected">Select Caterer</option>
                                    <option value="2">Ashlie Caterer</option>
                                    <option value="3">Unique Caterers</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top:20px">
                              <div class="col-lg-3">
                                 <h5>Packages:*</h5>
                                 <select name="decorator_packages1" onchange="showServices(this.value,&quot;decorator&quot;,&quot;1&quot;)" class="form-control ">
                                    <option value=""> -- Please Select --</option>
                                    <option value="6" selected="selected">Wedding Decoration(₵1,500)</option>
                                 </select>
                              </div>
                              <div class="col-lg-3">
                                 <h5>Services</h5>
                                 <div id="caterer_service1"><span class="badge badge-success">appetizers</span>
                                    <span class="badge badge-success">soups</span>
                                    <span class="badge badge-success">salads</span>
                                    <span class="badge badge-success">main course</span>
                                    <span class="badge badge-success">deserts</span>
                                    <span class="badge badge-success">cocktails</span>
                                    <span class="badge badge-success">drinks</span>
                                    <span class="badge badge-success">carving station</span>
                                    <span class="badge badge-success">appetizers</span>
                                    <span class="badge badge-success">soups</span>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <h5>Quoted Price / Dish:*</h5>
                                 <div tabindex="0" class="spinnerUi">
                                    <input placeholder="Quoted" min="0" name="decorator_price_quoted1" type="number" value="100" class="form-control tooltipstered">
                                    <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                 </div>
                              </div>
                              <div class="col-lg-3 form-group">
                                 <h5>Final  Price / Dish:*</h5>
                                 <div tabindex="0" class="spinnerUi">
                                    <input placeholder="Final" min="0" name="decorator_price_final1" type="number" value="200" class="form-control tooltipstered">
                                    <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12">
                                 <h4 class="example-title">Photographer</h4>
                                 <select id="photographers_id" onchange="filterContractor(this.value,&quot;photo&quot;,1)" name="photo1" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="selected">Select Photographer</option>
                                    <option value="2">COUNTRY CAMERA STUDIO</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px;">
                              <div class="col-lg-12">
                                 <h4 class="example-title">Decorator</h4>
                                 <select onchange="filterContractor(this.value,&quot;decorator&quot;,1)" name="decorator1" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="">Select decorator</option>
                                    <option value="2" selected="selected">IMAGINATIONS</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px;">
                              <div class="col-lg-3">
                                 <h4 class="example-title">Packages:*</h4>
                                 <select class="form-control select2-hidden-accessible" data-plugin="select2" data-select2-id="84" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Please Select">
                                       <option value="R1" data-select2-id="86">Wedding Decoration(₵1500)</option>
                                    </optgroup>
                                 </select>
                                 <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="85"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-q898-container"><span class="select2-selection__rendered" id="select2-q898-container" role="textbox" aria-readonly="true" title="Wedding Decoration(₵1500)">Wedding Decoration(₵1500)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                              </div>
                              <div class="col-lg-3">
                                 <h5>Services</h5>
                                 <div id="decorator_service1">
                                    <span class="badge badge-primary">Music</span>
                                    <span class="badge badge-primary">Flowers</span>
                                    <span class="badge badge-primary">Lights</span>
                                    <span class="badge badge-primary">Curtains</span>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <h5>Quoted Price:*</h5>
                                 <div tabindex="0" class="spinnerUi">
                                    <input type="text" class="form-control" data-plugin="asSpinner" value="0">
                                    <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <h5>Final  Price :*</h5>
                                 <div tabindex="0" class="spinnerUi">
                                    <input type="text" class="form-control" data-plugin="asSpinner" value="0">
                                    <div class="spinnerUi-control"><span class="spinnerUi-up"></span><span class="spinnerUi-down"></span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px">
                              <div class="col-lg-12">
                                 <h5>Entertainment</h5>
                                 <select onchange="filterContractor(this.value,&quot;entertain&quot;,1)" name="entertainment1" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="selected">Select Entertainment</option>
                                    <option value="2">BIGG ROMEO</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px">
                              <div class="col-lg-12">
                                 <h5>Other Services</h5>
                                 <div class="select2-primary">
                                    <select class="form-control select2-hidden-accessible" multiple="" data-plugin="select2" data-select2-id="90" tabindex="-1" aria-hidden="true">
                                       <option value="1" selected="" data-select2-id="92">HEAD FIRST  HAIR DESIGNS &amp; SALON</option>
                                       <option value="2">Test </option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="91">
                                       <span class="selection">
                                          <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                             <ul class="select2-selection__rendered">
                                                <li data-select2-id="93" title="HEAD FIRST  HAIR DESIGNS &amp; SALON" class="select2-selection__choice"><span class="select2-selection__choice__remove" role="presentation">×</span>HEAD FIRST  HAIR DESIGNS &amp; SALON</li>
                                                <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                                             </ul>
                                          </span>
                                       </span>
                                       <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                 </div>
                                 <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="88"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                              </div>
                           </div>
                           <div class="row" style="padding-top : 10px;">
                              <div class="col-lg-3">
                                 <h5>Test Packages :*</h5>
                                 <select class="form-control select2-hidden-accessible" data-plugin="select2" data-select2-id="94" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Please Select">
                                       <option value="R1" data-select2-id="96">Test(₵1500)</option>
                                    </optgroup>
                                 </select>
                                 <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="95"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-cf4u-container"><span class="select2-selection__rendered" id="select2-cf4u-container" role="textbox" aria-readonly="true" title="Test(₵1500)">Test(₵1500)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                              </div>
                              <div class="col-lg-3">
                                 <h5>Test Services</h5>
                                 <div id="decorator_service1">
                                    <span class="badge badge-primary">Water Supply</span>
                                    <span class="badge badge-primary">Generators</span>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <h5>HEAD FIRST HAIR DESIGNS &amp; SALON Packages  :*</h5>
                                 <select class="form-control select2-hidden-accessible" data-plugin="select2" data-select2-id="97" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Please Select">
                                       <option value="R1" data-select2-id="99"> Beauty Treats(₵1000)</option>
                                    </optgroup>
                                 </select>
                                 <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="98"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-b4uh-container"><span class="select2-selection__rendered" id="select2-b4uh-container" role="textbox" aria-readonly="true" title=" Beauty Treats(₵1000)"> Beauty Treats(₵1000)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>      
                              </div>
                              <div class="col-lg-3">
                                 <h5>HEAD FIRST HAIR DESIGNS &amp; SALON Services</h5>
                                 <div id="decorator_service1">
                                    <span class="badge badge-primary">Water Supply</span>
                                    <span class="badge badge-primary">Generators</span>
                                 </div>
                              </div>
                           </div>
                           <div class="row" style="padding-top:10px;">
                              <div class="col-md-9">
                                 <button type="submit" class="btn btn-primary">Submit </button>
                                 <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                              </div>
                           </div>
                           <!-- <h4 class="example-title">Service Type:*</h4> -->
                        </form>
                     </div>
                     <div id="dayfc2" class="tab-pane">
                        <div class="row" style="padding: 20px;"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftSix" role="tabpanel">
               <div class="row">
                  <div class="col-lg-6">
                     <h5>Deposit Amounts *</h5>
                     <input name="deposit_amounts" type="text" value="4000" id="deposit_amounts" class="form-control tooltipstered">
                  </div>
                  <div class="col-lg-6">
                     <h5>Deposit Due *</h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input id="deposit_date" placeholder="Select Due Date" name="deposit_date" type="text" value="25-07-2019" class="form-control tooltipstered">                    
                     </div>
                  </div>
               </div>
               <div class="row" style="padding-top:10px;">
                  <div class="col-lg-6">
                     <h5>2nd Deposit </h5>
                     <input name="2nd_deposit" type="text" value="3000" id="2nd_deposit" class="form-control tooltipstered">
                  </div>
                  <div class="col-lg-6">
                     <h5>2nd Deposit Due *</h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input id="deposit_2_date" placeholder="Select 2nd Due Date" name="deposit_2_date" type="text" value="31-07-2019" class="form-control tooltipstered">                    
                     </div>
                  </div>
               </div>
               <div class="row" style="padding-top:10px;">
                  <div class="col-lg-6">
                     <h5>Balance Due Date </h5>
                     <input id="balance_due_date" placeholder="Select Balance Due Date" name="balance_due_date" type="text" value="31-08-2019" class="form-control tooltipstered">
                  </div>
                  <div class="col-lg-6">
                     <h5>Deposite Date </h5>
                     <select id="deposit_type" name="deposit_types" class="form-control " tabindex="-1" aria-hidden="true">
                        <option value="">Select Deposit Type</option>
                        <option value="3" selected="selected">Card</option>
                        <option value="4">Cash</option>
                        <option value="5">Cheque</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-12" style="padding-top: 10px;padding-left: 0px;">
                  <button type="submit" class="btn btn-primary">Submit </button>
                  <button type="reset" class="btn btn-default btn-outline">Cancel</button>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftSeven" role="tabpanel">
               <div>
                  <ul class="nav nav-tabs-horizontal">
                     <li class="nav-link active" style="padding: 10px;border-bottom: 1px solid #ddd !important;color: #1b0431;"><a href="#dayGP1" data-toggle="tab" aria-expanded="true" class="active"><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 1</b></a></li>
                     <li style="padding: 10px;"><a href="#dayGP2" data-toggle="tab" aria-expanded="false" class=""><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 2</b></a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="dayGP1" class="tab-pane active">
                        <div class="row" style="padding: 20px;">
                        </div>
                        <h3 class="text-center">Casamento - 07/22/2019 (4:46 PM to 12:49 AM)</h3>
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <h5>Company</h5>
                                 <select name="guest_pick_1" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="">Select Transportation Service</option>
                                    <option value="2" selected="selected">J &amp; J Luxury Transportation</option>
                                    <option value="3">WGM Taxi Transportation</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top:15px;">
                              <div class="col-lg-12">
                                 <h5 class="example-title">Van Choice</h5>
                                 <input name="van_choice_1" type="text" value="nano" class="form-control tooltipstered">
                              </div>
                           </div>
                           <div class="row" style="padding-top:15px;">
                              <div class="col-lg-6">
                                 <div>
                                    <h5>Staff Choice  </h5>
                                    <div class="select2-primary">
                                       <select multiple="" id="staff_choice" name="staff_choice_1[]" class="form-control " tabindex="-1" aria-hidden="true">
                                          <option value="">Team leader</option>
                                          <option value="18">David Felming (Field Marketing)</option>
                                          <option value="19" selected="selected">Adan Brown (Banquet Manager)</option>
                                          <option value="32">Saachi Katwe (Banquet Manager)</option>
                                       </select>
                                       <h4 class="example-title">+ Add Value</h4>
                                       </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 form-group">
                                 <h4 class="example-title">Hotels &amp; Rooms</h4>
                                 <select id="hotelName" onchange="filterRoom(this.value,1)" name="hotelName_1" class="form-control" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="selected">Select Hotel</option>
                                    <option value="3">Courtyard by</option>
                                    <option value="4">Hampton Inn Philadelphia Center</option>
                                    <option value="5">Maarten Kamerling</option>
                                 </select>
                              </div>
                           </div>
                           <div class="row" style="padding-top:15px;">
                              <div class="col-lg-12">
                                 <h5>Address</h5>
                                 <input name="function_address_1" type="text" value="asdas" class="form-control tooltipstered">
                              </div>
                           </div>
                           <div class="form-group row" style="padding-top:15px">
                              <div class="col-md-12">
                                 <button type="submit" class="btn btn-primary">Update </button>
                                 <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                              </div>
                           </div>
                           <!-- <h4 class="example-title">Service Type:*</h4> -->
                        </form>
                     </div>
                     <div id="dayGP2" class="tab-pane">
                        <div class="row" style="padding: 20px;">2 text here...</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftEight" role="tabpanel">
               <div>
                  <ul class="nav nav-tabs-horizontal">
                     <li class="nav-link active" style="padding: 10px;border-bottom: 1px solid #ddd !important;color: #1b0431;"><a href="#dayVP1" data-toggle="tab" aria-expanded="true" class="active"><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 1</b></a></li>
                     <li style="padding: 10px;"><a href="#dayVP2" data-toggle="tab" aria-expanded="false" class=""><i class="icon fa-hourglass-start"></i><b style="padding-left: 5px;">Day 2</b></a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="dayVP1" class="tab-pane active">
                        <div class="row" style="padding: 20px;">
                        </div>
                        <h3 class="text-center">Casamento - 07/22/2019 (4:46 PM to 12:49 AM)</h3>
                        <form>
                           <div class="row" style="padding-top:10px;">
                              <div class="col-lg-12">
                                 <h5>Valet Parking</h5>
                                 <select name="parking_1" class="form-control " tabindex="-1" aria-hidden="true">
                                    <option value="">Select parking Service</option>
                                    <option value="4">aldrin</option>
                                    <option value="3" selected="selected">Global Parking</option>
                                    <option value="2">Valet Parking</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row" style="padding-top:15px">
                              <div class="col-md-12">
                                 <button type="button" class="btn btn-primary">Update </button>
                                 <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                              </div>
                           </div>
                           <!-- <h4 class="example-title">Service Type:*</h4> -->
                        </form>
                     </div>
                     <div id="dayVP2" class="tab-pane">
                        <div class="row" style="padding: 20px;">2 text here...</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="exampleTabsLeftNine" role="tabpanel">
               <h5>Mesage</h5>
               <div class="md-editor" id="1597213438359">
                  <div class="md-header btn-toolbar">
                     <div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B"><span class="fa fa-bold"></span> </button><button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="fa fa-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="fa fa-header"></span> </button></div>
                     <div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="fa fa-link"></span> </button><button class="btn-default btn-sm btn" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="fa fa-picture-o"></span> </button></div>
                     <div class="btn-group"><button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="fa fa-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="fa fa-list-ol"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="fa fa-code"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="fa fa-quote-left"></span> </button></div>
                     <div class="btn-group"><button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="fa fa-search"></span> Preview</button></div>
                     <div class="md-controls"><a class="md-control md-control-fullscreen" href="#"><span class="fa fa-expand"></span></a></div>
                  </div>
                  <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="11" class="md-input" style="resize: none;">### Heading is here

Lorem ipsum dolor sit amet, ****consectetur adipisicing elit****consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud &lt;u&gt;Exercitation&lt;/u&gt; ullamco laboris nisi ut aliquip ex ea commodo consequat.

*   list text here
*   list text here
*   1.  list text here
    2.  list text here
    3.  list text here
*   list text here

#### Title

laboris nisi ut aliquip ex ea commodo consequat [link is here](http://www.github.com)(http://www.github.com)</textarea>
                  <div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen" title="Exit fullscreen"><span class="fa fa-compress"></span></a></div>
               </div>
               <div class="form-group row" style="padding-top:15px">
                  <div class="col-md-12">
                     <button type="button" class="btn btn-primary">Update </button>
                     <button type="reset" class="btn btn-default btn-outline">Cancel</button>
                  </div>
               </div>
            </div>
            <div class="row" style="/* margin: auto; */padding-top: 30px;">
               <div class="col-md-6">
                  <button type="button" class="btn btn-default btn-outline" style="width: 20%;">Previous</button>
               </div>
               <div class="col-md-6">  
                  <button type="reset" class="btn btn-primary" style="float: right; width: 20%;">Next</button>
               </div>
            </div>
         </div>
      </div>
      </p>
   </div>
</div>
 </div>
@endsection
	