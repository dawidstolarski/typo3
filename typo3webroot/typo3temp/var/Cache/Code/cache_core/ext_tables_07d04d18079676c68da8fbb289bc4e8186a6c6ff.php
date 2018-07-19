<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES;
global $_EXTKEY;

/**
 * Extension: core
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/core/ext_tables.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can define which tables are allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = [
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_BE_USER_SECTION => [
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SYSFOLDER => [
        //  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
        // In CMS context it's NOT a viewable page. Can contain any element.
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_RECYCLER => [
        // Doktype 255 is a recycle-bin.
        'allowedTables' => '*'
    ],
    'default' => [
        'allowedTables' => 'pages,sys_category,sys_file_reference,sys_file_collection',
        'onlyAllowedTables' => false
    ],
];

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_MODULES'] = [
    'web' => 'list',
    'file' => '',
    'user' => '',
    'tools' => '',
    'system' => '',
    'help' => '',
    '_configuration' => [
        'web' => [
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_web.xlf',
            'name' => 'web',
            'iconIdentifier' => 'module-web'
        ],
        'file' => [
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_file.xlf',
            'navigationFrameModule' => 'file_navframe',
            'name' => 'file',
            'workspaces' => 'online,custom',
            'iconIdentifier' => 'module-file'
        ],
        'user' => [
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_usertools.xlf',
            'name' => 'user',
            'iconIdentifier' => 'status-user-backend'
        ],
        'tools' => [
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_admintools.xlf',
            'name' => 'tools',
            'iconIdentifier' => 'module-tools'
        ],
        'system' => [
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_system.xlf',
            'name' => 'system',
            'iconIdentifier' => 'module-system'
        ],
        'help' => [
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_help.xlf',
            'name' => 'help',
            'iconIdentifier' => 'module-help'
        ]
    ]
];

// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'typo3-pagetree');

/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = [];

/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:lang/Resources/Private/Language/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:lang/Resources/Private/Language/locallang_csh_be_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:lang/Resources/Private/Language/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:lang/Resources/Private/Language/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:lang/Resources/Private/Language/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:lang/Resources/Private/Language/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:lang/Resources/Private/Language/locallang_csh_corebe.xlf');
// Web > Info
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:lang/Resources/Private/Language/locallang_csh_web_info.xlf');
// Web > Func
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_func', 'EXT:lang/Resources/Private/Language/locallang_csh_web_func.xlf');

if (TYPO3_MODE === 'BE' || TYPO3_MODE === 'FE' && isset($GLOBALS['BE_USER'])) {
    // extJS theme
    $GLOBALS['TBE_STYLES']['extJS']['theme'] = 'EXT:core/Resources/Public/ExtJs/xtheme-t3skin.css';
}

/**
 * Extension: extbase
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/extbase/ext_tables.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extbase\Scheduler\Task::class] = [
    'extension' => 'extbase',
    'title' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.name',
    'description' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:task.description',
    'additionalFields' => \TYPO3\CMS\Extbase\Scheduler\FieldProvider::class
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkFlexFormValue'][] = \TYPO3\CMS\Extbase\Hook\DataHandler\CheckFlexFormValue::class;

/**
 * Extension: install
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register report module additions
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Install\Report\InstallStatusReport::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Install\Report\SecurityStatusReport::class;

    // Only add the environment status report if not in CLI mode
    if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_CLI)) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Install\Report\EnvironmentStatusReport::class;
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'extinstall',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::index',
            'access' => 'admin',
            'name' => 'system_extinstall',
            'icon' => 'EXT:install/Resources/Public/Icons/module-install.svg',
            'labels' => 'LLL:EXT:install/Resources/Private/Language/BackendModule.xlf'
        ]
    );
}

/**
 * Extension: frontend
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/frontend/ext_tables.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Add allowed records to pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('pages_language_overlay,tt_content,sys_template,sys_domain,backend_layout');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:frontend/Resources/Private/Language/locallang_csh_weblayout.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:frontend/Resources/Private/Language/locallang_csh_webinfo.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Frontend\Controller\PageInformationController::class,
        null,
        'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_page'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Frontend\Controller\TranslationStatusController::class,
        null,
        'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:mod_tx_cms_webinfo_lang'
    );
}

/**
 * Extension: info
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/info/ext_tables.php
 */

$_EXTKEY = 'info';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'info',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Info\Controller\InfoModuleController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_info',
            'icon' => 'EXT:info/Resources/Public/Icons/module-info.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_web_info.xlf'
        ]
    );
}

/**
 * Extension: info_pagetsconfig
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/info_pagetsconfig/ext_tables.php
 */

$_EXTKEY = 'info_pagetsconfig';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\InfoPagetsconfig\Controller\InfoPageTyposcriptConfigController::class,
        null,
        'LLL:EXT:info_pagetsconfig/Resources/Private/Language/locallang.xlf:mod_pagetsconfig'
    );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_info', 'EXT:info_pagetsconfig/Resources/Private/Language/locallang_csh_webinfo.xlf');

