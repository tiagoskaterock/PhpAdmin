<?php require('includes/admin_header.php'); ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">

        <div class="col-lg-12">
      
        	<h1>Postagens</h1>

          <?php //show_post_buttons(); ?>
          
          <?php 

            $source;

            if (isset($_GET['source'])) {
              $source = $_GET['source'];
            }
            else{
              $source = "";
            }

            switch ($source) {
              case 'add_service':
                include('includes/add_service.php');
                break;

              case 'edit_service':
                include('includes/edit_service.php');
                break;

              default:
                include('includes/view_all_services.php');
                break;
            }

          ?>

        </div><!-- col-lg-12 -->

      </div><!-- /.row -->
    
    </div><!-- /.container-fluid -->
  
  </div><!-- /#page-wrapper -->

<?php require('includes/admin_footer.php'); ?>