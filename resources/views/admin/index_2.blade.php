﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Xato Admin Dashboard 2 | Xato - Multipurpose Bootstrap Admin Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Common Styles Starts -->
    <link href="../css2-1?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css">
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css">
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="../vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min-1.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">  
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dashboard_2.css" rel="stylesheet" type="text/css">
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
</head>
<body>



<!--  Sidebar Start  -->

@include("admin.adminnavbar")
        
<!--  Sidebar Ends  -->


        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Dashboard 2</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                        <li class="nav-item more-dropdown">
                            <div class="input-group input-group-sm">
                                <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary" id="basic-addon2">
                                        <i class="lar la-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item more-dropdown">
                            <a href="javascript: void(0);" data-original-title="Reload Data" data-placement="bottom" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                                <i class="las la-sync"></i>
                            </a>
                        </li>
                        <li class="nav-item custom-dropdown-icon">
                            <a href="javascript: void(0);" data-original-title="Filter" data-placement="bottom" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                                <i class="las la-filter"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                <a class="dropdown-item" data-value="Filter 1" href="javascript:void(0);">Filter 1</a>
                                <a class="dropdown-item" data-value="Filter 2" href="javascript:void(0);">Filter 2</a>
                                <a class="dropdown-item" data-value="Filter 3" href="javascript:void(0);">Filter 3</a>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget top-welcome">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="media">
                                            <div class="mr-3">
                                                <img src="assets/img/profile-16.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                            </div>
                                            <div class="align-self-center media-body">
                                                <div class="text-muted">
                                                    <p class="mb-2 text-primary">Welcome to dashboard</p>
                                                    <h5 class="mb-1">Sara</h5>
                                                    <p class="mb-0">System Admin</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="align-self-center col-lg-5">
                                        <div class="text-lg-center mt-4 mt-lg-0">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Projects</p>
                                                        <h5 class="mb-0">48</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Team</p>
                                                        <h5 class="mb-0">40</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Clients</p>
                                                        <h5 class="mb-0">18</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div>
                                                        <p class="text-muted text-truncate mb-2">Sellers</p>
                                                        <h5 class="mb-0">98</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-flex col-lg-3 align-items-end justify-content-center flex-column">
                                        <button class="btn btn-primary">
                                           Settings
                                        </button>
                                        <button class="btn btn-info mt-2">
                                            My Chat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 Columns -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget bg-gradient-danger">
                            <div class="f-100">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="text-white">
                                            <h5 class="text-white">Pending Tasks !</h5>
                                            <p class="blink_me text-white mt-1">Deadline Tomorrow</p>
                                            <ul class="pl-3 mb-0">
                                                <li class="py-1">Seller Payments</li>
                                                <li class="py-1">Check Payouts</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="align-self-end col-md-5">
                                        <img src="assets/img/dashboard-image-uw.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-shopping-cart"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Orders</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <h5 class="mb-2">1,452 
                                            <i class="las la-angle-up text-success-teal"></i>
                                        </h5>
                                        <div class="d-flex">
                                            <span class="badge badge-success-teal font-size-12"> + 0.2% </span> 
                                            <span class="ml-2 text-truncate">From last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-hand-holding-usd"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Profit</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <h5 class="mb-2">$200 
                                            <i class="las la-angle-down text-danger"></i>
                                        </h5>
                                        <div class="d-flex">
                                            <span class="badge badge-danger font-size-12"> - 5.4% </span> 
                                            <span class="ml-2 text-truncate">From last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="widget">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <span class="quick-category-icon qc-primary rounded-circle">
                                                <i class="las la-user"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Customer</h5>
                                    </div>
                                    <div class="text-muted mt-3">
                                        <h5 class="mb-2">9,887 
                                            <i class="las la-angle-up text-success-teal"></i>
                                        </h5>
                                        <div class="d-flex">
                                            <span class="badge badge-success-teal font-size-12"> + 25% </span> 
                                            <span class="ml-2 text-truncate">From last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 Columns Ends-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing ">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Weather Report</h5>
                                <h6 class="pt-1">Sydney, Australia</h6>
                            </div>
                            <div class="widget-content">
                                <div class="monthly-weather-report">
                                    <div class="d-sm-flex d-block justify-content-between mb-4">   
                                    </div>
                                    <div class="row weather-report-container justify-content-between">
                                        <div class="col-xl-4 col-md-5">
                                            <div class="tempareture-box-2 d-flex justify-content-sm-center justify-content-between mb-4 mb-sm-0">
                                                <div class="tempareture-box-icon">
                                                    <i class="las la-sun slow-spin text-warning font-135"></i>
                                                </div>
                                                <div class="tempareture-box-content text-center ml-4">
                                                    <div class="temp-top">
                                                        <span class="font-65 text-warning">18°C</span>
                                                    </div>
                                                    <div class="temp-bottom">
                                                        <a>Yesterday - <span class="temp-1 strong text-primary">24°C</span></a>
                                                        <a>Tomorrow - <span class="temp-2 strong text-primary">22°C</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row monthly-weather-report-inner">
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-warning font-45">
                                                            <i class="las la-sun"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>Warm</h5>
                                                            <p>Clear</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-black font-45">
                                                            <i class="las la-moon"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>Night</h5>
                                                            <p>Pleasant</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-info font-45">
                                                            <i class="las la-cloud-rain"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>Cloudy</h5>
                                                            <p>Raining</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-info font-45">
                                                            <i class="las la-tint"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>58%</h5>
                                                            <p>Humidity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-dpink font-45">
                                                            <i class="las la-wind"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>17 mph</h5>
                                                            <p>Wind Speed</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-6">
                                                    <div class="media pt-3 align-items-center pb-3">
                                                        <span class="mr-3 text-info font-45">
                                                            <i class="las la-cloud-moon-rain"></i>
                                                        </span>
                                                        <div class="media-body">
                                                            <h5>29.57 ml</h5>
                                                            <p>Rainfall</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gradient-primary text-white mt-3">
                                    <div class="mb-0">
                                        <div class="">
                                            <div class="whole-week-days d-flex flex-wrap justify-content-sm-around p-3">
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Mon</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-moon font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">58°F</h6>
                                                            <p class="mb-0 text-white">28°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Tue</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-sun font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">60°F</h6>
                                                            <p class="mb-0 text-white">29°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Wed</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-moon font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">62°F</h6>
                                                            <p class="mb-0 text-white">30°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Thu</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-sun font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">40°F</h6>
                                                            <p class="mb-0 text-white">19°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Fri</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-sun-rain font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">62°F</h6>
                                                            <p class="mb-0 text-white">23°C</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <h6 class="text-white mb-0">Sat</h6>
                                                    <div class="d-flex align-items-center mt-1">
                                                        <span class="env-icon"><i class="las la-cloud-moon font-35"></i></span>
                                                        <div class="temp-count ml-2">
                                                            <h6 class="text-white mb-0">58°F</h6>
                                                            <p class="mb-0 text-white">28°C</p>
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
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Top Seller Performance</h5>
                                <ul class="tabs tab-pills">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Quarterly</a>
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Half Yearly</a>
                                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                                <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content">
                                <div class="tabs tab-content row">
                                    <div class="left-area col-lg-4">
                                        <h6 class="mb-0 mt-4">WS Retail</h6>
                                        <p>Best Seller of the month</p>
                                        <h4 class="mt-3">$3,808</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-success-teal font-size-12"> + 25% </span> 
                                            <span class="ml-2 text-truncate">more sales</span>
                                        </div>
                                        <button class="btn btn-sm btn-primary mt-4">View Details</button>
                                        <p class="mb-0 mt-4">Last Month</p>
                                        <p>$2,405</p>
                                    </div>
                                    <div class="right-area col-lg-8">
                                        <div id="content_1" class="tabcontent"> 
                                            <div id="bestSeller"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="text-center">Top Selling Product</h5>
                            </div>
                            <div class="widget-content mt-4">
                                <img src="assets/img/product-1.jpg" class="rounded-circle avatar-md img-thumbnail m-auto object-cover">
                                <h6 class="text-center mt-2">Product One</h6>
                                <p class="text-center">$5,458</p>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="badge badge-success font-size-12"> + 25% </span> 
                                    <span class="ml-2 text-truncate">From last month</span>
                                </div>
                                <img src="assets/img/product-4.jpg" class="rounded-circle avatar-md img-thumbnail m-auto object-cover">
                                <h6 class="text-center mt-2">Product Two</h6>
                                <p class="text-center">$5,458</p>
                                <div class="d-flex justify-content-center mb-4">
                                    <span class="badge badge-danger font-size-12"> - 25% </span> 
                                    <span class="ml-2 text-truncate">From last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Sales details of product</h5>
                                    </div>
                                    <div class="widget-content">
                                        <div class="d-flex justify-content-between">
                                            <p class="font-35 text-success-teal">$74,989</p>
                                            <i class="lar la-chart-bar font-45 text-success-teal"></i>
                                        </div>
                                        <p>Total 175 Sales</p>
                                        <a class="btn btn-sm btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Pending payment of product</h5>
                                    </div>
                                    <div class="widget-content">
                                        <div class="d-flex justify-content-between">
                                            <p class="font-35 text-warning">$24,989</p>
                                            <i class="lar la-chart-bar font-45 text-warning"></i>
                                        </div>
                                        <p>Total 98 clients</p>
                                        <a class="btn btn-sm btn-warning">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Recent Items</h5>
                                        <ul class="tabs tab-pills">
                                            <li>
                                                <div class="dropdown  custom-dropdown-icon">
                                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget-content">
                                        <div class="d-flex flex-column">
                                            <div class="media recent-items w-100 align-items-center mt-2 mb-4">
                                                <img src="assets/img/product-1.jpg" alt="">
                                                <div class="media-body ml-4 mt-sm-3">
                                                    <h5 class="mb-1">1005 Farland Street,West Roxbury</h5>
                                                    <p>05 Jul 2018, Fergus Douchebag</p>
                                                </div>
                                                <a class="badge badge-success-teal text-white mr-2">Completed</a>
                                                <a class="badge badge-warning text-white d-none d-lg-block">Pending</a>
                                            </div>
                                            <div class="media recent-items w-100 align-items-center mb-4">
                                                <img src="assets/img/product-2.jpg" alt="">
                                                <div class="media-body ml-4 mt-sm-3">
                                                    <h5 class="mb-1">845 Nrarland Street,east Opobury </h5>
                                                    <p>12 Jul 2019, Fergus Douchebag</p>
                                                </div>
                                                <a class="badge badge-info text-white mr-2">Processing</a>
                                                <a class="badge badge-success text-white d-none d-lg-block">Done</a>
                                            </div>
                                            <div class="media recent-items w-100 align-items-center mb-4">
                                                <img src="assets/img/product-3.jpg" alt="">
                                                <div class="media-body ml-4 mt-sm-3">
                                                    <h5 class="mb-1">8/D Talbagan Street,North 24 midland Opobury </h5>
                                                    <p>12 Jul 2019, Jonas Ferguson</p>
                                                </div>
                                                <a class="badge badge-danger text-white mr-2">Failed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-content">
                                <div class="agent-info text-center">
                                    <div class="agent-img pb-3">
                                        <img src="assets/img/profile-5.jpg" class="img-thumbnail rounded-circle" alt="image">
                                    </div>
                                    <h5 class="text-dark">Hermann P. Schnitzel</h5>
                                    <p>Agent of Property</p>
                                    <h6 class="mb-3 mt-3"><span class="text-primary pr-2"><i class="fa fa-phone"></i></span> (+1) 774-238-0096</h6>
                                </div>
                                <form action="#" class="agent-req-form mt-2">
                                    <h6 class="text-muted text-center mb-4">Request Inquiry</h6>
                                    <div class="form-group">
                                        <input type="text" placeholder="Full Name *" class="form-control bg-white text-muted">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email ID *" class="form-control bg-white text-muted">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" placeholder="Phone No *" class="form-control bg-white text-muted">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3" placeholder="Message *" class="form-control bg-white text-muted"></textarea>
                                    </div>
                                    <div class="form-group text-right mb-0">
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget-chart-one">
                            <div class="widget-content overflow-hidden">
                                <div class="ticker-wrap">
                                    <div class="ticker-heading bg-gradient-info">
                                        <p>Overview</p>
                                    </div>
                                    <div class="ticker">
                                        <div class="ticker-item">Letterpress chambray brunch.</div>
                                        <div class="ticker-item">Vice mlkshk crucifix beard chillwave meditation hoodie asymmetrical Helvetica.</div>
                                        <div class="ticker-item">Ugh PBR&B kale chips Echo Park.</div>
                                        <div class="ticker-item">Gluten-free mumblecore chambray mixtape food truck. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Main Body Ends -->
            <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page to view the responsive functionalities
                </p>
            </div>
            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="https://xato-web.web.app/">XatoWeb</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Crafted with extra <i class="las la-heart text-danger"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#settings-tab" role="tab" aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes starts -->
                                    <div class="tab-content pt-0 rightbar-tab-container">
                                        <div class="tab-pane active rightbar-tab" id="chat-tab" role="tabpanel">
                                            <form class="search-bar p-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control search-form-control" placeholder="Search">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chat Groups</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-success"></i>
                                                    <span class="mb-0 mt-1 text-success">Backend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-warning"></i>
                                                    <span class="mb-0 mt-1 text-warning">Frontend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-danger"></i>
                                                    <span class="mb-0 mt-1 text-danger">Back Office</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 d-block">
                                                    <i class="las la-dot-circle mr-1 text-info"></i>
                                                    <span class="mb-0 mt-1 text-info">Personal</span>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">My Favourites <a href="javascript: void(0);"><i class="las la-angle-right"></i></a></h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-1.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Andrew Mackie</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-2.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Sophia Garner</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Nice and amazing.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Jackie Smith</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Send me the .pdf files asap.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chats <a href="javascript: void(0);"><i class="las la-angle-right"></i></a></h6>
                                            <div class="p-2 pb-4">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Owen Hargrieves</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">That's really cool</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-4.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Riyana Giyan</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">When do you send me those files ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-5.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Ryan Timberlake</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Invoice has been generated</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-6.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Julie Roman</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thank you so much.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-7.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Gareth Sarkar</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thats was awesome</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-8.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Kylie Roberts</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Amazing feature.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center pt-4">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                        Load more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="status-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Order Status </h6>
                                            <div class="px-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Success<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Processing<span class="float-right">37%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Initiated<span class="float-right">52%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Payment Status</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Failed<span class="float-right">12%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment on hold<span class="float-right">67%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Successful<span class="float-right">84%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Show All</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="settings-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Account Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Sync Contacts</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Update</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Recieve Notifications</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Mail Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Mail Auto Responder</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Trash Delete</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Custom Signature</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Chat Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Show Online</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Chat Notifications</p>
                                                </div>
                                            </div>
                                            <div class="px-2 text-center pt-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    Set Default
                                                </a>
                                                <button class="ripple-button ripple-button-primary btn-sm" type="button">
                                                    <div class="ripple-ripple js-ripple">
                                                    <span class="ripple-ripple__circle"></span>
                                                    </div>
                                                    Ripple Effect
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends -->
    </div>
    <!-- Main Container Ends -->
    <!-- Common Script Starts -->
    <script src="admindb/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="admindb/bootstrap/js/popper.min.js"></script>
    <script src="admindb/bootstrap/js/bootstrap.min.js"></script>
    <script src="admindb/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="admindb/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="admindb/assets/js/custom.js"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="admindb/assets/js/loader.js"></script>
    <script src="admindb/plugins/apex/apexcharts.min.js"></script>
    <script src="admindb/plugins/flatpickr/flatpickr.js"></script>
    <script src="admindb/assets/js/dashboard/dashboard_2.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>