<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Administrador</a>
    </div>





    <!-- BARRA SUPERIOR -->
    <ul class="nav navbar-right top-nav">




        <!--<li><a href="">SITE</a></li>-->





        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?= $_SESSION['first_name'] ?>
                <?= $_SESSION['last_name'] ?>
                <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i>Perfil</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Sair</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- FIM BARRA SUPERIOR -->




    <!-- BARRA LATERAL -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">





        	<!-- DASHBOARD -->
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Início</a>
            </li>
            <!-- FIM DASHBOARD -->





            <!-- POSTAGENS -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_drop_down"><i class="fa fa-fw fa-arrows-v"></i> Postagens <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_drop_down" class="collapse">
                    <li>
                        <a href="posts.php">Ver Postagens</a>
                    </li>
                    <li>
                        <a href="posts.php?source=add_post">Nova Postagem</a>
                    </li>
                </ul>
            </li>
            <!-- FIM POSTAGENS -->









            <!-- SERVIÇOS -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#services_drop_down"><i class="fa fa-fw fa-arrows-v"></i> Serviços <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="services_drop_down" class="collapse">
                    <li>
                        <a href="services.php">Ver Serviços</a>
                    </li>
                    <li>
                        <a href="services.php?source=add_service">Novo Serviço</a>
                    </li>
                </ul>
            </li>
            <!-- FIM SERVIÇOS -->

            




            <!-- CATEGORIES -->
            <li>
                <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Categorias</a>
            </li>
            <!-- END CATEGORIES -->


            


            <!-- COMENTÁRIOS -->
            <li class="">
                <a href="comments.php"><i class="fa fa-fw fa-file"></i> Comentários</a>
            </li>
            <!-- FIM COMENTÁRIOS -->





            <!-- USUÁRIOS -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#users_drop_down"><i class="fa fa-fw fa-arrows-v"></i> Usuários <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users_drop_down" class="collapse">
                    <li>
                        <a href="users.php">Todos Usuários</a>
                    </li>
                    <li>
                        <a href="users.php?source=add_user">Adicionar Usuário</a>
                    </li>
                </ul>
            </li>
            <!-- FIM USUÁRIOS -->




            <!-- PERFIL -->
            <li>
                <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>Perfil</a>
            </li>
            <!-- FIM PERFIL -->



        </ul>
    </div>
    <!-- FIM BARRA LATERAL -->
</nav>