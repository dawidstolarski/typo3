<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SinusQuadrat.' . $_EXTKEY,
	'Drivefilelist',
	array(
		'Group' => 'list, getFilesInFolder',
		
	),
	// non-cacheable actions
	array(
		'Group' => 'list, getFilesInFolder',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SinusQuadrat.' . $_EXTKEY,
	'Drivefilesearch',
	array(
		'Group' => 'search',
		
	),
	// non-cacheable actions
	array(
		'Group' => 'search',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SinusQuadrat.' . $_EXTKEY,
	'Calendareventlist',
	array(
		'Group' => 'calendar',
		
	),
	// non-cacheable actions
	array(
		'Group' => 'calendar',
		
	)
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

// eID for ajax request to get children(files & folders) in specific folder
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['driveFileList'] = 'EXT:sq_googledrive/Classes/Utility/DriveFileList.php';