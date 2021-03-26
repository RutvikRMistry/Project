@extends('backend.master')
@section('title',"Reservation")
@section('content')
 <!-- Top Menubar Ends Here-->
<div class="page">
     @include('backend.partials.leftbar.shortcuts')   	
	
      <div class="page-main">
        <div class="page-header"style="height: 5px;" >
          <h1 class="page-title">Create Reservation</h1>
         
           <div class="page-header-actions"style="height: 5px;">
              <a href="{{route('backend.admin.frontdesk.reservation')}}">
           <button type="button" class="btn btn-primary" > Reservation List</button></a>
        </div>
        </div>

     
              <div style="width: 100%; padding: 30px;"> 
          <div class="panel-body" style="background-color: #fff; ">
                      <div class="examm">
    <form action="{{route('backend.admin.reservation.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
          <div class="row">
            <div class="col-lg-3">
               <label><strong>Guest</strong> <strong class="text-danger">*</strong></label>
               <a href="{{route('backend.admin.frontdesk.guest.create')}}" target="_blank" class="float-right"><i class="fa fa-plus"></i> add new</a>
                    <select  data-plugin="select2" id="guest" name="guest" class="form-control ">
                     <option value="">--Select--</option>
                                    @foreach($guests as $guest)
                                        <option value="{{$guest->id}}"{{old('guest') == $guest->id?'selected':''}} >{{$guest->full_name}}</option>
                                    @endforeach
                                </select>
                              <span class="text-danger">{{$errors->first('guest')}}</span>
                  </div>
            <div class="col-lg-3">
               <label><strong>Room</strong> <strong class="text-danger">*</strong></label>
                    <select data-plugin="select2" id="room_type" name="room_type" class="form-control ">
                       <option value="">--Select--</option>
                                    @foreach($room_types as $room_type)
                                        <option value="{{$room_type->id}}" {{old('room_type') == $room_type->id?'selected':''}}>{{$room_type->title}}</option>
                                    @endforeach
                                </select>
								<span class="text-danger">{{$errors->first('room_type')}}</span>
                  </div>
            <div class="col-lg-3">
               <label><strong>Adult</strong> </label>
                    <input type="text" class="form-control" data-plugin="asSpinner" name="adults" placeholder="0" value="{{old('adults')}}"/>
					<span class="text-danger">{{$errors->first('adults')}}</span>
                  </div>
            <div class="col-lg-3">
               <label><strong>Kids</strong></label>
                    <input type="text" class="form-control" data-plugin="asSpinner" name="kids" placeholder="0" value="{{old('kids')}}" />
					<span class="text-danger">{{$errors->first('kids')}}</span>
                  </div>
              </div>
              <br>
           <div class="row">

            <div class="col-lg-6">
                        <label class="form-control-label" for="inputCVV">Check In <strong class="text-danger">*</strong></label>
						<input type="text" class="form-control" name="check_in" id="check_in" placeholder="YYYY/MM/DD"  />
						<span class="text-danger">{{$errors->first('check_in')}}</span>
            </div>
            <div class="col-lg-6">
                        <label class="form-control-label" for="inputCVV">Check Out <strong class="text-danger">*</strong></label>
						<input type="text" class="form-control"name="check_out" id="check_out"  placeholder="YYYY/MM/DD"   />
							<span class="text-danger">{{$errors->first('check_out')}}</span>
			</div>
           </div>  
           <br>

          
          <!-- End Panel Basic -->
                <div class="row" >
                  <div class="col-md-6 col-xl-3">
                    <div class="pricing-list">
                      <div class="pricing-header">
                        <div class="pricing-title bg-blue-600">Rooms</div>
                        
                      </div>
                      <ul class="pricing-features">
                        <li>
                          <strong>0</strong> </li>

                      </ul>
                       </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="pricing-list">
                      <div class="pricing-header">
                         <div class="pricing-title bg-blue-600">Adult</div>
                        
                      </div>
                      <ul class="pricing-features">
                        <li>
                          <strong>0</strong> </li>

                      </ul>
                       </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="pricing-list">
                      <div class="pricing-header">
                        <div class="pricing-title bg-blue-600">Kids</div>
                        
                      </div>
                      <ul class="pricing-features">
                        <li>
                          <strong>0</strong> </li>

                      </ul>
                       </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="pricing-list">
                      <div class="pricing-header">
                         <div class="pricing-title bg-blue-600">Nights</div>
                        
                      </div>
                      <ul class="pricing-features">
                        <li>
                          <strong>0</strong> </li>

                      </ul>
                       
                    </div>
                  </div>
                </div>




                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Reference no</th>
                        <th>Total Tax</th>
                        <th>Date</th>
                        <th>Available Room</th>
                        <th>Status</th>
                        <th>Total Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="javascript:void(0)">Order #26589</a></td>
                        <td>1</td>
                        <td>
                          <span class="text-muted"><i class="wb wb-time"></i> Oct 16, 2018</span>
                        </td>
                        <td>2</td>
                        <td>
                          <div class="badge badge-table badge-success">Paid</div>
                        </td>
                        <td>$45.00</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #58746</a></td>
                        <td>1</td>
                        <td>
                          <span class="text-muted"><i class="wb wb-time"></i> Oct 12, 2018</span>
                        </td>
                        <td>3</td>
                        <td>
                          <div class="badge badge-table badge-info">Shipped</div>
                        </td>
                        <td>$38.00</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #98458</a></td>
                        <td>1</td>
                        <td>
                          <span class="text-muted"><i class="wb wb-time"></i> May 18, 2018</span>
                        </td>
                        <td>4</td>
                        <td>
                          <div class="badge badge-table badge-primary">Shipped</div>
                        </td>
                        <td>$38.00</td>
                      </tr>
                      <tr>
                        <td><a href="javascript:void(0)">Order #32658</a></td>
                        <td>1</td>
                        <td>
                          <span class="text-muted"><i class="wb wb-time"></i> Apr 28, 2018</span>
                        </td>
                        <td>5</td>
                        <td>
                          <div class="badge badge-table badge-info">Paid</div>
                        </td>
                        <td>$77.99</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
             
                <div class="row" >
                        <div class="col-md-9">
                        <button class="btn btn-outline-tsk float-left"><i class="fa fa-refresh"></i> Reset</button>
                         <button class="btn btn-tsk float-right"><i class="fa fa-arrow-right"></i> Next</button>                        </div>
                      </div>
	</form>

