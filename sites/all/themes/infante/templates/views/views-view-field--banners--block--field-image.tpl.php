<div class="row super-banner" style="background-image: url(<?php print image_style_url('1929x512', $row->field_field_image[0]['raw']['uri']); ?>)">

	<div class="container">

		<div class="fields-banner">

			<?php if (isset($row->field_field_legenda[0]['rendered']['#markup'])) : ?>

				<div class="text"><?php print $row->field_field_legenda[0]['rendered']['#markup']; ?></div>

			<?php endif; ?>

			<?php if (isset($row->field_field_link[0]['rendered']['#element']['url'])) : ?>

				<div class="link">

					<a class="btn btn-default-blue" href="<?php print $row->field_field_link[0]['rendered']['#element']['url']; ?>"><?php print $row->field_field_link[0]['rendered']['#element']['title']; ?></a>

				</div>

			<?php endif ?>

		</div>

	</div>

</div>



