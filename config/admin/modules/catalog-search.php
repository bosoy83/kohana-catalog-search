<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'a2' => array(
		'resources' => array(
			'catalog_search_controller' => 'module_controller',
		),
		'rules' => array(
			'allow' => array(
				'controller_access' => array(
					'role' => 'base',
					'resource' => 'catalog_search_controller',
					'privilege' => 'access',
				),
			),
			'deny' => array()
		)
	),
);