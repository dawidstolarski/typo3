<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Drivefilelist',
	'Google Drive List Plugin'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Drivefilesearch',
	'Google Drive Search Plugin'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Calendareventlist',
	'Google Calendar Event Plugin'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'SQ Google Drive');

if (!isset($GLOBALS['TCA']['fe_groups']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['fe_groups']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['fe_groups']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['fe_groups']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['fe_groups']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:tx_sqgoogledrive.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups', $tempColumns, 1);
}

$tmp_sq_googledrive_columns = array(

	'customerlogo' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:tx_sqgoogledrive_domain_model_group.customerlogo',
		'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			'customerlogo',
				array(
					'maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					// custom configuration for displaying fields in the overlay/reference table
					// to use the imageoverlayPalette instead of the basicoverlayPalette
					'foreign_types' => array(
						'0' => array(
						'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
						--palette--;;filePalette'
					),
					\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
						'showitem' => '
						--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
						--palette--;;filePalette'
					),
				),
			),
			$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
		),
	),
	'consultantid' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:tx_sqgoogledrive_domain_model_group.consultantid',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		)
	),
	'searchresultpage' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:tx_sqgoogledrive_domain_model_group.searchresultpage',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		)
	),
	'googledrivesettings' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:tx_sqgoogledrive_domain_model_group.googledrivesettings',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups',$tmp_sq_googledrive_columns);

$GLOBALS['TCA']['fe_groups']['types']['Tx_SqGoogledrive_Group']['showitem'] = $TCA['fe_groups']['types']['0']['showitem'];
$GLOBALS['TCA']['fe_groups']['types']['Tx_SqGoogledrive_Group']['showitem'] .= ',--div--;LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:tx_sqgoogledrive_domain_model_group,';
$GLOBALS['TCA']['fe_groups']['types']['Tx_SqGoogledrive_Group']['showitem'] .= 'customerlogo, consultantid, searchresultpage, googledrivesettings';

$GLOBALS['TCA']['fe_groups']['columns'][$TCA['fe_groups']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:sq_googledrive/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_SqGoogledrive_Group','Tx_SqGoogledrive_Group');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_groups', $GLOBALS['TCA']['fe_groups']['ctrl']['type'],'','after:' . $TCA['fe_groups']['ctrl']['label']);
