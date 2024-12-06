<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="z6llz5VIwWR6jMZttPsaPq5ATK5521Y0xvyYurO9">

    <title>Dashboard </title>
    <link rel="stylesheet" href="http://13.213.0.173/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://13.213.0.173/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://13.213.0.173/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background: #eee;
        }

        .card-box {
            position: relative;
            color: #fff;
            padding: 20px 10px 40px;
            margin: 20px 0px;
        }

        .card-box:hover {
            text-decoration: none;
            color: #f1f1f1;
        }

        .card-box:hover .icon i {
            font-size: 100px;
            transition: 1s;
            -webkit-transition: 1s;
        }

        .card-box .inner {
            padding: 5px 10px 0 10px;
        }

        .card-box h3 {
            font-size: 27px;
            font-weight: bold;
            margin: 0 0 8px 0;
            white-space: nowrap;
            padding: 0;
            text-align: left;
        }

        .card-box p {
            font-size: 15px;
        }

        .card-box .icon {
            position: absolute;
            top: auto;
            bottom: 5px;
            right: 5px;
            z-index: 0;
            font-size: 72px;
            color: rgba(0, 0, 0, 0.15);
        }

        .card-box .card-box-footer {
            position: absolute;
            left: 0px;
            bottom: 0px;
            text-align: center;
            padding: 3px 0;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(0, 0, 0, 0.1);
            width: 100%;
            text-decoration: none;
        }

        .card-box:hover .card-box-footer {
            background: rgba(0, 0, 0, 0.3);
        }

        .bg-blue {
            background-color: #00c0ef !important;
        }

        .bg-green {
            background-color: #00a65a !important;
        }

        .bg-orange {
            background-color: #f39c12 !important;
        }

        .bg-red {
            background-color: #d9534f !important;
        }
    </style>

    <script>
        function showLoadingOverlay() {
            document.querySelector("#overlay").classList.add("loading");
        }

        function hideLoadingOverlay() {
            document.querySelector("#overlay").classList.remove("loading");
        }
    </script>

    <style>
        #overlay.loading {
            display: block;
            z-index: 1500;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            background: rgba(0, 0, 0, 0.4);
        }

        #overlay-inner {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            position: absolute;
        }

        #overlay-content {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        #spinner {
            width: 75px;
            height: 75px;
            display: inline-block;
            border-width: 2px;
            border-color: rgba(255, 255, 255, 0.05);
            border-top-color: #fff;
            animation: spin 1s infinite linear;
            border-radius: 100%;
            border-style: solid;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="layout-fixed layout-footer-fixed sidebar-mini">

    <div id="overlay">
        <div id="overlay-inner">
            <div id="overlay-content">
                <span id="spinner"></span>
            </div>
        </div>
    </div>


    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16" style="margin-left:15px">
                            <path fill="#595959" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                        </svg>
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown" id="chat-notification">
                    <a href="" class="nav-link" data-toggle="dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" style="margin-right:5px">
                            <path fill="#949494" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c0 0 0 0 0 0s0 0 0 0s0 0 0 0c0 0 0 0 0 0l.3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z" />
                        </svg>
                        <span class="badge navbar-badge text-bold text-xs badge-pill"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="adminlte-dropdown-content"></div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">
                            New messages appear here...
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown" id="user-notification">
                    <a href="" class="nav-link" data-toggle="dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16" style="margin-right:5px">
                            <path fill="#000000" d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                        </svg>
                        <span class="badge navbar-badge text-bold text-xs badge-pill"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="adminlte-dropdown-content"></div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">
                            All New notifications appear here...
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <span>
                            Dr John Clinic &ensp;
                            ZAP
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-footer">
                            <a class="btn btn-default btn-flat float-right btn-block"
                                href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off text-red"></i>
                                Log Out
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
            <a href="#"
                class="brand-link ">
                <img src="http://13.213.0.173/images/BioTectiveLogo.png"
                    alt="BioTectiveDRC"
                    class="brand-image img-circle elevation-3"
                    style="opacity:.8">
                <span class="brand-text font-weight-light ">
                    <b>BioTective</b>DRC
                </span>
            </a>

            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column "
                        data-widget="treeview" role="menu">
                        <li class="nav-item has-treeview ">
                            <a class="nav-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" width="16px" height="16px" viewBox="0 0 32 32" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve">
                                    <path d="M9.731,14.075c-1.387,0.252 -2.676,0.921 -3.687,1.932c-1.309,1.309 -2.044,3.084 -2.044,4.935l0,4.039c0,1.657 1.343,3 3,3c4.184,-0 13.816,-0 18,-0c1.657,-0 3,-1.343 3,-3l0,-4.039c0,-1.851 -0.735,-3.626 -2.044,-4.935c-1.011,-1.011 -2.3,-1.68 -3.687,-1.932c0.468,-0.939 0.731,-1.997 0.731,-3.117c0,-3.863 -3.137,-7 -7,-7c-3.863,0 -7,3.137 -7,7c0,1.12 0.263,2.178 0.731,3.117Zm11.169,1.88c-1.262,1.239 -2.993,2.003 -4.9,2.003c-1.907,0 -3.638,-0.764 -4.9,-2.003c-0.04,0.005 -0.08,0.007 -0.12,0.007c-1.321,0 -2.588,0.525 -3.521,1.459c-0.934,0.934 -1.459,2.201 -1.459,3.521c0,0 0,4.039 0,4.039c0,0.552 0.448,1 1,1l18,-0c0.552,-0 1,-0.448 1,-1c-0,-0 0,-4.039 0,-4.039c0,-1.32 -0.525,-2.587 -1.459,-3.521c-0.933,-0.934 -2.2,-1.459 -3.521,-1.459c-0.04,0 -0.08,-0.002 -0.12,-0.007Zm-4.9,-9.997c2.76,0 5,2.241 5,5c0,2.76 -2.24,5 -5,5c-2.76,0 -5,-2.24 -5,-5c0,-2.759 2.24,-5 5,-5Z" />
                                    <path d="M20,20.008l-1,-0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1l1,-0l0,1c-0,0.552 0.448,1 1,1c0.552,-0 1,-0.448 1,-1l0,-1l1,-0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-1,-0l0,-1c-0,-0.552 -0.448,-1 -1,-1c-0.552,-0 -1,0.448 -1,1l0,1Z" />
                                </svg>
                                <p>
                                    Patients
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16" style="margin-left:100px">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                </svg>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>List</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>Create Patient</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>Add Patient From App</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>Merge Patient</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708z" />
                                </svg>
                                <p>Hyper Events</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.854 14.854a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V3.5A2.5 2.5 0 0 1 6.5 1h8a.5.5 0 0 1 0 1h-8A1.5 1.5 0 0 0 5 3.5v9.793l3.146-3.147a.5.5 0 0 1 .708.708z" />
                                </svg>
                                <p>Hypo Events</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                <p>Appointments</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital-fill" viewBox="0 0 16 16">
                                    <path d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9m0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25" />
                                </svg>
                                <p>Medication</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>
                                <p>My Working Group</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a class="nav-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-walking" viewBox="0 0 16 16">
                                    <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6.44 3.752A.75.75 0 0 1 7 3.5h1.445c.742 0 1.32.643 1.243 1.38l-.43 4.083a1.8 1.8 0 0 1-.088.395l-.318.906.213.242a.8.8 0 0 1 .114.175l2 4.25a.75.75 0 1 1-1.357.638l-1.956-4.154-1.68-1.921A.75.75 0 0 1 6 8.96l.138-2.613-.435.489-.464 2.786a.75.75 0 1 1-1.48-.246l.5-3a.75.75 0 0 1 .18-.375l2-2.25Z" />
                                    <path d="M6.25 11.745v-1.418l1.204 1.375.261.524a.8.8 0 0 1-.12.231l-2.5 3.25a.75.75 0 1 1-1.19-.914zm4.22-4.215-.494-.494.205-1.843.006-.067 1.124 1.124h1.44a.75.75 0 0 1 0 1.5H11a.75.75 0 0 1-.531-.22Z" />
                                </svg>
                                <p>Coaching
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16" style="margin-left:90px">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                    </svg>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>Coaches</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>Activities</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header ">
                            COMMUNICATIONS
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                    <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15" />
                                </svg>
                                <p>Messaging</p>
                            </a>
                        </li>

                        <li class="nav-header ">
                            MANAGEMENT
                        </li>

                        <li class="nav-item has-treeview ">
                            <a class="nav-link" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                </svg>
                                <p>Organizations
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16" style="margin-left:60px">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                                    </svg>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        </svg>
                                        <p>My Organizations</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header ">
                            ACCOUNT SETTINGS
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                                </svg>
                                <p>Change Password</p>
                            </a>
                        </li>

                        <li class="nav-header ">
                            OTHERS
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                                </svg>
                                <p>Tutorials</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper ">
            <div class="content-header">
                <div class="container-fluid">
                    <h1>Dashboard</h1>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-6 col-sm-6">
                            <div class="card-box bg-orange">
                                <div class="inner">
                                    <h3> 13 </h3>
                                    <p> No. of Patients Profile </p>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 448 512" style="margin-bottom: 20px;">
                                        <path d="M277.4 12C261.1 4.5 243.1 0 224 0c-53.7 0-99.5 33.1-118.5 80h81.2l90.7-68zM342.5 80c-7.9-19.5-20.7-36.2-36.5-49.5L240 80h102.5zM224 256c70.7 0 128-57.3 128-128 0-5.5-1-10.7-1.6-16H97.6c-.7 5.3-1.6 10.5-1.6 16 0 70.7 57.3 128 128 128zM80 299.7V512h128.3l-98.5-221.5A132.8 132.8 0 0 0 80 299.7zM0 464c0 26.5 21.5 48 48 48V320.2C18.9 344.9 0 381.3 0 422.4V464zm256-48h-55.4l42.7 96H256c26.5 0 48-21.5 48-48s-21.5-48-48-48zm57.6-128h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.7-5.8-72.9-16h-7.4l42.7 96H256c44.1 0 80 35.9 80 80 0 18.1-6.3 34.6-16.4 48H400c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" />
                                    </svg>
                                </div>
                                <a href="#" class="card-box-footer">View More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-6 col-sm-6">
                            <div class="card-box bg-green">
                                <div class="inner">
                                    <h3> 10 </h3>
                                    <p> No. of Professionals </p>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 448 512" style="margin-bottom: 20px;">
                                        <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z" />
                                    </svg>
                                </div>
                                <a href="#" class="card-box-footer">View More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="card-box bg-gray">
                                <div class="inner">
                                    <h3> 0 </h3>
                                    <p> Practice Group </p>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" viewBox="0 0 640 512" style="margin-bottom: 12px;">
                                        <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" />
                                    </svg>
                                </div>
                                <a href="#" class="card-box-footer">View More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="card-box bg-blue">
                                <div class="inner">
                                    <h3> 0 </h3>
                                    <p> Hypo Events </p>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 320 512" style="margin-bottom: 20px;">
                                        <path d="M313.6 392.3L209.6 504.3c-9.5 10.2-25.7 10.2-35.2 0L70.4 392.3C56.2 377 67.1 352 88 352H152V80H68a12 12 0 0 1 -8.5-3.5l-56-56C-4 12.9 1.3 0 12 0H208c13.3 0 24 10.7 24 24v328h64c20.9 0 31.9 25 17.6 40.3z" />
                                    </svg>
                                </div>
                                <a href="#" class="card-box-footer">View More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="card-box bg-red">
                                <div class="inner">
                                    <h3> 0 </h3>
                                    <p> Hyper Events </p>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" viewBox="0 0 320 512" style="margin-bottom: 20px;">
                                        <path d="M313.6 119.7L209.6 7.7c-9.5-10.2-25.7-10.2-35.2 0L70.4 119.7C56.2 135 67.1 160 88 160H152v272H68a12 12 0 0 0 -8.5 3.5l-56 56C-4 499.1 1.3 512 12 512H208c13.3 0 24-10.7 24-24V160h64c20.9 0 31.9-25 17.6-40.3z" />
                                    </svg>
                                </div>
                                <a href="#" class="card-box-footer">View More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="http://13.213.0.173/vendor/jquery/jquery.min.js"></script>
    <script src="http://13.213.0.173/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://13.213.0.173/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://13.213.0.173/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="http://13.213.0.173/vendor/adminlte/dist/js/adminlte.min.js"></script>
    <script type="module" src="http://13.213.0.173/js/app.js"></script>
    <script type="module">
        window.MessengerUtils.init({
            notification: "chat-notification",
            aws_bucket: "bisson-bucket",
        });

        window.Messenger.init({
            provider: {
                id: "53",
                name: "ZAP",
                org_id: "12",
                profession: "Examiner",
            },
            supported_file_mime_types: {
                image: "jpg,jpeg,png,bmp,gif,webp",
                document: "csv,doc,docx,json,pdf,ppt,pptx,rar,rtf,txt,xls,xlsx,xml,zip,7z",
            },
        });

        window.MessengerCall.init({});
        $(document).ready(function() {
            $("#user-notification").on("click", function() {
                // 
                $.ajax({
                    type: "GET",
                    // url:"notifications/get",
                    url: "#",
                }).done(function(data) {
                    $('#user-notification').find('.badge').hide();
                });
            });
        });
    </script>

    <script>
        class _AdminLTE_NavbarNotification {

            /**
             * Constructor.
             *
             * target: The id of the target notification link.
             */
            constructor(target) {
                this.target = target;
            }

            /**
             * Update the notification link.
             *
             * data: An object with the new data.
             */
            update(data) {
                // Check if target and data exists.

                let t = $(`li#${this.target}`);

                if (t.length <= 0 || !data) {
                    return;
                }

                let badge = t.find(".navbar-badge");
                let icon = t.find(".nav-link > i");
                let dropdown = t.find(".adminlte-dropdown-content");

                // Update the badge label.

                if (data.label && data.label > 0) {
                    badge.html(data.label);
                } else {
                    badge.empty();
                }

                // Update the badge color.

                if (data.label_color) {
                    badge.removeClass((idx, classes) => {
                        return (classes.match(/(^|\s)badge-\S+/g) || []).join(' ');
                    }).addClass(`badge-${data.label_color} badge-pill`);
                }

                // Update the icon color.

                if (data.icon_color) {
                    icon.removeClass((idx, classes) => {
                        return (classes.match(/(^|\s)text-\S+/g) || []).join(' ');
                    }).addClass(`text-${data.icon_color}`);
                }

                // Update the dropdown content.

                if (data.dropdown && dropdown.length > 0) {
                    dropdown.html(data.dropdown);
                }
            }
        }
    </script>

    <script>
        $(() => {

            // Method to get new notification data from the configured url.

            let updateNotification = (nLink) => {
                // Make an ajax call to the configured url. The response should be
                // an object with the new data. The supported properties are:
                // 'label', 'label_color', 'icon_color' and 'dropdown'.

                $.ajax({
                        url: "#"
                    })
                    .done((data) => {
                        nLink.update(data);
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR, textStatus, errorThrown);
                    });
            };

            // First load of the notification data.

            let nLink = new _AdminLTE_NavbarNotification("user-notification");
            updateNotification(nLink);

            // Periodically update the notification.

            setInterval(updateNotification, 30000, nLink);
        })
    </script>

    <script>
        console.log('Hi!');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\ICT30016\ClickjackingPreventationAdvance\resources\views/dashboard.blade.php ENDPATH**/ ?>