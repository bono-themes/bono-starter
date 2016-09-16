<?php

return array(
    'meta' => array(
        'name' => 'Starter',
        'description' => 'Starter theme Bono CMS',
        'version' => '1.1',
        'author' => 'NGS Labs'
    ),

	// Those plugins are defined in /config/view.php
	'plugins' => array(
		'jquery', 
		'bootstrap.blue', 
		'bootstrap.core',
        'font-awesome'
	),
	
	// Style sheets and scripts for this theme to load
	'theme' => array(
		'stylesheets' => array(
			'/css/styles.css',
		),
		'scripts' => array(
			'/js/app.js'
		)
	)
);