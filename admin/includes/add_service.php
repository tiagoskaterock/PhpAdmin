<?php

	if (isset($_POST['create_service'])) {
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		$service_title = $_POST['title'];
		$service_category_id = $_POST['post_category'];
		
		$service_image = $_FILES['post_image']['name'];
		$service_image_temp = $_FILES['post_image']['tmp_name'];

		$service_content = $_POST['post_content'];


		if ($post_content == "") {
			$post_content = "No content yet, please write something";
		}
		

		move_uploaded_file($service_image_temp, "../images/$service_image");

		$query = "INSERT INTO `services` (`service_id`, `service_category_id`, `service_title`, `service_image`, `service_content`) VALUES (NULL, '$service_category_id', '$service_title', '$service_image', '$service_content'); ";

		$create_service_query = mysqli_query($connection, $query);

		confirm_query($create_service_query);

		header("Location: posts.php");
	
	}

?>

<h2>Criar um Novo Serviço</h2>

<form action="" method="post" enctype="multipart/form-data">
	
	<!-- TÍTULO -->
	<div class="form-group">
		<label for="title">Título</label>
		<input type="text" class="form-control" name="title" required>
	</div>
	<!-- FIM TÍTULO -->







	<!-- CATEGORIA SERVIÇO -->
	<div class="form-group">

		<label for="post_category_id">Categoria</label><br>

		<select name="post_category" id="post_category" class="form-control">

		<?php

		$query = "SELECT * FROM service_categories";

      $select_service_categories = mysqli_query($connection, $query);      

      confirm_query($select_service_categories);

      while ($row = mysqli_fetch_assoc($select_service_categories)) {
        $service_cat_id = $row['service_cat_id'];
        $service_cat_name = $row['service_cat_name'];
        ?>
        <option value="<?= $service_cat_id ?>"><?= $service_cat_name ?></option>	
        <?php
      }

     ?>

		</select>

	</div>
	<!-- FIM CATEGORIA SERVIÇO -->









	<!-- SERVIÇO IMAGEM -->
	<div class="form-group">
		<label for="post_image">Imagem</label>
		<input type="file" class="form-control" name="post_image" required>
	</div>
	<!-- FIM SERVIÇO IMAGEM -->







	<!-- SERVIÇO CONTEÚDO -->
	<div class="form-group">
		<label>Conteúdo</label>
		<!--<div id="editor" name="post_content"></div>-->
		
		<textarea class="form-control" name="post_content" required cols="30" rows="5" id="editor">Digite seu texto aqui...</textarea>
	</div>
	<!-- FIM SERVIÇO CONTEÚDO -->






	<!-- SUBMIT -->
	<div class="form-group">		
		<input type="submit" name="create_service" value="Create Service" class="btn btn-primary">
	</div>



</form>