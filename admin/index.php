<?php require('includes/admin_header.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

            		<?php require('testes.php') ?>

                <?php boas_vindas_admin() ?>

                <?= mostra_cartoes_de_estatisticas() ?>

                <?= mostra_grafico_de_colunas() ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php require('includes/admin_footer.php'); ?>