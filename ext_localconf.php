<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'ekhn',
    'setup',
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ekhn/Configuration/TypoScript/setup.txt">'
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Vendor\\ekhn\\Task\\MySkript'] = [
    'extension' => 'ekhn',
    'title' => 'My Skript Task',
    'description' => 'This task executes my custom script daily.',
    'additionalFields' => ''
];