/**
 * Extension: extensionmanager
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Extensionmanager',
        'tools',
        'extensionmanager',
        '',
        [
            'List' => 'index,unresolvedDependencies,ter,showAllVersions,distributions',
            'Action' => 'toggleExtensionInstallationState,installExtensionWithoutSystemDependencyCheck,removeExtension,downloadExtensionZip,downloadExtensionData,reloadExtensionData',
            'Configuration' => 'showConfigurationForm,save,saveAndClose',
            'Download' => 'checkDependencies,installFromTer,installExtensionWithoutSystemDependencyCheck,installDistribution,updateExtension,updateCommentForUpdatableVersions',
            'UpdateScript' => 'show',
            'UpdateFromTer' => 'updateExtensionListFromTer',
            'UploadExtensionFile' => 'form,extract',
            'Distribution' => 'show'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:extensionmanager/Resources/Public/Icons/module-extensionmanager.svg',
            'labels' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf',
        ]
    );

    // Register extension status report system
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
        \TYPO3\CMS\Extensionmanager\Report\ExtensionStatus::class;
}

/**
 * Extension: lang
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/lang/ext_tables.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

    // Register the backend module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Lang',
        'tools',
        'language',
        'after:extensionmanager',
        [
            'Language' => 'listLanguages, listTranslations, getTranslations, updateLanguage, updateTranslation, activateLanguage, deactivateLanguage, removeLanguage',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:lang/Resources/Public/Icons/module-lang.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

/**
 * Extension: setup
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/setup/ext_tables.php
 */

$_EXTKEY = 'setup';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'user',
        'setup',
        'after:task',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '::mainAction',
            'access' => 'group,user',
            'name' => 'user_setup',
            'icon' => 'EXT:setup/Resources/Public/Icons/module-setup.svg',
            'labels' => 'LLL:EXT:setup/Resources/Private/Language/locallang_mod.xlf'
        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_user_setup',
        'EXT:setup/Resources/Private/Language/locallang_csh_mod.xlf'
    );

    $GLOBALS['TYPO3_USER_SETTINGS'] = [
        'columns' => [
            'realName' => [
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_realName',
                'table' => 'be_users',
                'csh' => 'beUser_realName',
                'max' => 80
            ],
            'email' => [
                'type' => 'email',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:beUser_email',
                'table' => 'be_users',
                'csh' => 'beUser_email',
                'max' => 80
            ],
            'emailMeAtLogin' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:emailMeAtLogin',
                'csh' => 'emailMeAtLogin'
            ],
            'password' => [
                'type' => 'password',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPassword',
                'table' => 'be_users',
                'csh' => 'newPassword',
            ],
            'password2' => [
                'type' => 'password',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:newPasswordAgain',
                'table' => 'be_users',
                'csh' => 'newPasswordAgain',
            ],
            'passwordCurrent' => [
                'type' => 'password',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordCurrent',
                'table' => 'be_users',
                'csh' => 'passwordCurrent',
            ],
            'avatar' => [
                'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
                'type' => 'avatar',
                'table' => 'be_users',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ],
            'lang' => [
                'type' => 'select',
                'itemsProcFunc' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '->renderLanguageSelect',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:language',
                'csh' => 'language'
            ],
            'startModule' => [
                'type' => 'select',
                'itemsProcFunc' => \TYPO3\CMS\Setup\Controller\SetupModuleController::class . '->renderStartModuleSelect',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:startModule',
                'csh' => 'startModule'
            ],
            'thumbnailsByDefault' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showThumbs',
                'csh' => 'showThumbs'
            ],
            'titleLen' => [
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:maxTitleLen',
                'csh' => 'maxTitleLen'
            ],
            'edit_RTE' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_RTE',
                'csh' => 'edit_RTE'
            ],
            'edit_docModuleUpload' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:edit_docModuleUpload',
                'csh' => 'edit_docModuleUpload'
            ],
            'showHiddenFilesAndFolders' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:showHiddenFilesAndFolders',
                'csh' => 'showHiddenFilesAndFolders'
            ],
            'copyLevels' => [
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:copyLevels',
                'csh' => 'copyLevels'
            ],
            'recursiveDelete' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:recursiveDelete',
                'csh' => 'recursiveDelete'
            ],
            'resetConfiguration' => [
                'type' => 'button',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfiguration',
                'buttonlabel' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resetConfigurationButton',
                'csh' => 'reset',
                'confirm' => true,
                'confirmData' => [
                    'message' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:setToStandardQuestion',
                    'jsCodeAfterOk' => 'document.getElementById(\'setValuesToDefault\').value = 1; document.getElementById(\'SetupModuleController\').submit();'
                ]
            ],
            'resizeTextareas_Flexible' => [
                'type' => 'check',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:resizeTextareas_Flexible',
                'csh' => 'resizeTextareas_Flexible'
            ],
            'resizeTextareas_MaxHeight' => [
                'type' => 'text',
                'label' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:flexibleTextareas_MaxHeight',
                'csh' => 'flexibleTextareas_MaxHeight'
            ],
        ],
        'showitem' => '--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:personal_data,realName,email,emailMeAtLogin,avatar,lang,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:passwordHeader,passwordCurrent,password,password2,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:opening,startModule,
				--div--;LLL:EXT:setup/Resources/Private/Language/locallang.xlf:editFunctionsTab,edit_RTE,resizeTextareas_Flexible,resizeTextareas_MaxHeight,titleLen,thumbnailsByDefault,edit_docModuleUpload,showHiddenFilesAndFolders,copyLevels,recursiveDelete,resetConfiguration'
    ];
}

