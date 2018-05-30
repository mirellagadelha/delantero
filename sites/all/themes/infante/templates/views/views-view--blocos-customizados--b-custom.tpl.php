<div class="row custom-blocks">

	<div class="first-block col-md-12">
		
		<img class="img-responsive left-image col-md-6" src="<?php print image_style_url('960x530',  $view->result[0]->field_field_image[0]['raw']['uri']); ?>">

		<div class="col-md-6 about-infante">

			<div class="info">
			
				<div class="title"><?php print $view->result[0]->node_title; ?></div>

				<div class="text"><?php print $view->result[0]->field_field_descricao[0]['rendered']['#markup']; ?></div>

				<a class="link btn btn-default" href="<?php print $view->result[0]->field_field_link[0]['raw']['url']?>">Veja Mais</a>

			</div>

		</div>

	</div>

	<div class="second-block col-md-12">
		
		<div class="news-infante col-md-6" style="background-image: url(<?php print image_style_url('960x530', $view->result[0]->field_field_image_2[0]['raw']['uri']); ?>)">

			<div class="news-fields">
			
				<div class="title"><?php print $view->result[0]->field_field_titulo[0]['rendered']['#markup']; ?></div>

				<div class="text"><?php print $view->result[0]->field_field_descricao_2[0]['rendered']['#markup']; ?></div>

			</div>

		</div>

		<div class="news-form col-md-6">
			
			<?php
				
				$block = module_invoke('webform', 'block_view', 'client-block-8');
				
				print render($block['content']);
			?>

		</div>

	</div>

</div>