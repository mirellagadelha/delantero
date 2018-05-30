<?php if (!$page): ?>

	<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php endif; ?>

	<div class="content"<?php print $content_attributes; ?>>

		<div class="image-highlighted" style="background-image: url(<?php print image_style_url('1920x506', $node->field_image['und'][0]['uri']); ?>)">
	    
	    </div>

	    <div class="container first-section">

	    	<?php if(isset($node->field_marca_empreendimento['und'][0]['uri'])):?>

			    <div class="image-brand">
					
					<img class="img-responsive" src="<?php print file_create_url($node->field_marca_empreendimento['und'][0]['uri']); ?>"/>
			    
			    </div>

			<?php endif;?>

		    <?php if(isset($node->body['und'][0]['value'])):?>

		    	<div class="description">
		    	
		    		<?php print $node->body['und'][0]['value']; ?>

		    	</div>

		    <?php endif;?>

		    <?php if (isset($node->field_diferenciais['und'])): ?>

		   		<div class="icons-list col-md-12">

					<?php foreach ($node->field_diferenciais['und'] as $key => $item): ?>

						<div class="title-icon col-md-6">

							<?php $fc = entity_load_single('field_collection_item', $item['value']); ?>

							<?php

								$icon = array(
						    
						    		'#theme' => 'icon',
						    
						    		'#bundle' => $fc->field_icone['und'][0]['bundle'],
						    
						    		'#icon' => $fc->field_icone['und'][0]['icon'],
						  		);
						  		
						  		print drupal_render($icon);

							?>

							<div class="subtitle"><?php print $fc->field_legenda['und'][0]['value']; ?></div>

						</div>

					<?php endforeach;?>

				</div>

			<?php endif;?>

			<div class="link">
			
				<a class="download btn btn-default-blue" href="<?php print file_create_url($node->field_tabela_de_vendas['und'][0]['uri']);?>" target="_blank">Baixar Tabela de Vendas</a>

			</div>

		</div>

		<div class="gallery">

			<?php

				$view = views_embed_view('empreendimentos','b_gallery');
	        
	        	print $view;

			?>

		</div>

		<div class="container second-section">
			
			<h2>Tour do Bairro</h2>

			<div class="col-md-6 gallery-tour">
					
				<?php

					$view = views_embed_view('empreendimentos','b_gallery_2');
			        
			        print $view;

				?>

			</div>
					
			<?php if (isset($node->field_lista['und'])): ?>

				<div class="col-md-6 list-tour">

					<div class="tour-fields">

						<?php foreach ($node->field_lista['und'] as $key => $item): ?>

							<div class="title-icon">

								<?php $fc = entity_load_single('field_collection_item', $item['value']); ?>

								<?php

									$icon = array(
							    
							    		'#theme' => 'icon',
							    
							    		'#bundle' => $fc->field_icone['und'][0]['bundle'],
							    
							    		'#icon' => $fc->field_icone['und'][0]['icon'],
							  		);
							  		
							  		print drupal_render($icon);

								?>

								<div class="subtitle"><?php print $fc->field_legenda['und'][0]['value']; ?></div>

							</div>

						<?php endforeach;?>

					</div>

				</div>

			<?php endif;?>
			
			<div class="col-md-6 form-interest">
				
				<h2>Tenho Interesse</h2>

				<?php
				
					$block = module_invoke('webform', 'block_view', 'client-block-63');
				
					print render($block['content']);
				
				?>

			</div>

			<?php if (isset($node->field_imagem_folder['und']) && isset($node->field_arquivo['und'])):?>

				<div class="col-md-6 download-folder">
					
					<div class="folder" style="background-image: url(<?php print file_create_url($node->field_imagem_folder['und'][0]['uri']); ?>)">

						<a class="download btn btn-default-blue" href="<?php print file_create_url($node->field_arquivo['und'][0]['uri']);?>" target="_blank">Baixar Folder</a>

					</div>

				</div>

			<?php endif;?>

		</div>

		<div class="location">

			<div class="location-fields">

				<i class="fa fa-map-marker" aria-hidden="true"></i>
				
				<h1>LOCALIZAÇÃO</h1>

				<div class="link">

					<a class="btn btn-default" href="#">Abrir no Mapas</a>

				</div>

			</div>

			<div class="location-gmap">

				<?php print  render($content['field_localizacao']); ?>

			</div>

		</div>

	</div>

<?php if (!$page): ?>

	</article> <!-- /.node -->

<?php endif; ?>