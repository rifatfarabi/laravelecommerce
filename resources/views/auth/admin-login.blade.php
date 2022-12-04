<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="8oS3LhkfvQTyg18oWachoRchclJmP3yXZ4saI1mI">

    <title>ecommerce</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://63566-834dfe43a2582636.quickadminpanel.com/css/adminltev3.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    </head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
    <div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="{{ route('admin.login')}}">
                Admin Panel
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                Login
            </p>


            <form action="https://63566-834dfe43a2582636.quickadminpanel.com/login" method="POST">
                <input type="hidden" name="_token" value="8oS3LhkfvQTyg18oWachoRchclJmP3yXZ4saI1mI">
                <div class="form-group">
                    <input id="email" type="email" class="form-control" required autocomplete="email" autofocus placeholder="Email" name="email" value="">

                                    </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                                    </div>


                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            Login
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


                            <p class="mb-1">
                    <a href="https://63566-834dfe43a2582636.quickadminpanel.com/password/reset">
                        Forgot your password?
                    </a>
                </p>
                        <p class="mb-1">

            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
    </body>

</html>
