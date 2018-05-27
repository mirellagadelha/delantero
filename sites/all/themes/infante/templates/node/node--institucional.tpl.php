<?php if (!$page): ?>

	<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?php endif; ?>

	<div class="content"<?php print $content_attributes; ?>>

		<div class="image-highlighted">
			
			<img src="<?php print file_create_url($node->field_image['und'][0]['uri']); ?>"/>
	    
	    </div>

	    <div class="body">
	    	
	    	<?php print $node->body['und'][0]['value']; ?>

	    </div>

	    <div class="video">

			<video
				id="video-final"
			    class="video-js vjs-default-skin"
				controls 
				preload="auto" 
			    width="640" height="264"
			    data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "<?php print $node->field_video['und'][0]['value']?>"}] }'
			>
  			</video>

	    </div>

	</div>

<?php if (!$page): ?>

	</article> <!-- /.node -->

<?php endif; ?>