/**
 * Extension: saltedpasswords
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/saltedpasswords/ext_tables.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Add context sensitive help (csh) for scheduler task
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_txsaltedpasswords', 'EXT:saltedpasswords/Resources/Private/Language/locallang_csh_saltedpasswords.xlf');

/**
 * Extension: func
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/func/ext_tables.php
 */

$_EXTKEY = 'func';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'func',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Func\Controller\PageFunctionsController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_func',
            'icon' => 'EXT:func/Resources/Public/Icons/module-func.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_web_func.xlf'
        ]
    );
}

/**
 * Extension: wizard_crpages
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/wizard_crpages/ext_tables.php
 */

$_EXTKEY = 'wizard_crpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \TYPO3\CMS\WizardCrpages\Controller\CreatePagesWizardModuleFunctionController::class,
        null,
        'LLL:EXT:wizard_crpages/Resources/Private/Language/locallang.xlf:wiz_crMany'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_crpages/Resources/Private/Language/locallang_csh.xlf'
    );
}

/**
 * Extension: wizard_sortpages
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/wizard_sortpages/ext_tables.php
 */

$_EXTKEY = 'wizard_sortpages';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_func',
        \TYPO3\CMS\WizardSortpages\View\SortPagesWizardModuleFunction::class,
        null,
        'LLL:EXT:wizard_sortpages/Resources/Private/Language/locallang.xlf:wiz_sort'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_web_func',
        'EXT:wizard_sortpages/Resources/Private/Language/locallang_csh.xlf'
    );
}

/**
 * Extension: about
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.About',
        'help',
        'about',
        'top',
        [
            'About' => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:about/Resources/Public/Icons/module-about.svg',
            'labels' => 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.About',
        'help',
        'aboutmodules',
        'after:about',
        [
            'Modules' => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:about/Resources/Public/Icons/module-aboutmodules.svg',
            'labels' => 'LLL:EXT:about/Resources/Private/Language/Modules/aboutmodules.xlf'
        ]
    );
}

/**
 * Extension: backend
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/backend/ext_tables.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Register as a skin
$GLOBALS['TBE_STYLES']['skins']['backend'] = [
    'name' => 'backend',
    'stylesheetDirectories' => [
        'css' => 'EXT:backend/Resources/Public/Css/'
    ]
];

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'layout',
        'top',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Backend\Controller\PageLayoutController::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_layout',
            'icon' => 'EXT:backend/Resources/Public/Icons/module-page.svg',
            'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod.xlf'
        ]
    );

    // Register BackendLayoutDataProvider for PageTs
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = \TYPO3\CMS\Backend\Provider\PageTsBackendLayoutDataProvider::class;
}

/**
 * Extension: belog
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/belog/ext_tables.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Register backend modules, but not in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // Module Web->Info->Log
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_info',
        \TYPO3\CMS\Belog\Module\BackendLogModuleBootstrap::class,
        null,
        'Log'
    );

    // Module Tools->Log
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Belog',
        'system',
        'log',
        '',
        [
            'Tools' => 'index,deleteMessage',
            'WebInfo' => 'index',
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:belog/Resources/Public/Icons/module-belog.svg',
            'labels' => 'LLL:EXT:belog/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

/**
 * Extension: beuser
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/beuser/ext_tables.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Module System > Backend Users
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Beuser',
        'system',
        'tx_Beuser',
        'top',
        [
            'BackendUser' => 'index, addToCompareList, removeFromCompareList, compare, online, terminateBackendUserSession',
            'BackendUserGroup' => 'index'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:beuser/Resources/Public/Icons/module-beuser.svg',
            'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod.xlf'
        ]
    );

    // Module System > Access
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Beuser',
        'system',
        'tx_Permission',
        'top',
        [
            'Permission' => 'index, edit, update'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:beuser/Resources/Public/Icons/module-permission.svg',
            'labels' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf',
            'navigationComponentId' => 'typo3-pagetree'
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418730] = \TYPO3\CMS\Beuser\ContextMenu\ItemProvider::class;
}

/**
 * Extension: context_help
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/context_help/ext_tables.php
 */