</div>
</div>
        </div>
           
          </div>
       
</div>
<script src="http://hotels.kintudesigns.com/assets/plugin/vue/vue.js"></script>
<script type="text/javascript">
        var app = new Vue({
            el: '#app',
            data: {
                next:1,
                room_type_info:{},
                form:{
                    tax:[]
                },
                errors:new FormErrors()
            },
            watch:{
                'form.guest':function (val) {
                    let $this = this;
                    $this.form.guest_text =val===''?'': $("#guest option:selected").text();
                },
              'form.room_type':function (val) {

                  let $this = this;
                  $this.form.room_type_text =val===''?'': $("#room_type option:selected").text();
                  this.errors.clear('adults');
                  this.errors.clear('kids');
                  this.errors.clear('night_list');
                  this.form.night_list=[];
                  this.form.total_night_price=0;
                  this.form.kids = 0;
                  this.form.adults = 0;
                  this.form.check_in = '';
                  this.form.check_out = '';
                  this.disableDates =[];
                    axios.get('{{route('backend.admin.reservation.get_room_type_details')}}',{
                        params:{
                            room_type:val
                        }
                    }).then(res=>{
                        let data = {};
                        if(res.data.status === 'ok'){
                            data = res.data.room_type;
                            this.disableDates = res.data.booking_date;
                            var datepicker = $('#check_in');
                            datepicker.datepicker().destroy();
                            datepicker.datepicker(this.setCheckInConfig(res.data.booking_date));
                            console.log(res.data.booking_date);
                            this.form.adults = 1;
                        }else if(res.data.status === 'error'){
                            data = {};
                        }
                        $this.room_type_info = data;
                        // console.log( this.room_type_info);
                    })
              },
                'form.adults':function (val,old_val) {
                    if(!this.isEmpty(this.room_type_info)){
                        this.roomCalculate();
                    }

                },
                'form.kids':function (val,old_val) {
                    if(!this.isEmpty(this.room_type_info)){
                        this.roomCalculate();
                    }
                },
                'form.number_of_room':function (val,old_val) {
                    var $this = this;
                    var total_price = 0;
                    this.form.night_list.forEach(function (item, index) {
                        $this.setRoomIndex(index);

                        total_price =total_price + $this.form.night_list[index]['total_price'];
                    });
                    this.form.total_night_price = total_price;
                }
            },
            computed: {
                totalTax() {
                    return this.form.tax.reduce((total, item) => {
                        return total + Number(item.value);
                    }, 0);
                },

            },
            mounted:function(){
                var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                var $this = this;
                $this.resetForm();
                $('#check_in').datepicker(this.setCheckInConfig([]));
               $('#check_out').datepicker(this.setCheckOutConfig([]));
            },
            methods:{

                letsNext(){
                    let error_msg = {};
                    if(this.form.guest === ''){
                        error_msg.guest = ['Guest is required'];
                    }
                    if(this.form.room_type === ''){
                        error_msg.room_type = ['Room type is required'];
                    }
                    if(this.form.adults === ''){
                        error_msg.adults = ['Adults type is required'];
                    }
                    if(this.form.check_in === ''){
                        error_msg.check_in = ['Check in type is required'];
                    }
                    if(this.form.check_out === ''){
                        error_msg.check_out = ['Check out type is required'];
                    }

                    if(this.isEmpty(error_msg)){
                      this.next =2;
                    }else{
                        this.errors.record(error_msg);
                    }
                },
                setCheckInConfig:function(disableDates){
                    var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                    var $this =this;
                    return {
                        uiLibrary: 'bootstrap4',
                            format: 'yyyy/mm/dd',
                        iconsLibrary: 'fontawesome',
                         modal: true,
                        minDate: today,
                        disableDates:  disableDates,
                        change:function (el) {
                            $this.errors.clear('check_in');
                            $this.errors.clear('check_out');
                            $this.errors.clear('night_list');
                            var max_checkout_date = '';
                            let check_in = this.value;
                            if( $this.form.room_type === ''){
                                toastr.error('Must select room type');
                                check_in ='';
                                $('#check_in').val('');
                                $('#check_out').val('');
                            }else{
                                axios.get('{{route('backend.admin.reservation.get_checkout_available_date')}}',{
                                    params: {
                                        check_in_date:$('#check_in').val(),
                                        room_type:$this.form.room_type
                                    }
                                }).then(res=>{
                                    console.log(res.data);
                                    max_checkout_date = res.data.max_date;

                                    var datepicker = $('#check_out');
                                    datepicker.datepicker().destroy();
                                    datepicker.datepicker($this.setCheckOutConfig(res.data.max_date));
                                });

                            }
                            $this.form.check_in =check_in ;
                        }
                    }
                },
                setRoomIndex:function(index){
                    var room = [];
                    var option =this.form.night_list[index]['room_option'];
                    option.slice(0,this.form.number_of_room).forEach(function (it,ind) {
                        room.push(it.id);
                    });
                    this.form.night_list[index]['room'] = room;
                    this.form.night_list[index]['room_qty'] = room.length;
                    this.form.night_list[index]['total_price'] = this.form.night_list[index]['price']*this.form.night_list[index]['room_qty'];
                },
                roomCompleteStatus:function(){
                    let status = true;
                    let $this = this;
                    if(!this.isEmpty(this.form.night_list)) {
                        this.form.night_list.forEach(function (it, ind) {
                            if (it.room.length !== $this.form.number_of_room) {
                                status = false;
                            }
                        });
                    }
                    return status;
                },
                toggalCheckNight:function(index,id){
                    var r = this.form.night_list[index]['room'].indexOf(id);
                    if (r !== -1) {
                        this.form.night_list[index]['room'].splice(r, 1);
                    }else{
                        this.form.night_list[index]['room'].push(id)
                    }
                    var room = this.form.night_list[index]['room'];
                    this.form.night_list[index]['room_qty'] = room.length;
                    this.form.night_list[index]['total_price'] = this.form.night_list[index]['price']*room.length;
                },
                setCheckOutConfig:function(max_date){
                    var $this =this;
                    return {
                        uiLibrary: 'bootstrap4',
                        format: 'yyyy/mm/dd',
                        iconsLibrary: 'fontawesome', modal: true,
                        theme:'green',
                        minDate: function () {
                            return $('#check_in').val();
                        },
                        maxDate: max_date,
                        change:function (el) {
                            $this.errors.clear('check_in');
                            $this.errors.clear('check_out');
                            $this.errors.clear('night_list');
                            let check_out = this.value;
                            if( $this.form.check_in === ''){
                                toastr.error('Must select check in');
                                check_out ='';
                                $('#check_out').val('')
                            }
                            if(check_out !== ''){
                                axios.get('{{route('backend.admin.reservation.get_night_calculation')}}',{
                                    params: {
                                        check_in:$this.form.check_in,
                                        check_out:$('#check_out').val(),
                                        room_type:$this.form.room_type,
                                        number_of_room:$this.form.number_of_room
                                    }
                                }).then(res=>{
                                    $this.form.night_list = res.data.data.night_list;
                                    $this.form.total_night = res.data.data.total_night;
                                    $this.form.total_night_price = Number(res.data.data.total_price);

                                })
                            }
                            $this.form.check_out =check_out ;
                        }
                    }
                },
                createData:function (e) {
                    axios.post('{{route('backend.admin.reservation.store')}}',this.form).then(res => {
                        if(res.data.status === 'ok'){
                            this.resetForm();
                            toastr.success(res.data.message);
                            location.replace(res.data.url);
                        }else{
                            toastr.error(res.data.message);
                        }
                    }).catch(error=>{
                        this.errors.record(error.response.data.errors);
                    });
                },
                taxCalculate:function(tax){

                    if(tax.type === 'PERCENTAGE'){
                        let total_amount = this.form.total_night_price;
                        return total_amount?(total_amount*tax.rate)/100:0;
                    }else if(tax.type === 'FIXED'){
                        return  tax.rate;
                    }
                    return 0;
                },
                calculateCoupon:function(){
                    if(this.form.apply_coupon){
                        if(this.form.coupon.type === 'PERCENTAGE'){
                            let total_amount = this.form.total_night_price;
                          return (total_amount*this.form.coupon.value)/100;
                        }else if(this.form.coupon.type === 'FIXED'){
                            return  this.form.coupon.value;
                        }
                    }
                    return 0;
                },
                applyCouponCode:function(){

                    axios.get('{{route('backend.admin.reservation.apply_coupon')}}',{
                        params:{
                            coupon_code:this.form.coupon_code,
                            guest:this.form.guest,
                            amount:this.form.total_night_price
                        }
                    }).then(res => {
                        if(res.data.status === 'ok'){
                           this.form.apply_coupon = true;
                           this.form.coupon = res.data.data;
                            this.errors.clear();
                            toastr.success(res.data.message);
                        }else{
                            this.errors.clear();
                            toastr.error(res.data.message);
                        }

                    }).catch(error=>{
                        this.errors.record(error.response.data.errors);
                    });
                },
                roomCalculate:function(){
                    var adults_room =Math.ceil( this.form.adults/this.room_type_info.higher_capacity);
                    adults_room = adults_room>0?adults_room:1;
                    var kids_room =Math.ceil( this.form.kids/this.room_type_info.kids_capacity);
                    kids_room = kids_room>0?kids_room:1;
                    if(adults_room > kids_room){
                        this.form.number_of_room = adults_room;
                    }else{
                        this.form.number_of_room = kids_room;
                    }
                },
                totalAmount:function () {
                    return this.form.total;
                },
                resetForm:function () {
                    this.next=1;
                    this.room_type_info={};
                    this.form = {
                        number_of_room:0,
                        guest:'',
                        guest_text:'',
                        room_type:'',
                        room_type_text:'',
                        kids:0,
                        adults:0,
                        check_in:'',
                        check_out:'',
                        night_list:[],
                        total_night:0,
                        total_night_price:0,
                        total_amount:this.totalAmount(),
                        total_tax:0,
                        discount_coupon:0,
                        tax:@php echo $tax->toJson() ; @endphp,
                        apply_coupon:false,
                        coupon:{},
                        coupon_code:''
                    };
                    this.errors.clear();
                },
                isEmpty(obj) {
                    return Object.keys(obj).length === 0;
                }
            }
        });
    </script>
@endsection














