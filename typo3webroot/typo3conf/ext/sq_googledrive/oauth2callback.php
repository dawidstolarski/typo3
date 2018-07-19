<?php

require_once('Classes/Utility/GoogleApi/autoload.php');

define('APPLICATION_NAME', 'SQ Google Drive');
define('CREDENTIALS_PATH', '../../credentials/google/drive-api.json');
define('CLIENT_SECRET_PATH', '../../credentials/google/client_secret.json');
define('SCOPES', implode(' ', array(
	\Google_Service_Drive::DRIVE_METADATA_READONLY)
));

if (empty($_GET['code'])) {
	die('Access denied.');
}

$client = new \Google_Client();
$client->setApplicationName(APPLICATION_NAME);
$client->setScopes(SCOPES);
$client->setAuthConfigFile(expandHomeDirectory(CLIENT_SECRET_PATH));
$client->setAccessType('offline');
$client->setApprovalPrompt('force');

$authCode = trim($_GET['code']);

// Exchange authorization code for an access token.
$accessToken = $client->authenticate($authCode);

$credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
// Store the credentials to disk.
if(!file_exists(dirname($credentialsPath))) {
	mkdir(dirname($credentialsPath), 0700, true);
}
file_put_contents($credentialsPath, $accessToken);
printf("Credentials saved to %s<br>", $credentialsPath);


/**
 * Expands the home directory alias '~' to the full path.
 * @param string $path the path to expand.
 * @return string the expanded path.
 */
function expandHomeDirectory($path) {
	$home = dirname(__FILE__) . "/" . $path;
	return $home;
}
