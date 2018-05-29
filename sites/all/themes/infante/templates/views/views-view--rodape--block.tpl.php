<div class="container">
	
	<img class="img-responsive" src="<?php print file_create_url($view->result[0]->field_field_image[0]['raw']['uri']); ?>">

	<div class="info-infante">

		<div class="col-md-5">
		
			<?php foreach($view->result[0]->field_field_texto as $item):?>

				<?php print $item['rendered']['#markup']?>

			<?php endforeach;?>

		</div>

		<div class="col-md-3">
		
			<div class="phone"><span class="title">Telefone </span><?php print $view->result[0]->field_field_telefone[0]['rendered']['#markup'];?></div>
			
			<div class="fax"><span class="title">Fax </span><?php print $view->result[0]->field_field_fax[0]['rendered']['#markup'];?></div>

		</div>

		<div class="col-md-4">
			
			<img class="img-responsive" src="<?php print file_create_url($view->result[0]->field_field_image_2[0]['raw']['uri']); ?>">

		</div>

	</div>

</div>

<div class="whats-phone">
	
	<i class="fa fa-whatsapp" aria-hidden="true"></i>

	<div class="info">

		<span class="text">Atendimento por whatsapp </span>

		<div class="phone"><?php print $view->result[0]->field_field_atendimento_numero[0]['rendered']['#markup'];?></div>

	</div>

</div>