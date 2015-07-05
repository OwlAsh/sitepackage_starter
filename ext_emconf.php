<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Site Package Example',
	'description' => '',
	'category' => 'templates',
	'version' => '0.9.0',
	'state' => 'stable',
	'clearcacheonload' => 1,
	'author' => 'Morton Jonuschat',
	'author_email' => 'm.jonuschat@mojocode.de',
	'author_company' => 'MoJo Code',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.3.0-7.99.99',
			'css_styled_content' => '7.3.0-7.9.99',
			'vhs' => '2.3.0-2.99.99'
		),
		'conflicts' => array(),
		'suggests' => array(
			'realurl' => '2.0.0-2.99.99'
		)
	)
);
