<!--<?php //require('delete_modal.php'); ?>-->

<?php
  if (isset($_POST['check_box_array'])) {
    foreach ($_POST['check_box_array'] as $check_box_value) {
      $bulk_options = $_POST['check_box_array'];
    }
  }
?>

<form action="" method="post">
  <table class="table table-bordered table-hover">
    <div class="row">
      <div id="bulkOptionContainer" class="col-xs-4">
        <select name="bulk_options" id="" class="form-control">
          <option value="select">Opções</option>
          <option value="publish">Publicar</option>
          <option value="draft">Rascunho</option>
          <option value="delete">Excluir</option>
        </select>
      </div>


      <div class="col-xs-4">
        <input type="submit" name="submit" class="btn btn-success" value="Aplicar">
        <!--<a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>-->
      </div>      
    </div>
    <br>

    <thead>
      <tr>
        <th><input type="checkbox" id="select_all_boxes" name=""></th>
        <th style="text-align: center !important;">Título</th>
        <th style="text-align: center !important;">Categoria</th>
        <th style="text-align: center !important;">Imagem</th>
        <th style="text-align: center !important;" colspan="2">Ações</th>
      </tr>
    </thead>

    <tbody>

      <?php
        $query = "SELECT * FROM services ORDER BY service_id DESC;";
        $select_posts = mysqli_query($connection, $query);   


        while ($row = mysqli_fetch_assoc($select_posts)) { 
        	$service_category_id = $row['service_category_id'];
          $service_id = $row['service_id'];  
          ?>


          <tr>
            <td><input type="checkbox" class="" name="check_box_array[]" value="<?= $service_id ?>"></td>

            <td><?= $row['service_title'] ?></td>

            <?php

            	$query = "SELECT * FROM service_categories WHERE service_cat_id = $service_category_id;";

              echo $service_category_id;

              $select_service_categories = mysqli_query($connection, $query);   

              while ($row_2 = mysqli_fetch_assoc($select_service_categories)) {
                $service_category_id = $row_2['service_cat_id'];
                $service_cat_name = $row_2['service_cat_name'];
              }

            ?>

            <td><?= $service_cat_name ?></td>



            <td>
              <img src="../images/<?= $row['service_image'] ?>" alt="Post Image" style="width: 100px;">
            </td>



            <td><a href="posts.php?source=edit_post&p_id=<?= $row['service_id'] ?>">Editar</a></td>


            <td><a href="posts.php?delete=<?= $row['service_id'] ?>">Excluir</a></td>
          </tr>

          <?php

        }

  		?>
    
    </tbody>

  </table>
</form>





<?php

	if (isset($_GET['delete'])) {
		$the_service_id = $_GET['delete'];
		$query = "DELETE FROM posts WHERE service_id = $the_service_id";
		$delete_query = mysqli_query($connection, $query);
		header("Location: posts.php");
	}

?>
