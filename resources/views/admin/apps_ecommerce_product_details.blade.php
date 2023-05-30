﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Xato Ecommerce Products | Xato - Multipurpose Bootstrap Admin Dashboard Template </title>
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
    <link href="assets/css/ui-elements/pagination.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css">
    <link href="assets/css/apps/ecommerce.css" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->    
</head>
<body>



<!--  Sidebar Start  -->

@include("admin.adminnavbar")
        
<!--  Sidebar Ends  -->


        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area Starts -->
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="apps_ecommerce.html">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Product Details</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area Ends -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="widget-content searchable-container grid">
                                <div class="card-box product-details">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
                                            <div class="tab-content pt-0">
                                                <a class="product-details-wishlist">
                                                    <i class="lar la-heart" id="heartIcon"></i>
                                                </a>
                                                <div class="tab-pane show" id="product-1-item">
                                                    <img src="assets/img/product-detail-1.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                </div>
                                                <div class="tab-pane" id="product-2-item">
                                                    <img src="assets/img/product-detail-2.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                </div>
                                                <div class="tab-pane" id="product-3-item">
                                                    <img src="assets/img/product-detail-3.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                </div>
                                                <div class="tab-pane active" id="product-4-item">
                                                    <img src="assets/img/product-detail-4.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                </div>
                                            </div>
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="nav-item">
                                                    <a href="#product-1-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb show">
                                                        <img src="assets/img/product-detail-1.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#product-2-item" data-toggle="tab" aria-expanded="true" class="nav-link product-thumb">
                                                        <img src="assets/img/product-detail-2.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#product-3-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb">
                                                        <img src="assets/img/product-detail-3.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#product-4-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb active">
                                                        <img src="assets/img/product-detail-4.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 
                                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12">
                                            <div class="mt-3 mt-xl-0">
                                                <a href="apps_ecommerce_products.html" class="text-primary mb-3 d-block"><i class="las la-arrow-left"></i> Back to list</a>
                                                <a class="strong">Roadstar</a>
                                                <h4 class="mb-3 text-black strong">Full Sleeve Cotton Shirt with Collar</h4>
                                                <p class="text-muted float-left mr-2">
                                                    <i class="las la-star text-warning"></i>
                                                    <i class="las la-star text-warning"></i>
                                                    <i class="las la-star text-warning"></i>
                                                    <i class="las la-star text-warning"></i>
                                                    <i class="lar la-star text-warning"></i>
                                                </p>
                                                <p class="mb-3">
                                                    <a href="" class="text-muted">4.0 (74,258 Customer Reviews )</a>
                                                </p>
                                                <h4>
                                                    <span class="badge badge-success">Special Price</span>
                                                </h4>
                                                <h4 class="mb-3">
                                                    <b>$101 USD</b>
                                                    <span class="text-muted ml-2">
                                                        <del>$80 USD</del>
                                                    </span>
                                                    <span class="text-success ml-2">20 % Off</span>
                                                </h4>
                                                <h4>
                                                    <span class="text-success mb-4 font-13">Instock</span>
                                                </h4>
                                                <p class="text-muted mb-4">There are many variations of passages of shirt available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <p class="text-muted strong font-13">Highlights</p>
                                                        <div>
                                                            <p class="text-muted"><i class="lar la-check-circle"></i> Shirt has amazing fabric</p>
                                                            <p class="text-muted"><i class="lar la-check-circle"></i> 100% Cotton with no polyster</p>
                                                            <p class="text-muted"><i class="lar la-check-circle"></i>Perfect for summer outfit</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>&nbsp;</p>
                                                        <div>
                                                            <p class="text-muted"><i class="lar la-check-circle"></i> Color: Milky White</p>
                                                            <p class="text-muted"><i class="lar la-check-circle"></i> Amazing fittings</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class="form-inline mb-4">
                                                    <label class="my-1 mr-2" for="quantityinput">Quantity</label>
                                                    <select class="custom-select mb-1 mr-3 pr-5" id="quantityinput">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                    </select>
                                                    <label class="my-1 mr-2" for="sizeinput">Size</label>
                                                    <select class="custom-select  mb-1 mr-3 pr-5" id="sizeinput">
                                                        <option selected="">Small</option>
                                                        <option value="1">Medium</option>
                                                        <option value="2">Large</option>
                                                        <option value="3">X-large</option>
                                                    </select>
                                                    <label class="my-1 mr-2" for="colorinput">Color</label>
                                                    <select class="custom-select mb-1 mr-3 pr-5" id="colorinput">
                                                        <option value="Purple">Purple</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Orange">Orange</option>
                                                        <option value="Blue">Blue</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div> 
                                        <div class="text-center w-100">
                                            <button type="button" class="btn btn-primary">
                                                <i class="las la-plus-circle"></i> Add to cart
                                            </button>
                                            <button type="button" class="btn btn-dark">
                                            <i class="las la-shopping-bag"></i> Buy Now
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="w-100 animated-underline-content mt-2 details-tab-area">
                                        <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="underline-specification-tab" data-toggle="tab" href="#underline-specification" role="tab" aria-controls="underline-specification" aria-selected="false">Specification</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="underline-reviews-tab" data-toggle="tab" href="#underline-reviews" role="tab" aria-controls="underline-reviews" aria-selected="false">Reviews</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="underline-faqs-tab" data-toggle="tab" href="#underline-faqs" role="tab" aria-controls="underline-faqs" aria-selected="true">FAQs</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">
                                            <!-- SPECIFICATION -->
                                            <div class="tab-pane fade show active" id="underline-specification" role="tabpanel" aria-labelledby="underline-specification-tab">
                                                <div class="d-flex flex-wrap p-2">
                                                    <p class="text-muted mb-4">There are many variations of passages of shirt available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <div class="row mb-3 w-100">
                                                        <div class="col-md-4">
                                                            <p class="text-muted strong font-13">Highlights</p>
                                                            <div>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Shirt has amazing fabric</p>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> 100% Cotton with no polyster</p>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i>Perfect for summer outfit</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>&nbsp;</p>
                                                            <div>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Color: Milky White</p>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Amazing fittings</p>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Best Design</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p>&nbsp;</p>
                                                            <div>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Best Price</p>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Multiple Color</p>
                                                                <p class="text-muted"><i class="lar la-check-circle"></i> Suitable for everyone</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>         
                                            </div>
                                            <!-- REVIEWS -->
                                            <div class="tab-pane fade" id="underline-reviews" role="tabpanel" aria-labelledby="underline-reviews-tab">
                                                <div class="row w-100 m-0">
                                                    <div class="col-md-4 mb-4">
                                                        <div class="single-review">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="badge badge-success-teal mr-3">5 <i class="las la-star"></i></span>
                                                                <span class="text-dark strong">Awesome Shirt</span>
                                                            </div>
                                                            <h6 class="font-13 text-muted mb-0">Very nice product. I want to buy more.</h6>
                                                            <p class="font-12 text-muted mb-0">- Jonathan Williamson <span class="font-10">(12 Aug 2020)</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-4">
                                                        <div class="single-review">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="badge badge-danger mr-3">2 <i class="las la-star"></i></span>
                                                                <span class="text-dark strong">Not So good</span>
                                                            </div>
                                                            <h6 class="font-13 text-muted mb-0">I didn't like it personally. Sad with quality</h6>
                                                            <p class="font-12 text-muted mb-0">- Buli Shinomo <span class="font-10">(18 Jun 2020)</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-4">
                                                        <div class="single-review">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="badge badge-success-teal mr-3">5 <i class="las la-star"></i></span>
                                                                <span class="text-dark strong">Perfect Shirt</span>
                                                            </div>
                                                            <h6 class="font-13 text-muted mb-0">Super nice product. I want to buy more.</h6>
                                                            <p class="font-12 text-muted mb-0">- Dhigmandy <span class="font-10">(08 Jul 2020)</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-4">
                                                        <div class="single-review">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="badge badge-warning mr-3">3 <i class="las la-star"></i></span>
                                                                <span class="text-dark strong">Not Good, Not Bad</span>
                                                            </div>
                                                            <h6 class="font-13 text-muted mb-0">I am not super impressed. but i like it</h6>
                                                            <p class="font-12 text-muted mb-0">- Justin Gomez <span class="font-10">(20 Apr 2020)</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FAQS -->
                                            <div class="tab-pane fade" id="underline-faqs" role="tabpanel" aria-labelledby="underline-faqs-tab">
                                                <div class="row w-100 m-0">
                                                    <div class="accordion" id="accordion2">
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                                    FAQ 1 <span class="float-right"><i class="las la-angle-down"></i></span>
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    There are many variations of passages of FAQ available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of FAQ, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                                                    FAQ 2 <span class="float-right"><i class="las la-angle-down"></i></span>
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    There are many variations of passages of FAQ available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of FAQ, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                                                    FAQ 3 <span class="float-right"><i class="las la-angle-down"></i></span>
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    There are many variations of passages of FAQ available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of FAQ, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-group">
                                                            <div class="accordion-heading">
                                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                                                    FAQ 4 <span class="float-right"><i class="las la-angle-down"></i></span>
                                                                </a>
                                                            </div>
                                                            <div id="collapseFour" class="accordion-body collapse">
                                                                <div class="accordion-inner">
                                                                    There are many variations of passages of FAQ available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of FAQ, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-5">
                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered table-centered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Sellers</th>
                                                    <th>Price</th>
                                                    <th>Stock Percentage</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Seller Name 1</td>
                                                    <td>$109.58</td>
                                                    <td>
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-auto">
                                                            <span class="mr-2">10%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$1,478</td>
                                                </tr>
                                                <tr>
                                                    <td>Seller Name 2</td>
                                                    <td>$109.99</td>
                                                    <td>
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-auto">
                                                            <span class="mr-2">20%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$3,452</td>
                                                </tr>
                                                <tr>
                                                    <td>Seller Name 3</td>
                                                    <td>$105.87</td>
                                                    <td>
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-auto">
                                                            <span class="mr-2">92%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$5,878</td>
                                                </tr>
                                                <tr>
                                                    <td>Seller Name 4</td>
                                                    <td>$109.89</td>
                                                    <td>
                                                        <div class="row align-items-center no-gutters">
                                                            <div class="col-auto">
                                                            <span class="mr-2">55%</span>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$2,123</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    <script src="admindb/plugins/jquery-ui/jquery-ui.min.js"></script>
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
    <script src="admindb/assets/js/apps/ecommerce.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>