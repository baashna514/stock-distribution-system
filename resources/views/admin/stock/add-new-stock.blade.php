<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDS - Stock Distribution System | Add New Stock Page</title>
    @include('include.head')
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
                                                    <li class="breadcrumb-item"><a href="">Stock Add</a>
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
                                                        <h5>Add New Stock</h5>
                                                        {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                                                    </div>
                                                        <div class="card-block">
                                                            <div class="j-wrapper j-wrapper-640">
                                                                <form action="{{route('admin-stock.add-new-stock-action')}}" method="POST" class="j-pro" id="j-pro" novalidate>
                                                                    @csrf
                                                                    <div class="j-content">
                                                                        <div class="j-row">
                                                                            <div class="j-span4 j-unit">
                                                                                <label class="j-label">Date</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="date"><i class="icofont icofont-ui-calendar"></i> </label>
                                                                                    <input type="text" id="date" name="date" readonly="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span4 j-unit">
                                                                                <label class="j-label">Category</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="category"><i class="icofont icofont-sort"></i></label>
                                                                                    {{-- <input type="email" id="email" name="email"> --}}
                                                                                    <select name="category" id="category" class="clr-white">
                                                                                        <option value="">Choose category</option>
                                                                                        @foreach ($categories as $item)
                                                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    {{-- <span class="j-tooltip j-tooltip-right-top">Category of Product</span> --}}
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span4 j-unit">
                                                                                <label class="j-label">Product</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="product"><i class="icofont icofont-resize"></i></label>
                                                                                    {{-- <input type="text" id="phone" name="phone"> --}}
                                                                                    <select name="product" id="product">
                                                                                        <option value="{{old('product')}}">Choose Product</option>
                                                                                    </select>
                                                                                    {{-- <span class="j-tooltip j-tooltip-right-top">Size of product</span> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-row">
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Quantity</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="quantity"><i class="icofont icofont-package"></i></label>
                                                                                    <input type="text" id="quantity" name="quantity">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Quantity of stock</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span3 j-unit">
                                                                                <label class="j-label">Size</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="size"><i class="icofont icofont-package"></i></label>
                                                                                    <input type="text" id="size" name="size" readonly>
                                                                                    <span class="j-tooltip j-tooltip-right-top">This field is readonly</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span3 j-unit">
                                                                                <label class="j-label">Pack</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-right" for="pack"><i class="icofont icofont-package"></i></label>
                                                                                    <input type="text" id="pack" name="pack" readonly>
                                                                                    <span class="j-tooltip j-tooltip-right-top">This field is readonly</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="j-divider j-gap-bottom-25"></div> --}}
                                                                    
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
    <script src="{{asset('public/pages/j-pro/js/custom/add-new-stock.js')}}"></script>
    <script>
    $(document).ready(function(){
        $('.clr-white').chosen();

        // Get Category Products..............................................
        $('#category').change(function(){
            var category = $('#category').val()
            var url = '{{route("admin-stock.get-category-products")}}';
            if(category != ''){
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {category:category},
                    success: function(data) {
                        $('#product').html(data);
                    }
                })
            }
        });

        // Get Product Data...................................................
        $('#product').change(function(){
            var product = $('#product').val()
            var url = '{{route("admin-stock.get-product-data")}}';
            if(product != ''){
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {product:product},
                    success: function(data) {
                        $.each(data, function(name, value) {
                            document.querySelector("#size").value = value.size;
                            document.querySelector("#pack").value = value.pet;
                        });
                    }
                })
            }
        });
    });
    </script>
</body>

</html>
