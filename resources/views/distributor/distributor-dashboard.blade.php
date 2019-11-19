<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDS - Stock Distribution System | Distributor Dashboard</title>
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
                                        <img class="media-object img-radius img-radius" src="{{asset('public\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('public\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('public\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('public\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{asset('public\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
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
                        <img class="media-object img-radius img-radius m-t-5" src="{{asset('public\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
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
                            <img class="media-object img-radius img-radius m-t-5" src="{{asset('public\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
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
                    {{-- navbar start here --}}
                    @include('include.navbar')
                    {{--navbar end here --}}
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-yellow f-w-600">$30200</h4>
                                                                <h6 class="text-muted m-b-0">All Earnings</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="feather icon-bar-chart f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-yellow">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="feather icon-trending-up text-white f-16"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green f-w-600">290+</h4>
                                                                <h6 class="text-muted m-b-0">Page Views</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="feather icon-file-text f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-green">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="feather icon-trending-up text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-pink f-w-600">145</h4>
                                                                <h6 class="text-muted m-b-0">Task Completed</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="feather icon-calendar f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-pink">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="feather icon-trending-up text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-blue f-w-600">500</h4>
                                                                <h6 class="text-muted m-b-0">Downloads</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="feather icon-download f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-blue">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">% change</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <i class="feather icon-trending-up text-white f-16"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->

                                            <!-- visitor start -->
                                            <div class="col-xl-8 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Visitors</h5>
                                                        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="visitor" style="height:300px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-block bg-c-green">
                                                        <div id="proj-earning" style="height: 230px"></div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <h6 class="text-muted m-b-30 m-t-15">Total completed project and earning</h6>
                                                        <div class="row text-center">
                                                            <div class="col-6 b-r-default">
                                                                <h6 class="text-muted m-b-10">Completed Projects</h6>
                                                                <h4 class="m-b-0 f-w-600 ">175</h4>
                                                            </div>
                                                            <div class="col-6">
                                                                <h6 class="text-muted m-b-10">Total Earnings</h6>
                                                                <h4 class="m-b-0 f-w-600 ">76.6M</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- visitor end -->

                                            <!-- sale start -->
                                            <div class="col-xl-5 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Global Sales by Top Locations</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Country</th>
                                                                        <th>Sales</th>
                                                                        <th class="text-right">Average</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><img src="{{asset('public\assets\images\widget\GERMANY.jpg')}}" alt="" class="img-fluid img-30"></td>
                                                                        <td>Germany</td>
                                                                        <td>3,562</td>
                                                                        <td class="text-right">56.23%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="{{asset('public\assets\images\widget\USA.jpg')}}" alt="" class="img-fluid img-30"></td>
                                                                        <td>USA</td>
                                                                        <td>2,650</td>
                                                                        <td class="text-right">25.23%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="{{asset('public\assets\images\widget\AUSTRALIA.jpg')}}" alt="" class="img-fluid img-30"></td>
                                                                        <td>Australia</td>
                                                                        <td>956</td>
                                                                        <td class="text-right">12.45%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="{{asset('public\assets\images\widget\UK.jpg')}}" alt="" class="img-fluid img-30"></td>
                                                                        <td>United Kingdom</td>
                                                                        <td>689</td>
                                                                        <td class="text-right">8.65%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="{{asset('public\assets\images\widget\BRAZIL.jpg')}}" alt="" class="img-fluid img-30"></td>
                                                                        <td>Brazil</td>
                                                                        <td>560</td>
                                                                        <td class="text-right">3.56%</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="text-right  m-r-20">
                                                            <a href="#!" class="b-b-primary text-primary">View all Sales Locations </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>New Users</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <canvas id="newuserchart" height="250"></canvas>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <div class="row text-center b-t-default">
                                                            <div class="col-4 b-r-default m-t-15">
                                                                <h5>85%</h5>
                                                                <p class="text-muted m-b-0">Satisfied</p>
                                                            </div>
                                                            <div class="col-4 b-r-default m-t-15">
                                                                <h5>6%</h5>
                                                                <p class="text-muted m-b-0">Unsatisfied</p>
                                                            </div>
                                                            <div class="col-4 m-t-15">
                                                                <h5>9%</h5>
                                                                <p class="text-muted m-b-0">NA</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-mail text-c-lite-green d-block f-40"></i>
                                                        <h4 class="m-t-15"><span class="text-c-lite-green">8.62k</span> Subscribers</h4>
                                                        <p class="m-b-10">Your main list is growing</p>
                                                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-twitter text-c-green d-block f-40"></i>
                                                        <h4 class="m-t-15"><span class="text-c-blgreenue">+40</span> Followers</h4>
                                                        <p class="m-b-10">Your main list is growing</p>
                                                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sale end -->

                                            <!-- sale order start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card o-hidden">
                                                    <div class="card-block bg-c-pink text-white">
                                                        <h6>Sales Per Day <span class="f-right"><i class="feather icon-activity m-r-15"></i>3%</span></h6>
                                                        <canvas id="sale-chart1" height="150"></canvas>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h4>$4230</h4>
                                                                <p class="text-muted m-b-0">Total Revenue</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>321</h4>
                                                                <p class="text-muted m-b-0">Today Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card o-hidden">
                                                    <div class="card-block bg-c-green text-white">
                                                        <h6>Visits<span class="f-right"><i class="feather icon-activity m-r-15"></i>9%</span></h6>
                                                        <canvas id="sale-chart2" height="150"></canvas>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h4>3562</h4>
                                                                <p class="text-muted m-b-0">Monthly Visits</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>96</h4>
                                                                <p class="text-muted m-b-0">Today Visits</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card o-hidden">
                                                    <div class="card-block bg-c-blue text-white">
                                                        <h6>Orders<span class="f-right"><i class="feather icon-activity m-r-15"></i>12%</span></h6>
                                                        <canvas id="sale-chart3" height="150"></canvas>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h4>1695</h4>
                                                                <p class="text-muted m-b-0">Monthly Orders</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>52</h4>
                                                                <p class="text-muted m-b-0">Today Orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sale order end -->

                                            <!-- social start -->
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card quater-card">
                                                    <div class="card-block">
                                                        <h6 class="text-muted m-b-20">This Quarter</h6>
                                                        <h4>$3,9452.50</h4>
                                                        <p class="text-muted">$3,9452.50</p>
                                                        <h5 class="m-t-30">87</h5>
                                                        <p class="text-muted">Online Revenue<span class="f-right">80%</span></p>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-simple-c-pink" style="width: 80%"></div>
                                                        </div>
                                                        <h5 class="m-t-30">68</h5>
                                                        <p class="text-muted">Offline Revenue<span class="f-right">50%</span></p>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-simple-c-yellow" style="width: 50%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-md-12">
                                                <div class="card social-network">
                                                    <div class="card-header">
                                                        <h5>Social Network</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img src="{{asset('public\assets\images\widget\icon-1.png')}}" alt=" " class="img-responsive p-b-20">
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Views :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">545,721</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Comments :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">2,256</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Likes :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">4,129</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Subscribe :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">3,451,945</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <img src="{{asset('public\assets\images\widget\icon-2.png')}}" alt=" " class="img-responsive p-b-20">
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Engagement :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">1,543</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Shares :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">846</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Likes :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">569</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Comments :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">156</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 m-t-0">
                                                                <img src="{{asset('public\assets\images\widget\icon-3.png')}}" alt=" " class="img-responsive p-b-10 p-t-10">
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Tweets :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">103,576</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 m-t-0">
                                                                <img src="{{asset('public\assets\images\widget\icon-4.png')}}" alt=" " class="img-responsive p-b-10 p-t-10">
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <p class="text-muted m-b-5">Tweets :</p>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <p class="m-b-5 f-w-400">103,576</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- social end -->
                                        </div>
                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
@include('include.scripts')
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