$_EXTKEY = 'context_help';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:context_help/Resources/Private/Language/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:context_help/Resources/Private/Language/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:context_help/Resources/Private/Language/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages_language_overlay', 'EXT:context_help/Resources/Private/Language/locallang_csh_pageslol.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('static_template', 'EXT:context_help/Resources/Private/Language/locallang_csh_statictpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysdomain.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:context_help/Resources/Private/Language/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:context_help/Resources/Private/Language/locallang_csh_ttcontent.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_reference', 'EXT:context_help/Resources/Private/Language/locallang_csh_sysfilereference.xlf');

/**
 * Extension: cshmanual
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/cshmanual/ext_tables.php
 */

$_EXTKEY = 'cshmanual';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Cshmanual',
        'help',
        'cshmanual',
        'top',
        [
            'Help' => 'index,all,detail',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:cshmanual/Resources/Public/Icons/module-cshmanual.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_help_cshmanual.xlf',
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook']['cshmanual'] = \TYPO3\CMS\Cshmanual\Service\JavaScriptService::class . '->addJavaScript';
}

/**
 * Extension: documentation
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/documentation/ext_tables.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Registers a Backend Module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Documentation',
        'help',
        'documentation',
        'top',
        [
            'Document' => 'list, download, fetch',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:documentation/Resources/Public/Icons/module-documentation.svg',
            'labels' => 'LLL:EXT:documentation/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

/**
 * Extension: filelist
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Filelist',
        'file',
        'list',
        '',
        [
            'FileList' => 'index, search',
        ],
        [
            'access' => 'user,group',
            'workspaces' => 'online,custom',
            'icon' => 'EXT:filelist/Resources/Public/Icons/module-filelist.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_file_list.xlf'
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418731] = \TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FileProvider::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418732] = \TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FilemountsProvider::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418733] = \TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FileStorageProvider::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418734] = \TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FileDragProvider::class;
}

/**
 * Extension: form
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/form/ext_tables.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register the backend module Web->Forms
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Form',
        'web',
        'formbuilder',
        '',
        [
            'FormManager' => 'index, show, create, duplicate, references, delete',
            'FormEditor' => 'index, saveForm, renderFormPage, renderRenderableOptions',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:form/Resources/Public/Icons/module-form.svg',
            'labels' => 'LLL:EXT:form/Resources/Private/Language/locallang_module.xlf',
            'navigationComponentId' => '',
            'inheritNavigationComponentFromMainModule' => false
        ]
    );
}

/**
 * Extension: impexp
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/impexp/ext_tables.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['taskcenter']['impexp'][\TYPO3\CMS\Impexp\Task\ImportExportTask::class] = [
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_csh.xlf:.alttitle',
        'description' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_csh.xlf:.description',
        'icon' => 'EXT:impexp/Resources/Public/Images/export.gif'
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_tx_impexp', 'EXT:impexp/Resources/Private/Language/locallang_csh.xlf');

    $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418735] = \TYPO3\CMS\Impexp\ContextMenu\ItemProvider::class;
}

/**
 * Extension: indexed_search
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/indexed_search/ext_tables.php
 */

$_EXTKEY = 'indexed_search';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.IndexedSearch',
        'web',
        'isearch',
        '',
        [
            'Administration' => 'index,pages,externalDocuments,statistic,statisticDetails,deleteIndexedItem,saveStopwordsKeywords,wordDetail',
        ],
        [
            'access' => 'admin',
            'icon'   => 'EXT:indexed_search/Resources/Public/Icons/module-indexed_search.svg',
            'labels' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('index_config');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('index_config', 'EXT:indexed_search/Resources/Private/Language/locallang_csh_indexcfg.xlf');

/**
 * Extension: lowlevel
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/lowlevel/ext_tables.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'dbint',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Lowlevel\View\DatabaseIntegrityView::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_dbint',
            'workspaces' => 'online',
            'icon' => 'EXT:lowlevel/Resources/Public/Icons/module-dbint.svg',
            'labels' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod.xlf'
        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'config',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Lowlevel\View\ConfigurationView::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_config',
            'workspaces' => 'online',
            'icon' => 'EXT:lowlevel/Resources/Public/Icons/module-config.svg',
            'labels' => 'LLL:EXT:lowlevel/Resources/Private/Language/locallang_mod_configuration.xlf'
        ]
    );
}

/**
 * Extension: recordlist
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'list',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Recordlist\RecordList::class . '::mainAction',
            'access' => 'user,group',
            'name' => 'web_list',
            'icon' => 'EXT:recordlist/Resources/Public/Icons/module-list.svg',
            'labels' => 'LLL:EXT:lang/Resources/Private/Language/locallang_mod_web_list.xlf'
        ]
    );

    // register element browsers
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['db'] =  \TYPO3\CMS\Recordlist\Browser\DatabaseBrowser::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file'] =  \TYPO3\CMS\Recordlist\Browser\FileBrowser::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['folder'] =  \TYPO3\CMS\Recordlist\Browser\FolderBrowser::class;
}

/**
 * Extension: reports
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/reports/ext_tables.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Reports',
        'system',
        'txreportsM1',
        '',
        [
            'Report' => 'index,detail'
        ],
        [
            'access' => 'admin',
            'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
            'labels' => 'LLL:EXT:reports/Resources/Private/Language/locallang.xlf'
        ]
    );
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = [];
    }
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'] = array_merge(
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status'],
        [
            'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_title',
            'icon' => 'EXT:reports/Resources/Public/Icons/module-reports.svg',
            'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_report_description',
            'report' => \TYPO3\CMS\Reports\Report\Status\Status::class
        ]
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Reports\Report\Status\Typo3Status::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Reports\Report\Status\SystemStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Reports\Report\Status\SecurityStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['configuration'][] = \TYPO3\CMS\Reports\Report\Status\ConfigurationStatus::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['fal'][] = \TYPO3\CMS\Reports\Report\Status\FalStatus::class;
}

/**
 * Extension: scheduler
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/scheduler/ext_tables.php
 */

$_EXTKEY = 'scheduler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Add module
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'system',
        'txschedulerM1',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Scheduler\Controller\SchedulerModuleController::class . '::mainAction',
            'access' => 'admin',
            'name' => 'system_txschedulerM1',
            'icon' => 'EXT:scheduler/Resources/Public/Icons/module-scheduler.svg',
            'labels' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_mod.xlf'
        ]
    );

    // Add context sensitive help (csh) to the backend module
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        '_MOD_system_txschedulerM1',
        'EXT:scheduler/Resources/Private/Language/locallang_csh_scheduler.xlf'
    );
}

