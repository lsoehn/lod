<?php

defined('TYPO3') or die();

$tca = [
    'iri' => [
        'exclude' => true,
        'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri',
        //        'l10n_mode' => 'exclude',
        'displayCond' => 'FIELD:sys_language_uid:<=:0',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_lod_domain_model_iri',
            'foreign_field' => 'record_uid',
            'foreign_table_field' => 'record_tablename',
            'maxitems' => 1,
            'appearance' => [
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'newRecordLinkAddTitle' => true,
            ],
            'behaviour' => [
                'disableMovingChildrenWithParent' => true,
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $tca);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_category',
    'iri',
    '',
    ''
);
