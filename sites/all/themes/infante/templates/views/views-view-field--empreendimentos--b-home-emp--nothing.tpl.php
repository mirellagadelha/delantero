<div class="row carousel-empreendimentos col-md-6">

	<div class="icons-list">

		<?php if (isset($row->field_field_diferenciais)): ?>

			<?php foreach ($row->field_field_diferenciais as $key => $item): ?>

				<div class="title-icon">

					<?php $fc = entity_load_single('field_collection_item', $item['raw']['value']); ?>

					<?php

						$icon = array(
				    
				    		'#theme' => 'icon',
				    
				    		'#bundle' => $fc->field_icone['und'][0]['bundle'],
				    
				    		'#icon' => $fc->field_icone['und'][0]['icon'],
				  		);
				  		
				  		print drupal_render($icon);

					?>

					<div class="subtitle item-<?php print $key?>"><?php print $fc->field_legenda['und'][0]['value']; ?></div>

				</div>

			<?php endforeach;?>

		<?php endif;?>

	</div>

	<div class="content-image">

		<div class="image">
			
			<img src="<?php print image_style_url('311x243', $row->field_field_image[0]['raw']['uri']); ?>">

		</div>

		<a href="">Ver Mais</a>

	</div>

	<div class="footer-info">
		
		<div class="local">

			<span>Local: <?php print $row->field_field_local[0]['rendered']['#markup']; ?></span>

			<div class="title"><?php print $row->node_title;?></div>

		</div>

	</div>

</div>