/**
 * Extension: sv
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/sv/ext_tables.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['sv']['services'] = [
        'title' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_title',
        'description' => 'LLL:EXT:sv/Resources/Private/Language/locallang.xlf:report_description',
        'icon' => 'EXT:sv/Resources/Public/Images/service-reports.png',
        'report' => \TYPO3\CMS\Sv\Report\ServicesListReport::class
    ];
}

/**
 * Extension: sys_note
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/sys_note/ext_tables.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('sys_note');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_note', 'EXT:sys_note/Resources/Private/Language/locallang_csh_sysnote.xlf');

/**
 * Extension: tstemplate
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'ts',
        '',
        '',
        [
            'routeTarget' => \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateModuleController::class . '::mainAction',
            'access' => 'admin',
            'name' => 'web_ts',
            'icon' => 'EXT:tstemplate/Resources/Public/Icons/module-tstemplate.svg',
            'labels' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_mod.xlf'
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateConstantEditorModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:constantEditor'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateInformationModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:infoModify'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateObjectBrowserModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:objectBrowser'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
        'web_ts',
        \TYPO3\CMS\Tstemplate\Controller\TemplateAnalyzerModuleFunctionController::class,
        null,
        'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:templateAnalyzer'
    );
}

/**
 * Extension: viewpage
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3/sysext/viewpage/ext_tables.php
 */

$_EXTKEY = 'viewpage';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // Module Web->View
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TYPO3.CMS.Viewpage',
        'web',
        'view',
        'after:layout',
        [
            'ViewModule' => 'show'
        ],
        [
            'icon' => 'EXT:viewpage/Resources/Public/Icons/module-viewpage.svg',
            'labels' => 'LLL:EXT:viewpage/Resources/Private/Language/locallang_mod.xlf',
            'access' => 'user,group'
        ]
    );
}

/**
 * Extension: gridelements
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/gridelements/ext_tables.php
 */

$_EXTKEY = 'gridelements';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;



if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$_EXTCONF = unserialize($_EXTCONF);

if (TYPO3_MODE === 'BE') {

    include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('gridelements') . 'Classes/Backend/TtContent.php');

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] = 'GridElementsTeam\\Gridelements\\Hooks\\PageRenderer->addJSCSS';

    $GLOBALS['TBE_STYLES']['skins']['gridelements']['name'] = 'gridelements';
    $GLOBALS['TBE_STYLES']['skins']['gridelements']['stylesheetDirectories']['gridelements_structure'] = 'EXT:' . ($_EXTKEY) . '/Resources/Public/Backend/Css/Skin/';

    if ($_EXTCONF['additionalStylesheet'] && \TYPO3\CMS\Core\Utility\GeneralUtility::validPathStr($_EXTCONF['additionalStylesheet'])) {
        $GLOBALS['TBE_STYLES']['skins']['gridelements']['stylesheetDirectories']['gridelements_additional'] = $_EXTCONF['additionalStylesheet'];
    }

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gridelements_backend_layout');

// Hooks
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = \GridElementsTeam\Gridelements\Hooks\DataHandler::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \GridElementsTeam\Gridelements\Hooks\DataHandler::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = \GridElementsTeam\Gridelements\Hooks\DataHandler::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms']['db_new_content_el']['wizardItemsHook'][] = \GridElementsTeam\Gridelements\Hooks\WizardItems::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][] = \GridElementsTeam\Gridelements\Hooks\DrawItem::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass'][] = \GridElementsTeam\Gridelements\Hooks\BackendUtilityGridelements::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tx_templavoila_api']['apiIsRunningTCEmain'] = true;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing']['gridelements'] = \GridElementsTeam\Gridelements\Hooks\TtContentFlexForm::class;

