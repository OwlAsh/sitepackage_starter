<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Site Package Example',
	'description' => '',
	'category' => 'templates',
	'version' => '1.0.0',
	'state' => 'stable',
	'clearcacheonload' => 1,
	'author' => 'Morton Jonuschat',
	'author_email' => 'm.jonuschat@mojocode.de',
	'author_company' => 'MoJo Code',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99'
		),
		'conflicts' => array(),
		'suggests' => array()
	)
);
