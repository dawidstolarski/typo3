<?php
defined('TYPO3_MODE') || die();

/*  | This extension is made for TYPO3 CMS and is licensed under GNU General Public License.
 *  | See LICENSE.txt shipped with this extension.
 *  |
 *  | (c) 2016-2017 Markus Klein, Reelworx GmbH https://reelworx.at/
 *  |     2016-2017 Armin Vieweg <armin@v.ieweg.de>
 */

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Backend\Template\Components\Buttons\SplitButton::class] = [
    'className' => \InstituteWeb\Unroll\Xclass\UnrolledSplitButton::class
];