if ($_EXTCONF['nestingInListModule']) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/class.db_list_extra.inc']['actions'][] = \GridElementsTeam\Gridelements\Hooks\DatabaseRecordList::class;
}

$GLOBALS['TYPO3_USER_SETTINGS']['columns']['dragAndDropHideNewElementWizardInfoOverlay'] = [
    'type'  => 'check',
    'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:dragAndDropHideNewElementWizardInfoOverlay',
];

$GLOBALS['TYPO3_USER_SETTINGS']['columns']['hideColumnHeaders'] = [
    'type'  => 'check',
    'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:hideColumnHeaders',
];

$GLOBALS['TYPO3_USER_SETTINGS']['columns']['hideContentPreview'] = [
    'type'  => 'check',
    'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:hideContentPreview',
];

$GLOBALS['TYPO3_USER_SETTINGS']['columns']['showGridInformation'] = [
    'type'  => 'check',
    'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:showGridInformation',
];

$GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',
        --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:gridElements,
            dragAndDropHideNewElementWizardInfoOverlay,
            hideColumnHeaders,
            hideContentPreview,
            showGridInformation
            ';

$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1487270751] = \GridElementsTeam\Gridelements\ContextMenu\ItemProvider::class;

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon('gridelements-default', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, [
    'source' => 'EXT:gridelements/Resources/Public/Icons/gridelements.svg',
]);

/**
 * Extension: mask
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/mask/ext_tables.php
 */

$_EXTKEY = 'mask';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


if (!defined('TYPO3_MODE')) {
   die('Access denied.');
}

if (TYPO3_MODE === 'BE') {

   /**
	* Registers a Backend Module
	*/
   \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
	   'MASK.' . $_EXTKEY, 'tools', // Make module a submodule of 'admin'
	   'mask', // Submodule key
	   'top', // Position
	   array(
	   'WizardContent' => 'list, new, create, edit, update, delete, purge, generate, showHtml, createMissingFolders, hide, activate',
	   'WizardPage' => 'list, new, create, edit, update, delete',
	   ), array(
	   'access' => 'admin',
	   'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/module-mask_wizard.svg',
	   'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mask.xlf',
	   )
   );

   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
	   'WizardController::checkFieldKey', 'MASK\Mask\Controller\WizardController->checkFieldKey'
   );

   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerAjaxHandler(
	   'WizardController::checkElementKey', 'MASK\Mask\Controller\WizardController->checkElementKey'
   );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Mask');

// include css for styling of backend preview of mask content elements
$TBE_STYLES['skins']['mask']['name'] = 'mask';
$TBE_STYLES['skins']['mask']['stylesheetDirectories'][] = 'EXT:mask/Resources/Public/Styles/Backend/';
//$TBE_STYLES['skins']['mask']['stylesheetDirectories'][] = "/" . $settings["backend"];

$storageRepository = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('MASK\\Mask\\Domain\\Repository\\StorageRepository');
$configuration = $storageRepository->load();

if (!empty($configuration)) {
    $tcaCodeGenerator = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('MASK\\Mask\\CodeGenerator\\TcaCodeGenerator');

    // allow all inline tables on standard pages
    $tcaCodeGenerator->allowInlineTablesOnStandardPages($configuration);
}

/**
 * Extension: metaseo
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/metaseo/ext_tables.php
 */

$_EXTKEY = 'metaseo';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or exit;

// ############################################################################
// Backend
// ############################################################################

if (TYPO3_MODE == 'BE') {

    // ####################################################
    // Module category "WEB"
    // ####################################################

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Metaseo.' . $_EXTKEY,
        'web',
        'pageseo',
        '', # Position
        array('BackendPageSeo' => 'main,metadata,geo,searchengines,url,pagetitle,pagetitlesim'), # Controller array
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/Resources/Public/Backend/Icons/ModuleSeo.svg',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/ModuleSeo/locallang.xlf',
        )
    );

    // ####################################################
    // Module category "SEO"
    // ####################################################

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        $_EXTKEY,
        'metaseo',
        '',
        '',
        array(),
        array(
            'access' => 'user,group',
            'icon' => '',
            'iconIdentifier' => 'module-seo',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/ModuleMain/locallang.xlf',
        )
    );


    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Metaseo.' . $_EXTKEY,
        'metaseo',
        'controlcenter',
        '',
        array('BackendControlCenter' => 'main'),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/Resources/Public/Backend/Icons/ModuleControlCenter.svg',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/ModuleControlCenter/locallang.xlf',
        )
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Metaseo.' . $_EXTKEY,
        'metaseo',
        'sitemap',
        'after:controlcenter',
        array('BackendSitemap' => 'main,sitemap'),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/Resources/Public/Backend/Icons/ModuleSitemap.svg',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/ModuleSitemap/locallang.xlf',
        )
    );
}

