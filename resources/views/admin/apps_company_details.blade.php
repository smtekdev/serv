﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Xato Company Details | Xato - Multipurpose Bootstrap Admin Dashboard Template </title>
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
    <link href="assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/apps/companies.css" rel="stylesheet" type="text/css">
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
                                        <li class="breadcrumb-item active" aria-current="page"><span>Company Details</span></li>
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
                                <div class="card-box">
                                    <div class="row w-100"> 
                                        <div class="col-xl-12 col-lg-12 align-self-center w-100">
                                            <a href="apps_companies.html" class="btn btn-sm btn-primary p-1"><i class="las la-arrow-left"></i> Back</a>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 company-detail-container mt-5">
                                            <div class="d-flex align-items-start">
                                                <img src="assets/img/company-1.jpg" alt="avatar">
                                                <div class="company-info">
                                                    <p class="name mb-1">Cube House</p>
                                                    <p class="text-muted font-12 mb-1"><i class="las la-map-marker font-15"></i>Chicago, USA</p>
                                                    <a class="text-primary font-12 mb-2 d-block" href="#">www.domainname.com</a> 
                                                    <p>Cube House is an American multinational technology conglomerate headquartered in California. It was popularised in the 1960s with the release of Letraset sheets containing more recently with desktop publishing software like Aldus PageMaker.</p>
                                                    <div class="d-flex">
                                                        <a class="btn btn-sm btn-outline-primary mr-2">Send Mail</a>
                                                        <a class="btn btn-sm btn-primary">Call Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 company-detail-container mt-5">
                                            <div class="company-info-right">
                                                <p>Total Projects : <a>10</a></p>
                                                <p>Team Members : <a>17</a></p>
                                                <p>Status : <a class="badge badge-success text-light">Active</a></p>
                                                <p>Partnered Since : <a>2001</a></p>
                                                <p>No. of Years : <a>19 yrs</a></p>
                                                <div class="d-flex social-media align-items-center justify-content-between">
                                                    <p class="mb-0">Connect : </p>
                                                    <div>
                                                        <a href=""><i class="lab la-facebook-square"></i></a>
                                                        <a href=""><i class="lab la-twitter"></i></a>
                                                        <a href=""><i class="lab la-linkedin-in"></i></a>
                                                        <a href=""><i class="lab la-github"></i></a>
                                                        <a href=""><i class="lab la-dribbble"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Starts -->
                                <div class="card-box">
                                    <div class="w-100 animated-underline-content">
                                        <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="underline-about-tab" data-toggle="tab" href="#underline-about" role="tab" aria-controls="underline-about" aria-selected="true">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="underline-project-tab" data-toggle="tab" href="#underline-project" role="tab" aria-controls="underline-project" aria-selected="false">Projects</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="underline-team-tab" data-toggle="tab" href="#underline-team" role="tab" aria-controls="underline-team" aria-selected="false">Team</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="lineTabContent-3">
                                            <div class="tab-pane fade show active" id="underline-about" role="tabpanel" aria-labelledby="underline-about-tab">
                                                <div class="d-flex flex-wrap">
                                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                                        <div class="contact-info mb-4">
                                                            <p><a href="#"><i class="las la-globe"></i>www.domainname.com</a></p>
                                                            <p><a href="#"><i class="lar la-envelope"></i>info@mail.com</a></p>
                                                            <p><a href="#"><i class="lar la-envelope"></i>contact@mail.com</a></p>
                                                            <p><a href="#"><i class="las la-phone"></i>(+1) 458 5857 578</a></p>
                                                            <p><a href="#"><i class="las la-phone"></i>(+91) 689 4586 102</a></p>
                                                        </div>
                                                        <div class="contact-info mb-4">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10746.967560723306!2d-119.86682531362423!3d36.79233081031697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1593079394959!5m2!1sen!2sin" width="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-4">
                                                        <div class="contact-info mb-4">
                                                            <p class="strong">About</p>
                                                            <p class="font-12">Cube House is an American multinational technology conglomerate headquartered in California. It was popularised in the 1960s with the release of Letraset sheets containing more recently with desktop publishing software like Aldus PageMaker.Cube House is an American multinational technology conglomerate headquartered in California. It was popularised in the 1960s with the release of Letraset sheets containing more recently with desktop publishing software like Aldus PageMaker.</p>
                                                            <hr>
                                                            <p class="strong">Skills</p>
                                                            <div class="d-flex flex-wrap align-items-center skills-container">
                                                                <span>.Net</span>
                                                                <span>Java</span>
                                                                <span>Node JS</span>
                                                                <span>Javascript</span>
                                                                <span>Angular JS</span>
                                                                <span>PHP</span>
                                                                <span>Laravel</span>
                                                                <span>AWS Server</span>
                                                                <span>Cake PHP</span>
                                                                <span>Ionic</span>
                                                                <span>React</span>
                                                                <span>Vue</span>
                                                                <span>Flutter</span>
                                                            </div>
                                                            <hr>
                                                            <p class="strong">Language Preferred</p>
                                                            <div class="d-flex flex-wrap align-items-center language-container">
                                                                <a class="d-flex mr-3">
                                                                    <img src="assets/img/flag/usa-flag.png" class="flag-width" alt="flag"> 
                                                                    <span class="align-self-center">&nbsp;English</span>
                                                                </a>
                                                                <a class="d-flex mr-3">
                                                                    <img src="assets/img/flag/spain-flag.png" class="flag-width" alt="flag"> 
                                                                    <span class="align-self-center">&nbsp;Spanish</span>
                                                                </a>
                                                                <a class="d-flex">
                                                                    <img src="assets/img/flag/france-flag.png" class="flag-width" alt="flag"> 
                                                                    <span class="align-self-center">&nbsp;French</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                                        <div class="contact-info mb-4">
                                                            <div class="right-big-banner">
                                                                <img src="assets/img/company-8.jpg" class="img" alt="logo"> 
                                                                <p class="project-name">Track Ongoing Project</p>
                                                                <p class="project-date">Started on 19 July 2020</p>
                                                                <button class="btn btn-sm btn-primary mb-2">
                                                                    Details
                                                                </button>
                                                                <p class="text-center font-11"><a class="text-primary" href="">Learn More</a></p>
                                                            </div>
                                                        </div>
                                                        <div class="contact-info mb-2">
                                                            <div class="right-big-banner">
                                                                <img src="assets/img/company-5.jpg" class="img" alt="logo"> 
                                                                <p class="project-name">Track Ongoing Project</p>
                                                                <p class="project-date">Started on 08 August 2020</p>
                                                                <button class="btn btn-sm btn-primary mb-2">
                                                                    Details
                                                                </button>
                                                                <p class="text-center font-11"><a class="text-primary" href="">Learn More</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>         
                                            </div>
                                            <!-- Projects -->
                                            <div class="tab-pane fade" id="underline-project" role="tabpanel" aria-labelledby="underline-project-tab">
                                                <div class="row w-100 m-0">
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-7.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">25 Sep 2019</p>
                                                                <h5 class="card-title">Hightech Software</h5>
                                                                <p class="card-text">Node JS, Angular, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-1.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-2.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-4.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>31%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>40</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>31 Sep 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-8.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">12 June 2019</p>
                                                                <h5 class="card-title">Vision Website</h5>
                                                                <p class="card-text">Java, HTML, CSS, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-7.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-8.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-9.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-10.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>51%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>4</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>31 Dec 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-3.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">25 Sep 2019</p>
                                                                <h5 class="card-title">Innovation</h5>
                                                                <p class="card-text">.Net, Java, Node JS, Javascript, Angular JS</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-11.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-12.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-13.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-14.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>37%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>8</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>20 Dec 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-4.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">27 July 2020</p>
                                                                <h5 class="card-title">Circle WebApp</h5>
                                                                <p class="card-text">Node JS, Angular, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-12.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-13.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-14.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-15.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>91%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>5</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>31 May 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-5.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">11 Oct 2019</p>
                                                                <h5 class="card-title">Linc Software</h5>
                                                                <p class="card-text">Java, HTML, CSS, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-21.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-22.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-23.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-24.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>69%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>4</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>31 Jan 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-6.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">25 Sep 2019</p>
                                                                <h5 class="card-title">Union Banco</h5>
                                                                <p class="card-text">Node JS, Angular, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-23.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-24.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-25.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-26.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>68%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>4</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>25 Feb 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-2.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">25 Sep 2019</p>
                                                                <h5 class="card-title">HT Software</h5>
                                                                <p class="card-text">Java, HTML, CSS, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-25.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-26.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-22.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-28.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>85%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>4</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>20 Oct 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-4 mb-4">
                                                        <div class="card single-project">
                                                            <img src="assets/img/company-7.jpg" class="card-img-top" alt="widget-card-2">
                                                            <div class="card-body">
                                                                <p class="meta-date">25 Sep 2019</p>
                                                                <h5 class="card-title">Hightech Software</h5>
                                                                <p class="card-text">Node JS, Angular, AWS, Cloudinary Platform</p>
                                                                <div class="team">
                                                                    <img src="assets/img/profile-7.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-8.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-9.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                    <img src="assets/img/profile-10.jpg" class="rounded-circle avatar-xxs mr-1">
                                                                </div>
                                                                <div class="meta-info">
                                                                    <div class="meta-action">
                                                                        <div class="meta-bottom-info">
                                                                            <span>Completed :</span> <span>51%</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Team Size :</span><span>4</span>
                                                                        </div>
                                                                        <div class="meta-bottom-info">
                                                                            <span>Deadline :</span><span>31 Dec 2020</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Team -->
                                            <div class="tab-pane fade" id="underline-team" role="tabpanel" aria-labelledby="underline-team-tab">
                                                <div class="row w-100 m-0">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                                        <div class="card single-team">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="user-profile">
                                                                        <img src="assets/img/profile-7.jpg" class="" alt="...">
                                                                        <div class="text-center mt-2">
                                                                            <a href="" class="font-25 text-primary"><i class="lab la-facebook-square"></i></a>
                                                                            <a href="" class="font-25 text-info"><i class="lab la-twitter"></i></a>
                                                                            <a href="" class="font-25 text-danger"><i class="lab la-youtube"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <h5 class="card-user_name">Johny Kilomion</h5>
                                                                        <p class="card-user_occupation">Manager</p>
                                                                        <div class="card-star_rating">
                                                                        <span class="badge badge-primary mb-1">4 Years</span>
                                                                        <span class="badge badge-primary">Java Expert</span>
                                                                        <span class="badge badge-primary">30+ Projects</span>
                                                                        </div>
                                                                        <p class="card-text"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                                        <div class="card single-team">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="user-profile">
                                                                        <img src="assets/img/profile-4.jpg" class="" alt="...">
                                                                        <div class="text-center mt-2">
                                                                            <a href="" class="font-25 text-primary"><i class="lab la-facebook-square"></i></a>
                                                                            <a href="" class="font-25 text-info"><i class="lab la-twitter"></i></a>
                                                                            <a href="" class="font-25 text-danger"><i class="lab la-youtube"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <h5 class="card-user_name">Nora Noyui</h5>
                                                                        <p class="card-user_occupation">Digital Marketing</p>
                                                                        <div class="card-star_rating">
                                                                        <span class="badge badge-primary mb-1">4 Years</span>
                                                                        <span class="badge badge-primary">SEO Expert</span>
                                                                        <span class="badge badge-primary">30+ Projects</span>
                                                                        </div>
                                                                        <p class="card-text"> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                                        <div class="card single-team">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="user-profile">
                                                                        <img src="assets/img/profile-3.jpg" class="" alt="...">
                                                                        <div class="text-center mt-2">
                                                                            <a href="" class="font-25 text-primary"><i class="lab la-facebook-square"></i></a>
                                                                            <a href="" class="font-25 text-info"><i class="lab la-twitter"></i></a>
                                                                            <a href="" class="font-25 text-danger"><i class="lab la-youtube"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <h5 class="card-user_name">Bear Gryllis</h5>
                                                                        <p class="card-user_occupation">UI/UX Designer</p>
                                                                        <div class="card-star_rating">
                                                                        <span class="badge badge-primary mb-1">5 Years</span>
                                                                        <span class="badge badge-primary">Ionic Expert</span>
                                                                        <span class="badge badge-primary">3+ Projects</span>
                                                                        </div>
                                                                        <p class="card-text"> Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                                        <div class="card single-team">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="user-profile">
                                                                        <img src="assets/img/profile-2.jpg" class="" alt="...">
                                                                        <div class="text-center mt-2">
                                                                            <a href="" class="font-25 text-primary"><i class="lab la-facebook-square"></i></a>
                                                                            <a href="" class="font-25 text-info"><i class="lab la-twitter"></i></a>
                                                                            <a href="" class="font-25 text-danger"><i class="lab la-youtube"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <h5 class="card-user_name">Kathrine Lopez</h5>
                                                                        <p class="card-user_occupation">System Admin</p>
                                                                        <div class="card-star_rating">
                                                                        <span class="badge badge-primary mb-1">10 Years</span>
                                                                        <span class="badge badge-primary">.Net Expert</span>
                                                                        <span class="badge badge-primary">20+ Projects</span>
                                                                        </div>
                                                                        <p class="card-text"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters and she is just fantastic </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                                                        <div class="card single-team">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="user-profile">
                                                                        <img src="assets/img/profile-1.jpg" class="" alt="...">
                                                                        <div class="text-center mt-2">
                                                                            <a href="" class="font-25 text-primary"><i class="lab la-facebook-square"></i></a>
                                                                            <a href="" class="font-25 text-info"><i class="lab la-twitter"></i></a>
                                                                            <a href="" class="font-25 text-danger"><i class="lab la-youtube"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <h5 class="card-user_name">Jin Johnson</h5>
                                                                        <p class="card-user_occupation">Web Developer</p>
                                                                        <div class="card-star_rating">
                                                                        <span class="badge badge-primary mb-1">2 Years</span>
                                                                        <span class="badge badge-primary">Angular Expert</span>
                                                                        <span class="badge badge-primary">5+ Projects</span>
                                                                        </div>
                                                                        <p class="card-text"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  </p>
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
    <script src="admindb/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="admindb/assets/js/apps/companies.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>
</html>