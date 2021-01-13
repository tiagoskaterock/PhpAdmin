<?php require('includes/admin_header.php'); ?>

<div id="wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">

        <div class="col-lg-12">
      
        	<h1>Usuários</h1>

          <?php show_user_buttons(); ?>
          
          <?php 

            $source;

            if (isset($_GET['source'])) {
              $source = $_GET['source'];
            }
            else{
              $source = "";
            }

            switch ($source) {
              case 'add_user':
                include('includes/add_user.php');
                break;

              case 'edit_user':
                include('includes/edit_user.php');
                break;

              default:
                include('includes/view_all_users.php');
                break;
            }

          ?>

        </div><!-- col-lg-12 -->

      </div><!-- /.row -->

      <?php //show_post_buttons(); ?>
    
    </div><!-- /.container-fluid -->
  
  </div><!-- /#page-wrapper -->

<?php require('includes/admin_footer.php'); ?>