/**
 * Extension: news
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/news/ext_tables.php
 */

$_EXTKEY = 'news';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

$boot = function () {

    // CSH - context sensitive help
    foreach (['news', 'media', 'tag', 'link'] as $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_news_domain_model_' . $table);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
            'tx_news_domain_model_' . $table, 'EXT:news/Resources/Private/Language/locallang_csh_' . $table . '.xlf');
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        'tt_content.pi_flexform.news_pi1.list', 'EXT:news/Resources/Private/Language/locallang_csh_flexforms.xlf');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        'sys_file_reference', 'EXT:news/Resources/Private/Language/locallang_csh_sys_file_reference.xlf');

    $configuration = \GeorgRinger\News\Utility\EmConfiguration::getSettings();

    if (TYPO3_MODE === 'BE') {
        $isVersion9Up = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 9000000;
        if ($isVersion9Up) {
            $mappings = ['common', 'general', 'mod_web_list', 'tca'];
            foreach ($mappings as $mapping) {
                $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:lang/locallang_' . $mapping . '.xlf'][] = 'EXT:lang/Resources/Private/Language/locallang_' . $mapping . '.xlf';
            }
        }

        // Extend user settings
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['newsoverlay'] = [
            'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:usersettings.overlay',
            'type' => 'select',
            'itemsProcFunc' => \GeorgRinger\News\Hooks\ItemsProcFunc::class . '->user_categoryOverlay',
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',
            --div--;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pi1_title,newsoverlay';

        // Add tables to livesearch (e.g. "#news:fo" or "#newscat:fo")
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['news'] = 'tx_news_domain_model_news';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['newstag'] = 'tx_news_domain_model_tag';

        /* ===========================================================================
            Register BE-Modules
        =========================================================================== */
        if ($configuration->getShowImporter()) {
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'GeorgRinger.news',
                'system',
                'tx_news_m1',
                '',
                ['Import' => 'index, runJob, jobInfo'],
                [
                    'access' => 'user,group',
                    'icon' => 'EXT:news/Resources/Public/Icons/module_import.svg',
                    'labels' => 'LLL:EXT:news/Resources/Private/Language/locallang_mod.xlf',
                ]
            );
        }

        /* ===========================================================================
            Register BE-Module for Administration
        =========================================================================== */
        if ($configuration->getShowAdministrationModule()) {
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'GeorgRinger.news',
                'web',
                'tx_news_m2',
                '',
                ['Administration' => 'index,newNews,newCategory,newTag,newsPidListing'],
                [
                    'access' => 'user,group',
                    'icon' => 'EXT:news/Resources/Public/Icons/module_administration.svg',
                    'labels' => 'LLL:EXT:news/Resources/Private/Language/locallang_modadministration.xlf',
                    'navigationComponentId' => $configuration->getHidePageTreeForAdministrationModule() ? '' : ($isVersion9Up ? 'TYPO3/CMS/Backend/PageTree/PageTreeElement' : 'typo3-pagetree')
                ]
            );
        }
    }

    /* ===========================================================================
        Default configuration
    =========================================================================== */
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByCategory'] = 'uid,title,tstamp,sorting';
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] = 'tstamp,datetime,crdate,title' . ($configuration->getManualSorting() ? ',sorting' : '');
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByTag'] = 'tstamp,crdate,title';
};

$boot();
unset($boot);

/**
 * Extension: powermail
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/powermail/ext_tables.php
 */

$_EXTKEY = 'powermail';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function () {

        /**
         * Include Backend Module
         */
        if (TYPO3_MODE === 'BE' &&
            !\In2code\Powermail\Utility\ConfigurationUtility::isDisableBackendModuleActive() &&
            !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)
        ) {
            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'In2code.powermail',
                'web',
                'm1',
                '',
                [
                    'Module' => 'dispatch, list, exportXls, exportCsv, reportingBe, toolsBe, overviewBe, ' .
                        'checkBe, converterBe, converterUpdateBe, reportingFormBe, reportingMarketingBe, ' .
                        'fixUploadFolder, fixWrongLocalizedForms, fixFilledMarkersInLocalizedFields, ' .
                        'fixWrongLocalizedPages, fixFilledMarkersInLocalizedPages'
                ],
                [
                    'access' => 'user,group',
                    'icon' => 'EXT:powermail/Resources/Public/Icons/powermail.svg',
                    'labels' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_mod.xlf',
                ]
            );
        }

        /**
         * Table description files for localization and allowing powermail tables on pages of type default
         */
        $tables = [
            \In2code\Powermail\Domain\Model\Form::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Page::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Field::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Mail::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Answer::TABLE_NAME
        ];
        foreach ($tables as $table) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
                $table,
                'EXT:powermail/Resources/Private/Language/locallang_csh_' . $table . '.xlf'
            );
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($table);
        }

        /**
         * Garbage Collector
         */
        $tgct = 'TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask';
        $tables = [
            \In2code\Powermail\Domain\Model\Mail::TABLE_NAME,
            \In2code\Powermail\Domain\Model\Answer::TABLE_NAME
        ];
        foreach ($tables as $table) {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][$tgct]['options']['tables'][$table] = [
                'dateField' => 'tstamp',
                'expirePeriod' => 30
            ];
        }

        /**
         * Register icons
         */
        $iconRegistry =
            \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            'extension-powermail-main',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:powermail/Resources/Public/Icons/powermail.svg']
        );

        /**
         * Search with TYPO3 backend search
         *      search for an email: "#mail:senderemail"
         *      search for a form: "#form:contactform"
         */
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['mail'] = 'tx_powermail_domain_model_mail';
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['form'] = 'tx_powermail_domain_model_form';
    }
);

