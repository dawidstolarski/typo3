<?php

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
