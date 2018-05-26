
<?php
//dpm($view);

?>
<div class="row custom-blocks">

	<div class="first-block">
		
		<img src="<?php print image_style_url(); ?>">

		<div class="about-infante">
			
			<div class="title"><?php print $view->result[0]->node_title; ?></div>

			<div class="text"><?php print $view->result[0]->field_field_descricao[0]['rendered']['#markup']; ?></div>

			<a class="link" href="<?php print $row->result[0]->field_field_link[0]['raw']['url']?>">Veja Mais</a>

		</div>

	</div>

	<div class="second-block">
		
		<div class="news-infante">
			
			<div class="title"><?php print $view->result[0]->field_field_titulo[0]['rendered']['#markup']; ?></div>

			<div class="text"><?php print $view->result[0]->field_field_descricao2[0]['rendered']['#markup']; ?></div>

		</div>

	</div>

</div>