/**
 * Extension: realurl
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/realurl/ext_tables.php
 */

$_EXTKEY = 'realurl';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


// Backend module is available only in TYPO3 7.6 or newer
if (version_compare(TYPO3_version, '7.6.0', '>=')) {
	$realurlConfiguration = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl'];
	if (is_string($realurlConfiguration)) {
		$realurlConfiguration = (array)@unserialize($realurlConfiguration);
	}
	else {
		$realurlConfiguration = array();
	}

	$realurlModuleIcon = ((!isset($realurlConfiguration['moduleIcon']) || $realurlConfiguration['moduleIcon'] == 0) ? 'Module.svg' :
		($realurlConfiguration['moduleIcon'] == 1 ? 'Module2.svg' : 'Module3.svg')
	);

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'DmitryDulepov.Realurl',
		'web',
		'realurl',
		'',
		array(
			'Overview' => 'index',
			'Aliases' => 'index,edit,delete,deleteAll',
			'UrlCache' => 'index,delete,deleteAll,flush',
			'PathCache' => 'index,delete',
		),
		array(
			'access' => 'user,group',
			'icon' => 'EXT:realurl/Resources/Public/Icons/' . $realurlModuleIcon,
			'labels' => 'LLL:EXT:realurl/Resources/Private/Language/locallang.xlf',
		)
	);

	unset($realurlConfiguration, $realurlModuleIcon);
}

/**
 * Extension: satoshipay
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/satoshipay/ext_tables.php
 */

$_EXTKEY = 'satoshipay';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ZECHENDORF.' . $_EXTKEY,
	'Satoshipay',
	'SatoshiPay'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/PageTS/Mod/Wizards/newContentElement.txt">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'SatoshiPay');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_satoshipay_domain_model_good', 'EXT:satoshipay/Resources/Private/Language/locallang_csh_tx_satoshipay_domain_model_good.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_satoshipay_domain_model_good');

/***************
 * Reset extConf array to avoid errors
 */
if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}

$pluginSignature = 'satoshipay_satoshipay';
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue( $pluginSignature, 'FILE:EXT:satoshipay/Configuration/FlexForms/Good.xml');


// only show the colPos field in tt_content when its > 0
$TCA['tt_content']['columns']['colPos']['displayCond'] = 'FIELD:colPos:>=:0';

/**
 * Extension: sq_googledrive
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/sq_googledrive/ext_tables.php
 */

$_EXTKEY = 'sq_googledrive';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


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

/**
 * Extension: unroll
 * File: /www/htdocs/w01491af/dev.bigbytesoftware.com/typo3webroot/typo3conf/ext/unroll/ext_tables.php
 */

$_EXTKEY = 'unroll';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;



defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['unroll']);
    if ($settings['allowUserSettings']) {
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['unroll'] = [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.unroll',
            'items' => [
                'default' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.default',
                'enable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.enable',
                'disable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.disable',
            ],
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['showLabelSave'] = [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.showLabelSave',
            'items' => [
                'default' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.default',
                'enable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.enable',
                'disable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.disable',
            ],
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['showLabelSaveDokView'] = [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.showLabelSaveDokView',
            'items' => [
                'default' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.default',
                'enable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.enable',
                'disable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.disable',
            ],
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['showLabelSaveDokNew'] = [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.showLabelSaveDokNew',
            'items' => [
                'default' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.default',
                'enable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.enable',
                'disable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.disable',
            ],
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['columns']['showLabelSaveAndClose'] = [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'label' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.showLabelSaveAndClose',
            'items' => [
                'default' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.default',
                'enable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.enable',
                'disable' => 'LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.disable',
            ],
        ];
        $GLOBALS['TYPO3_USER_SETTINGS']['showitem'] .= ',
            --div--;LLL:EXT:unroll/Resources/Private/Language/locallang.xlf:userSettings.tabName,
            unroll, showLabelSave, showLabelSaveDokView, showLabelSaveDokNew, showLabelSaveAndClose';
    }
}

#