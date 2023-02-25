<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login | System</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('assets/admin/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/horizontal-menu/horizontal-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/admin/css/darktheme.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/admin/images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/neptune.png') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app horizontal-menu app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="">Login | System</a>
            </div>

            <p class="auth-description">Please sign-in to your account and continue to the dashboard.</p>

            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="auth-credentials m-b-xxl">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control m-b-md" id="username"
                        aria-describedby="username" placeholder="e.g. robert" required>

                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" aria-describedby="password"
                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required>
                </div>

                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="divider"></div>
            </form>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
</body>

</html>
