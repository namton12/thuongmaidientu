@extends('client.layout.master')
@section('title')
Đặt Hàng
@endsection
@section('content')
<div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>GIỎ <span>HÀNG </span></h3>
            <!--/w3_short-->
                 <div class="services-breadcrumb">
                        <div class="agile_inner_breadcrumb">

                           <ul class="w3_short">
                                <li><a href="/">Trang chủ</a><i>|</i></li>
                                <li>Đặt hàng</li>
                            </ul>
                         </div>
                </div>
       <!--//w3_short-->
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                            <div class="vertical_post check_box_agile">
                                <h2 style="color:red"><i class="fa fa-map-marker"></i>Địa Chỉ Giao Hàng</h2>
                              <a href="#address" style="float: right;" data-toggle="modal">Thay đổi >></a>
                                <div class="checkbox">
                                    <div class="check_box_one cashon_delivery">
                                        <label class="anim">
                                            @if(count($user->customers)>0)
                                           <ul style="list-style: none;">
                                            @foreach($user->customers as  $key => $cus)
                                               <li>
                                                   <input type="radio" name="address" class="checkbox" style="float:left; ">
                                                       <span style="float:left">
                                                           <i class="phone{{$key}}">{{$user->name}}</i> | <i class="name{{ $key }}">{{$cus->phone}}</i>
                                                           <p class="address{{$key}}">{{$cus->address}}</p>
                                                       </span>
                                                   </input>
                                               </li>
                                               @endforeach
                                           </ul>    
                                           @else
                                           {{'Bạn Chưa Thêm Địa Chỉ Nhận Hàng'}}
                                           @endif
                                       </label>
                                    </div>

                                </div>
                            </div>
                        </div>

    </div>
    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);margin-top: 10px;">

                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                            <div class="vertical_post check_box_agile">
                                <h2 style="color:red"  ><i class="fa fa-truck"></i>Phương Thức Vận Chuyển</h2>
                              
                                <div class="checkbox">
                                <div class="check_box_one cashon_delivery">
                                    <label class="anim">
                                        <input type="checkbox" class="checkbox" checked style="float: left;">
                                        <span style="float: left;">
                                            Chuyển phát tiêu chuẩn
                                            <p>Dự kiến giao hàng sau 3-4 ngày</p>
                                        </span>
                                        <span style="float: right; margin-left: 500px;">{{ number_format('20000') }} VNĐ</span>
                                    </label>
                                </div>
                            </div>
                            </div>
                        </div>

    </div>
    </div>
    <div class="col-sm-4">
      
        <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">

                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                            <div class="vertical_post check_box_agile">
                                <h2 style="color:red" align="center"><i class="fa  fa-shopping-cart"></i> Thông Tin Đơn Hàng</h2>
                                <div class="checkbox" >
                                    <div class="check_box_one cashon_delivery">
                                        <label class="anim">
                                            <p style="float: left;">Tổng Tiền :</p>
                                            <p style="margin-left: 10px;float: left;">{{number_format($price)}}</p>
                                        </label>
                                        <label class="anim">
                                            <p style="float: left;">Phí Vận Chuyển :</p>
                                            <p style="margin-left: 10px;float: left;">{{number_format($price)}}</p>
                                        </label>

                                    </div>

                                </div>
                            </div>
                        </div>

                        
    </div>
      <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193); margin-top: 10px;">
                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                        <div class="vertical_post check_box_agile">
                            <div class="checkbox">
                                <div class="check_box_one cashon_delivery">
                                    <label class="anim">
                                        <h2 align="center" style="color: red"><i class="fa  fa-comments"></i> Ghi Chú</h2>
                                        <div class="form-group">
                                            <textarea style="width: 247px;" class="note" placeholder="Bạn có nhắn gì tới shop không?" rows="4" maxlength="1000"></textarea>
                                        </div>
                                        
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);margin-top:10px;" >

                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                            <div class="vertical_post check_box_agile">
                                
                                <div class="checkbox" >
                                    <div class="check_box_one cashon_delivery">
                                        <label class="anim">
                                            <p style="float: left;font-weight: bold;">Tổng Thanh Toán:</p>
                                            <p style="margin-left: 10px;float: left;">{{number_format($price+20000)}}</p>
                                        </label></br>
                                        <label class="anim" align="center">
                                            <button class="btn submit check_out">Tiến Hành Thanh Toán </button>
                                        </label>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

    </div>

</div>

       <div class="modal fade" id="address" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body modal-body-sub_agile">
                        <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Thay Đổi Địa Chỉ Giao Hàng</h3>
                                    <form  method="post">
                                        @csrf
                            <div class="styled-input">
                                <input type="text" name="email" required="" value="{{$user->email ??''}}" class="form-control email">
                                <label>Email</label>
                                <span></span>
                                
                                  <label class="col-form-label errorEmail" style="color: red;"></label>
                              
                            </div> 
                            
                             <div class="styled-input agile-styled-input-top">
                                <input type="text" name="phone" required="" class="form-control phone">
                                <label class="col-form-label">Số Điện Thoại</label>
                                <span></span>
                                <label class="col-form-label errorPhone" style="color: red;"></label>
                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="address" required="" class="form-control address">
                                <label >Địa Chỉ</label>
                                <span></span>
                               <label class="col-form-label errorAddress" style="color: red;"></label>
                            </div>
                             <div class="form-group">
                            <input type="checkbox" class="actives  " name="active" checked >
                            <label class="" for="customControlAutosizing" >Dùng địa chỉ này cho các đơn hàng sau</label>
                        </div>
                           
                            <button type="button" class="btn btn-primary form-control addAdress ">Save</button>
                        </form>
                          
                                                        

                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <img src="assets/client/images/log_pic.jpg" alt=" "/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
@endsection