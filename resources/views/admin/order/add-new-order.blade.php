<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDS - Stock Distribution System | Product List</title>
    @include('include.head')
    <style>
    .clr-white{
        background: #ffffff !important;
    }
    </style>
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('include.header')

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="{{asset('public/images/avatar-3.jpg')}}" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('public/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('public/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('public/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('public/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="{{asset('public/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{asset('public/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="feather icon-navigation"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('include.admin-navbar')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>SDS - Stock Distribution System</h4>
                                                    {{-- <span>Printable version of the DataTable</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="{{route('admin.admin-dashboard')}}">Dashboard</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="">Order Add</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- HTML (DOM) Sourced Data table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add New Order</h5>
                                                        {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                                                    </div>
                                                        <div class="card-block">
                                                            <div class="j-wrapper j-wrapper-640">
                                                                <form action="{{route('admin-order.add-new-order-action')}}" method="POST" class="j-pro" id="j-pro" novalidate>
                                                                    @csrf
                                                                    <div class="j-content">
                                                                            <div class="j-row">
                                                                                <div class="j-span6 j-unit">
                                                                                    <label class="j-label">Order date</label>
                                                                                    <div class="j-input">
                                                                                        <label class="j-icon-right" for="date"><i class="icofont icofont-ui-calendar"></i> </label>
                                                                                        <input type="text" id="date" name="date" readonly="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="j-span6 j-unit">
                                                                                    <label class="j-label">Client</label>
                                                                                    <div class="j-input">
                                                                                        <label class="j-icon-right" for="client"><i class="icofont icofont-caret-down"></i></label>
                                                                                        {{-- <input type="text" id="phone" name="phone"> --}}
                                                                                        <select name="client" id="client" class="clr-white">
                                                                                            <option value="">Choose Client</option>
                                                                                            @foreach ($clients as $client)
                                                                                                <option value="{{$client->id}}">{{$client->name." - (".$client->user_type.")"}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-row">
                                                                                <div class="j-span12 j-unit">
                                                                                    <label class="j-label">Product</label>
                                                                                    <div class="j-input">
                                                                                        <label class="j-icon-right" for="product"><i class="icofont icofont-caret-down"></i></label>
                                                                                        <select name="product" id="product" class="clr-white">
                                                                                            <option>Choose Product</option>
                                                                                            @foreach ($products as $product)
                                                                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <div class="j-divider j-gap-bottom-25"></div>
                                                                        <div class="j-row">
                                                                            <div class="j-span12 j-unit">
                                                                                <label class="j-label">Order Table</label>
                                                                                <table class="table table-striped table-bordered nowrap table-hover">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Product</th>
                                                                                            <th>Code</th>
                                                                                            <th>Price</th>
                                                                                            <th>Quantity</th>
                                                                                            <th>Discount</th>
                                                                                            <th>Tax</th>
                                                                                            <th>SubTotal</th>
                                                                                            {{-- <th>Action</th> --}}
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr id="table">
                                                                                            <td><input type="text"  name="p_name" id="p_name" style="background:#dddada00; border-style:hidden; padding:9px 0px; height:0px; color:#646161" readonly></td>
                                                                                            <td><input type="text"  name="p_code" id="p_code" style="background:#dddada00; border-style:hidden; padding:9px 0px; height:0px; color:#646161" readonly></td>
                                                                                            <td><input type="text"  name="p_price" id="p_price" style="background:#dddada00; border-style:hidden; padding:9px 0px; height:0px; color:#646161" readonly></td>
                                                                                            <td><input type="number" step="1" value="1" name="p_quantity" id="p_quantity" style="background:#fff; border:1px solid rgba(0, 0, 0, .12); border-radius:3px; box-sizing:border-box; padding:10px 3px; height:0px; color:#646161"></td>
                                                                                            <td><input type="number" value="0" name="p_discount" id="p_discount" style="background:#fff; border:1px solid rgba(0, 0, 0, .12); border-radius:3px; box-sizing:border-box; padding:10px 3px; height:0px; color:#646161"></td>
                                                                                            <td><input type="number" value="0" name="p_tax" id="p_tax" style="background:#fff; border:1px solid rgba(0, 0, 0, .12); border-radius:3px; box-sizing:border-box; padding:10px 3px; height:0px; color:#646161"></td>
                                                                                            <td><input type="text" name="p_subtotal" id="p_subtotal" style="background:#dddada00; border-style:hidden; padding:9px 0px; height:0px; color:#646161" readonly></td>
                                                                                            {{-- <td>
                                                                                                <a href="" class="btn btn-danger"><i class="icofont icofont-trash"></i></a>
                                                                                            </td> --}}
                                                                                        </tr>
                                                                                    </tbody>
                                                                                    <tfoot>
                                                                                        <tr>
                                                                                            <th>Product</th>
                                                                                            <th>Code</th>
                                                                                            <th>Price</th>
                                                                                            <th>Quantity</th>
                                                                                            <th>Discount</th>
                                                                                            <th>Tax</th>
                                                                                            <th>SubTotal</th>
                                                                                            {{-- <th>Action</th> --}}
                                                                                        </tr>
                                                                                    </tfoot>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-divider j-gap-bottom-25"></div>
                                                                        <div class="j-row">
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Shipping Cost</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-cart"></i></label> --}}
                                                                                    <input type="text" id="shipping_cost" name="shipping_cost">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Cost of shipping order</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Payment Status</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="payment_status"><i class="icofont icofont-caret-down"></i></label>
                                                                                    <select name="payment_status" id="payment_status">
                                                                                        <option value="pending">Pending</option>
                                                                                        <option value="partial">Partial</option>
                                                                                        <option value="paid">Paid</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-row" id="account-row">
                                                                            <div class="j-span3 j-unit">
                                                                                <label class="j-label">Payment Mode</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="payment_mode"><i class="icofont icofont-caret-down"></i></label>
                                                                                    <select name="payment_mode" id="payment_mode">
                                                                                        <option value="Cash">Cash</option>
                                                                                        <option value="Credit Card">Credit Card</option>
                                                                                        <option value="Cheque">Cheque</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span3 j-unit">
                                                                                <label class="j-label">Total Amount</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-package"></i></label> --}}
                                                                                    <input type="text" id="total_amount" name="total_amount">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Cost of shipping order</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span3 j-unit">
                                                                                <label class="j-label">Received Amount</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-package"></i></label> --}}
                                                                                    <input type="text" id="received_amount" name="received_amount">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Cost of shipping order</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span3 j-unit">
                                                                                <label class="j-label">Due Amount</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-package"></i></label> --}}
                                                                                    <input type="text" id="due_amount" name="due_amount">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Cost of shipping order</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-row" id="credit-card-row">
                                                                            <div class="j-span8 j-unit">
                                                                                <label class="j-label">Credit Card</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="status"><i class="icofont icofont-mastercard-alt"></i></label> --}}
                                                                                    <input type="text" id="credit_card" name="credit_card" placeholder="Card Number">
                                                                                    <span class="j-tooltip j-tooltip-right-top">14 digits Credit card number</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span2 j-unit">
                                                                                <label class="j-label">Valid Till</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-ui-calendar"></i></label> --}}
                                                                                    <input type="text" id="valid_till" name="valid_till" placeholder="MM / YY">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Valid till month and year</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span2 j-unit">
                                                                                <label class="j-label">CVC No.</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-ui-password"></i></label> --}}
                                                                                    <input type="text" id="cvc_no" name="cvc_no" placeholder="***">
                                                                                    <span class="j-tooltip j-tooltip-right-top">3 digits CVC no. of credit card</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-row" id="cheque-row">
                                                                            <div class="j-span12 j-unit">
                                                                                <label class="j-label">Cheque No.</label>
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" for="shipping_cost"><i class="icofont icofont-card"></i></label> --}}
                                                                                    <input type="text" id="cheque_no" name="cheque_no" placeholder="*******">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Cheque Number</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="payment-note-row">
                                                                            <div>
                                                                                <label class="j-label ">Payment Note</label>
                                                                            </div>
                                                                            <div class="j-unit">
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" style="height:102px;" for="description"><i class="icofont icofont-info-square" style="line-height:6;"></i></label> --}}
                                                                                    <textarea name="payment_note" id="payment_note" cols="30" rows="6"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="order-note-row">
                                                                            <div>
                                                                                <label class="j-label ">Order Note</label>
                                                                            </div>
                                                                            <div class="j-unit">
                                                                                <div class="j-input">
                                                                                    {{-- <label class="j-icon-right" style="height:102px;" for="description"><i class="icofont icofont-info-square" style="line-height:6;"></i></label> --}}
                                                                                    <textarea name="order_note" id="order_note" cols="30" rows="6"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-response"></div>
                                                                    </div>  
                                                                    <div class="j-footer">
                                                                        <button type="submit" id="btn-add-product" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- HTML (DOM) Sourced Data table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body start -->
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    @include('include.scripts')
    <script src="{{asset('public/pages/j-pro/js/custom/new-order.js')}}"></script>
    <script>
    $(document).ready(function(){
        $('#table').hide();
        $('#account-row').hide();
        $('#credit-card-row').hide();
        $('#cheque-row').hide();
        $('#payment-note-row').hide();

        $('#p_quantity').change(function(){
            var quantity = $('#p_quantity').val();
            $("#p_subtotal").val(parseInt($(this).val()) * parseInt($("#p_price").val()));
        });

        $('#payment_status').change(function(){
            var payment_status = $('#payment_status').val();
            if(payment_status == 'pending'){
                $('#account-row').hide();
                $('#credit-card-row').hide();
                $('#cheque-row').hide();
            }
            if(payment_status == 'partial'){
                $('#account-row').show();
                $('#payment-note-row').show();
            }
            if(payment_status == 'paid'){
                $('#account-row').show();
                $('#payment-note-row').show();
            }
        });

        $('#payment_mode').change(function(){
            var payment_mode = $('#payment_mode').val();
            if(payment_mode == 'Credit Card'){
                $('#cheque-row').hide();
                $('#credit-card-row').show();
            }
            if(payment_mode == 'Cheque'){
                $('#credit-card-row').hide();
                $('#cheque-row').show();
            }
            if(payment_mode == 'Cash'){
                $('#credit-card-row').hide();
                $('#cheque-row').hide();
            }
        });

        // Get Product Data...................................................
        $('#product').change(function(){
            $('#table').show();
            var product = $('#product').val()
            var url = '{{route("admin-stock.get-product-data")}}';
            if(product != ''){
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {product:product},
                    success: function(data) {
                        $.each(data, function(name, value) {
                            document.querySelector("#p_name").value = value.name;
                            document.querySelector("#p_code").value = 'OLE'+value.id;
                            document.querySelector("#p_price").value = value.price;
                            document.querySelector("#p_subtotal").value = value.price;
                        });
                    }
                })
            }
        });

         
    });
    </script>
</body>

</html>
