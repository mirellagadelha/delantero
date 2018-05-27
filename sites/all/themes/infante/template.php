<?php

function infante_preprocess_page(&$variables, $data){

    $libraries_to_include = array('video-js');

    foreach ($libraries_to_include as $library_name) {

        drupal_add_library('infante', $library_name);

    }

    if (isset($variables['node'])) {
    	
    	$variables['theme_hook_suggestions'][] = 'page__node_' . $variables['node']->type;	
  	
  	}

}