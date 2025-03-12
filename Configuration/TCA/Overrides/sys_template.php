<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'lod', 'Configuration/TypoScript', 'Linked Open Data for TYPO3'
);
