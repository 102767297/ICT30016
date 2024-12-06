<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="z6llz5VIwWR6jMZttPsaPq5ATK5521Y0xvyYurO9">

    <title>Biotective DRC </title>
    <link rel="stylesheet" href="http://13.213.0.173/vendor/icheck-bootstrap/icheck-bootstrap.min.css">
    <style>
        body {
            /* font-family: 'Nunito', sans-serif; */
            background: url('images/biotective-bg.png');
        }
    </style>

    <!-- Add the Clickjacking detection script here -->
    <script>
        if (self !== top) {
            // Clickjacking detected
            alert('Clickjacking Attack has been detected! Please do something!');
            console.log('Clickjacking Attack detected.');

            // Redirect back to the login page to prevent the attack from proceeding
            window.location.href = window.location.href; // This will reload the page and stop interaction in the iframe
        }
    </script>



    <link rel="stylesheet" href="http://13.213.0.173/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://13.213.0.173/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://13.213.0.173/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="http://13.213.0.173/vendor/icheck-bootstrap/icheck-bootstrap.min.css">
    <style>
        body {
            /* font-family: 'Nunito', sans-serif; */
            background: asset('images/biotective-bg.png');
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

<body class="login-page">

    <div id="overlay">
        <div id="overlay-inner">
            <div id="overlay-content">
                <span id="spinner"></span>
            </div>
        </div>
    </div>


    <div class="login-box">
        <div class="login-logo">
            <a href="http://13.213.0.173/home">
                <img src="http://13.213.0.173/images/BioTectiveLogo.png" height="50">
                <b>BioTective</b>DRC

            </a>
        </div>

        <div class="card card-outline card-primary">

            <div class="card-header ">
                <h3 class="card-title float-none text-center">
                    Sign in to start your session </h3>
            </div>

            <div class="card-body login-card-body ">
                <h4 style="text-align: center;">Dr John Clinic</h4>
                <form action="<?php echo e(route('login.post')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="name" class="form-control" placeholder="Username" required autofocus>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z" />
                        </svg>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="col-5">
                            <button type="submit" class="btn btn-block btn-flat btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512" style="margin-right: 5px;">
                                    <path fill="#ffffff" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z" />
                                </svg>
                                Sign In
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer ">

                <p class="my-0">
                    <a href="http://13.213.0.173/password/reset">
                        I forgot my password
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script src="http://13.213.0.173/vendor/jquery/jquery.min.js"></script>
    <script src="http://13.213.0.173/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://13.213.0.173/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://13.213.0.173/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="http://13.213.0.173/vendor/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\ClickjackingPreventationAdvance\resources\views/login.blade.php ENDPATH**/ ?>