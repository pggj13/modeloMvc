<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/js/bootstrap.min.css">
        <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title">Faça login para Continuar</h1>
                    <?php if (isset($erro) && !empty($erro)): ?>
                        <div class="alert alert-danger">
                            <strong><center><?php echo $erro ?></center></strong>
                        </div>
                    <?php endif; ?>
                    <div class="account-wall">
                        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                             alt="">
                        <form class="form-signin" method="POST">
                            <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                            <input type="password" name="senha" class="form-control" placeholder="Password" required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                Sign in</button>
                            <label class="checkbox pull-left">
                                <input type="checkbox" value="remember-me">
                                Remember me
                            </label>
                            <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                        </form>
                    </div>
                    <a href="#" class="text-center new-account">Create an account </a>
                </div>
            </div>
        </div>
    </body>
</html>
