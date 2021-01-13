<?php require('tiago_conecta.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Área Administrativa</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="text-center">
                <h1>Área Administrativa</h1>
            </div>
            <br>

            <div class="col-xs-0 col-sm-3 col-md-3"></div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-xs-12 col-sm-6 col-md-6" style="position: -webkit-sticky; position: sticky; top: -70px;">

                <!-- Login -->
                <div class="well">

                    <h4>Login</h4>

                    <form action="login.php" method="post">
                        
                        <div class="form-group">
                            <!-- name -->
                            <input name="user_name" type="text" class="form-control" placeholder="Usuário" id="user_name" style="margin-bottom: 5px;"> 
                        </div>

                        <div class="input-group">
                            <!-- password -->
                            <input name="password" type="password" class="form-control" placeholder="Senha" id="password">  
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="login" type="submit">
                                    Entrar
                                </button>
                            </span>          
                        </div>

                    </form>
                    <!-- /.input-group -->
                </div>
                <!-- end login -->

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <p class="text-center">Copyright &copy; <a href="http://inovatech.inf.br/">INOVATECH</a>  <?= date("Y") ?></p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>