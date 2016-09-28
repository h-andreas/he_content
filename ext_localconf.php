<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'HSE.' . $_EXTKEY,
	'Contentelements',
	array(
		'HeContent' => 'list',
	),
	// non-cacheable actions
	array(
		'HeContent' => 'list',

	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:he_content/Configuration/PageTSconfig/NewContentElementWizard.ts">'
);
