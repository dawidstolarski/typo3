<?php
namespace SinusQuadrat\SqGoogledrive\Utility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Core\Bootstrap;
use TYPO3\CMS\Extbase\Service\TypoScriptService;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;
use TYPO3\CMS\Frontend\Utility\EidUtility;
/**
 * This class is basically taken from:
 * https://lbrmedia.net/ajaxexample/
 *
 * I would not recommend to use it like this, it is just here to demostrate
 * that even with a crippled frontend bootstrap there will be no major performance gain...
 */
class DriveFileList {
	/**
	 * @var array
	 */
	protected $pluginConfiguration;
	/**
	 * @var Bootstrap
	 */
	protected $bootstrap;
	/**
	 * Bootstrap Extbase
	 *
	 * @return string
	 */
	public function run() {
		return $this->bootstrap->run('', $this->pluginConfiguration);
	}
	/**
	 * Initialize frontend environment
	 */
	public function __construct() {
		if (empty($_POST['tx_sqgoogledrive_drivefilelist']['action'])) {
			$_POST['tx_sqgoogledrive_drivefilelist']['action'] = 'getFilesInFolder';
		}
		if (empty($_POST['tx_sqgoogledrive_drivefilelist']['controller'])) {
			$_POST['tx_sqgoogledrive_drivefilelist']['controller'] = 'Group';
		}
		if (empty($_POST['tx_sqgoogledrive_drivefilelist']['format'])) {
			$_POST['tx_sqgoogledrive_drivefilelist']['format'] = 'json';
		}
		$this->bootstrap = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Core\\Bootstrap');
		$feUserObj = EidUtility::initFeUser();
		$pageId = GeneralUtility::_GET('id') ?: 1;
		/** @var TypoScriptFrontendController $typoScriptFrontendController */
		$typoScriptFrontendController = GeneralUtility::makeInstance(
			'TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController',
			$GLOBALS['TYPO3_CONF_VARS'],
			$pageId,
			0,
			TRUE
		);
		$GLOBALS['TSFE'] = $typoScriptFrontendController;
		$typoScriptFrontendController->connectToDB();
		$typoScriptFrontendController->fe_user = $feUserObj;
		$typoScriptFrontendController->id = $pageId;
		$typoScriptFrontendController->determineId();
		$typoScriptFrontendController->getCompressedTCarray();
		$typoScriptFrontendController->initTemplate();
		$typoScriptFrontendController->getConfigArray();
		$typoScriptFrontendController->includeTCA();
		/** @var TypoScriptService $typoScriptService */
		$typoScriptService = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Service\\TypoScriptService');
		// $pluginConfiguration = $typoScriptService->convertTypoScriptArrayToPlainArray($typoScriptFrontendController->tmpl->setup['plugin.']['tx_sq_googledrive.']);
		// Set configuration to call the plugin
		$this->pluginConfiguration = array(
			'pluginName' => 'Drivefilelist',
			'vendorName' => 'SinusQuadrat',
			'extensionName' => 'SqGoogledrive',
			'controller' => $_POST['tx_sqgoogledrive_drivefilelist']['controller'],
			'action' => $_POST['tx_sqgoogledrive_drivefilelist']['action'],
			'format' => $_POST['tx_sqgoogledrive_drivefilelist']['format'],
			'mvc' => array(
				'requestHandlers' => array('TYPO3\CMS\Extbase\Mvc\Web\FrontendRequestHandler' => 'TYPO3\CMS\Extbase\Mvc\Web\FrontendRequestHandler')
			),
			'settings' => array()/*,
			'persistence' => array('storagePid' => $pluginConfiguration['persistence']['storagePid'])*/
		);
	}
}

$eid = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('SinusQuadrat\\SqGoogledrive\\Utility\\DriveFileList');
echo $eid->run();