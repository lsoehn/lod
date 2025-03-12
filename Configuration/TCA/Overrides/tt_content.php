<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::registerPlugin(
    'Lod',
    'Vocabulary',
    'LOD: Vocabulary'
);

ExtensionUtility::registerPlugin(
    'Lod',
    'Api',
    'LOD: Api'
);

ExtensionUtility::registerPlugin(
    'Lod',
    'Serializer',
    'LOD: Serializer'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['lod_vocabulary'] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue('lod_vocabulary', 'FILE:EXT:lod/Configuration/FlexForms/VocabularyPlugin.xml');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['lod_serializer'] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue('lod_serializer', 'FILE:EXT:lod/Configuration/FlexForms/SerializerPlugin.xml');
