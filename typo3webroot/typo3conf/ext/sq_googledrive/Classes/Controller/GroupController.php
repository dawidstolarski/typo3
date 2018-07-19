<?php
namespace SinusQuadrat\SqGoogledrive\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use SinusQuadrat\SqGoogledrive\Utility\Utility;
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('sq_googledrive') . 'Classes/Utility/GoogleApi/autoload.php');
define('APPLICATION_NAME', 'SQ Google Drive');
define('CREDENTIALS_PATH', PATH_typo3conf . 'credentials/google/drive-api.json');
define('CLIENT_SECRET_PATH', PATH_typo3conf . 'credentials/google/client_secret.json');
define('SCOPES', implode(' ', array(
			\Google_Service_Drive::DRIVE_READONLY,
			\Google_Service_Calendar::CALENDAR_READONLY
		)));
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * GroupController
 */
class GroupController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * groupRepository
	 *
	 * @var \SinusQuadrat\SqGoogledrive\Domain\Repository\GroupRepository
	 * @inject
	 */
	protected $groupRepository = NULL;

	/**
	 * groupRepository
	 *
	 * @var \SinusQuadrat\SqGoogledrive\Utility\Utility
	 * @inject
	 */
	protected $utility = NULL;

	/**
	 * !!! This property behavior has changed in [see], was formerly named $supportedFormats
	 *
	 * @var array
	 * @see https://git.typo3.org/Packages/TYPO3.Flow.git?a=commit;h=03b6d85916e46ed8b2e99bc549d7248957dca935
	 */
	protected $supportedMediaTypes = array('text/html', 'application/json');

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$this->utility = $this->objectManager->get('SinusQuadrat\\SqGoogledrive\\Utility\\Utility');
		$currentUserGroup = $this->utility->getCurrentUserGroup();
		$driveSettings = $currentUserGroup->getGoogledrivesettings();
		$settings_json = (array) json_decode($driveSettings);
		$readerId = $settings_json['readerId'];
		// Get the API client and construct the service object.
		$client = $this->getClient();
		$service = new \Google_Service_Drive($client);
		// Print the names and IDs for up to 10 files.
		$optParams = array(
			'maxResults' => 100,
			'q' => '"' . $readerId . '" in readers'
		);
		$results = $service->files->listFiles($optParams);
		$this->view->assign('files', $results->getItems());
	}

	/**
	 * action getFilesInFolder
	 *
	 * @return json
	 */
	public function getFilesInFolderAction() {
		$folderId = isset($_REQUEST['folderId']) ? $_REQUEST['folderId'] : '0BzlVSZvAoESwfnpCTXV0MDVMVk5kdkd2YXdMbm5INTN5cHVPNXFTaEdKZjdLeDVSQ29IS2s';
		$this->utility = $this->objectManager->get('SinusQuadrat\\SqGoogledrive\\Utility\\Utility');
		$currentUserGroup = $this->utility->getCurrentUserGroup();
		$driveSettings = $currentUserGroup->getGoogledrivesettings();
		$settings_json = (array) json_decode($driveSettings);
		$readerId = $settings_json['readerId'];
		// Get the API client and construct the service object.
		$client = $this->getClient();
		$service = new \Google_Service_Drive($client);
		// Print the names and IDs for up to 10 files.
		$optParams = array(
			'maxResults' => 100,
			'q' => '"' . $folderId . '" in parents and "' . $readerId . '" in readers'
		);
		$results = $service->files->listFiles($optParams);
		foreach ($results->getItems() as $file) {
			$customFiles[] = array(
				'id' => $file->getId(),
				'title' => $file->getTitle(),
				'modifiedDate' => $file->getModifiedDate(),
				'webContentLink' => $file->getWebContentLink(),
				'folder' => $file->getMimeType() == 'application/vnd.google-apps.folder',
				'lazy' => $file->getMimeType() == 'application/vnd.google-apps.folder'
			);
		}
		$this->view->setVariablesToRender(array('files'));
		$this->view->assign('files', $customFiles);
	}

	/**
	 * action search
	 *
	 * @return void
	 */
	public function searchAction() {
		$sword = isset($_REQUEST['tx_news_pi1']['search']['subject']) ? $_REQUEST['tx_news_pi1']['search']['subject'] : '';
		$this->utility = $this->objectManager->get('SinusQuadrat\\SqGoogledrive\\Utility\\Utility');
		$currentUserGroup = $this->utility->getCurrentUserGroup();
		$driveSettings = $currentUserGroup->getGoogledrivesettings();
		$settings_json = (array) json_decode($driveSettings);
		$readerId = $settings_json['readerId'];
		// Get the API client and construct the service object.
		$client = $this->getClient();
		$service = new \Google_Service_Drive($client);
		// Print the names and IDs for up to 10 files.
		$optParams = array(
			'maxResults' => 100,
			'q' => 'fullText contains "' . $sword . '" and mimeType != "application/vnd.google-apps.folder" and "' . $readerId . '" in readers'
		);
		$results = $service->files->listFiles($optParams);
		$this->view->assign('files', $results->getItems());
	}

	/**
	 * action calendar
	 *
	 * @return json
	 */
	public function calendarAction() {
		$this->utility = $this->objectManager->get('SinusQuadrat\\SqGoogledrive\\Utility\\Utility');
		$currentUserGroup = $this->utility->getCurrentUserGroup();
		$driveSettings = $currentUserGroup->getGoogledrivesettings();
		$settings_json = (array) json_decode($driveSettings);
		$calendarId = $settings_json['calendarId'];
		// Get the API client and construct the service object.
		$client = $this->getClient();
		$service = new \Google_Service_Calendar($client);
		// Print upcoming events
		$optParams = array(
			'maxResults' => 100,
			'orderBy' => 'startTime',
			'singleEvents' => TRUE
		);
		$results = $service->events->listEvents($calendarId, $optParams);
		foreach ($results->getItems() as $event) {
			$start = $event->getStart()->getDateTime() ? $event->getStart()->getDateTime() : $event->getStart()->getDate();
			$hasTime = $event->getStart()->getDateTime() ? true : false;
			$end = $event->getEnd()->getDateTime() ? $event->getEnd()->getDateTime() : $event->getEnd()->getDate();
			$customEvents[] = array(
				'title' => $event->getSummary(),
				'start' => $start,
				'end' => $end,
				'hasTime' => $hasTime
			);
			if (new \DateTime('now') < new \DateTime($event->getEnd()->getDateTime())) {
				$upcomingEvents[] = $event;
			}
		}
		$this->view->assign('eventsJSON', json_encode($customEvents));
		$this->view->assign('upcomingEvents', $upcomingEvents);
	}

	/**
	 * Returns an authorized API client.
	 *
	 * @return Google_Client the authorized client object
	 */
	protected function getClient() {
		$client = new \Google_Client();
		$client->setApplicationName(APPLICATION_NAME);
		$client->setScopes(SCOPES);
		$client->setAuthConfigFile(CLIENT_SECRET_PATH);
		$client->setAccessType('offline');
		$client->setApprovalPrompt('force');
		// Load previously authorized credentials from a file.
		$credentialsPath = CREDENTIALS_PATH;
		if (file_exists($credentialsPath)) {
			$accessToken = file_get_contents($credentialsPath);
			$client->setAccessToken($accessToken);
			// Refresh the token if it's expired.
			if ($client->isAccessTokenExpired()) {
				$client->refreshToken($client->getRefreshToken());
				file_put_contents($credentialsPath, $client->getAccessToken());
			}
			return $client;
		} else {
			// Request authorization from the user.
			$authUrl = $client->createAuthUrl();
			printf('Follow the link to authorize Google Drive Access:<br><a href="%1$s">%1$s</a><br>', $authUrl);
			die;
		}
	}

}