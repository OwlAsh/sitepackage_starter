<?php

/***************
 * Add Content Elements to List
 */
$backupCTypeItems = $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] = array(
	array(
		'Custom Content Elements',
		'--div--'
	),
	array(
		'Hero',
		'sitepackage_starter_hero',
		'i/tt_content_header.gif'
	),
);
foreach ($backupCTypeItems as $key => $value) {
	$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}
unset($key);
unset($value);
unset($backupCTypeItems);

/***************
 * Modify the tt_content TCA
 */
$tca = array(
	'ctrl' => array(
		'requestUpdate' => $TCA['tt_content']['ctrl']['requestUpdate'] . ',icon_type',
		'typeicons' => array(
			'bootstrap_package_panel' => 'tt_content_header.gif',
			'bootstrap_package_listgroup' => 'tt_content_header.gif',
			'bootstrap_package_texticon' => 'tt_content_header.gif',
		),
	),
	'palettes' => array(
		'sitepackage_starter_hero' => array(
			'canNotCollapse' => 1,
			'showitem' => '
				header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
				--linebreak--,
				subheader;LLL:EXT:cms/locallang_ttc.xlf:subheader_formlabel,
				--linebreak--,
				header_link;LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel
			'
		),
	),
	'types' => array(
		'sitepackage_starter_hero' => array(
			'columnsOverrides' => array(
				'bodytext' => array(
					'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
				),
			),
			'showitem' => '
				--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
				--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.headers;sitepackage_starter_hero,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.appearance,
				--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.frames;frames,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
				--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
				--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended,
				--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
				categories
			'
		),
	),
	'columns' => array(),
);
$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

/***************
 * Add subheader to header palette
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'header', '--linebreak--, subheader;LLL:EXT:cms/locallang_ttc.xlf:subheader_formlabel');
