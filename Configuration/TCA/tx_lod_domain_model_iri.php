<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri',
        'label' => 'value',
        'label_userFunc' => \Digicademy\Lod\Utility\Backend\LabelUtility::class . '->iriLabel',
        'formattedLabel_userFunc' => \Digicademy\Lod\Utility\Backend\LabelUtility::class . '->iriLabel',
        'default_sortby' => 'type ASC, label ASC, value ASC',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        // disable type field: no reload is needed since displayed fields are the same (though type if IRI is of course different)
//        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => [
            'default' => 'tx_lod_domain_model_iri',
            '1' => 'tx_lod_type_entity',
            '2' => 'tx_lod_type_property',
        ],
        'searchFields' => 'label,comment,value',
        'iconfile' => 'EXT:lod/Resources/Public/Icons/tx_lod_domain_model_iri.svg'
    ],
    // at the moment, types are the same (but leave option open for future)
    'types' => [
        '1' => ['showitem' => '
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divIRI,
                hidden, 
                --palette--;;identifier, 
                --palette--;;label, 
                --palette--;;comment,
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divStatements,
                statements,
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divRepresentations,
                representations, 
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divRecord,
                record,
                sys_language_uid
        '],
        '2' => ['showitem' => '
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divIRI,
                hidden, 
                --palette--;;identifier, 
                --palette--;;label, 
                --palette--;;comment,
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divStatements,
                statements,
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divRepresentations,
                representations, 
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_iri.divRecord,
                record,
                sys_language_uid
        '],
    ],
    'palettes' => [
        'label' => [
            'showitem' => 'label, label_language'
        ],
        'comment' => [
            'showitem' => 'comment, comment_language'
        ],
        'identifier' => [
            'showitem' => 'namespace, value, type'
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => ['type' => 'language']
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'label_language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.label_language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'items' => [
                    ['label' => '', 'value' => '']
                ],
                'itemsProcFunc' => \TYPO3\CMS\Core\Service\IsoCodeService::class . '->renderIsoCodeSelectDropdown',
            ],
        ],
        'comment' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.comment',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'comment_language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.comment_language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'items' => [
                    ['label' => '', 'value' => '']
                ],
                'itemsProcFunc' => \TYPO3\CMS\Core\Service\IsoCodeService::class . '->renderIsoCodeSelectDropdown',
            ],
        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.type.I.1', 'value' => 1, 'icon' => 'tx_lod_type_entity'],
                    ['label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.type.I.2', 'value' => 2, 'icon' => 'tx_lod_type_property'],
                ],
                'size' => 1,
                'maxitems' => 1,
            ],
            'onChange' => '0',
        ],
        'namespace' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.namespace',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_lod_domain_model_namespace',
                'foreign_table_where' => 'AND tx_lod_domain_model_namespace.pid IN (###PAGE_TSCONFIG_IDLIST###) ORDER BY tx_lod_domain_model_namespace.prefix',
                'items' => [
                    ['label' => '', 'value' => 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'default' => 0,
// @TODO: TYPO3 bug in FormEngine - https://forge.typo3.org/issues/89032
                'fieldControl' => [
                    'addRecord' => [
                        'disabled' => false,
                        'options' => [
                            'table' => 'tx_lod_domain_model_namespace',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'set'
                        ],
                    ],
                    'editPopup' => [
                        'disabled' => false,
//                        'options' => [
//                            'windowOpenParameters' => 'height=650,width=900,status=0,menubar=0,scrollbars=1',
//                        ],
                    ],
                ],
            ],
        ],
        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true,
//                'eval' => 'required,trim,unique' // for system wide mandatory and unique IRIs
//                'readOnly' => 1, // recommended if an identifier generator is used
            ],
        ],
        'prefix_value' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'record' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.record',
            'config' => [
                'type' => 'group',
                'allowed' => '*',
                'prepend_tname' => true,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
//                        'options' => [
//                            'windowOpenParameters' => 'height=650,width=900,status=0,menubar=0,scrollbars=1',
//                        )
                    ],
                ],
// @TODO: Bug in TYPO3 Core - internal type '*' leads to broken icon in tableList fieldWizard - see TYPO3\CMS\Backend\Form\FieldWizard\TableList
                'fieldWizard' => [
                    'tableList' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
        'record_uid' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'record_tablename' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'representations' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.representations',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_lod_domain_model_representation',
                'foreign_field' => 'parent',
                'minitems' => 0,
                'maxitems' => 999,
                'appearance' => [
                    'collapseAll' => true,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                    'showAllLocalizationLink' => true
                ],
            ],
        ],
        'statements' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri.statements',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_lod_domain_model_statement',
                'foreign_field' => 'subject_uid',
                'foreign_table_field' => 'subject_type',
                'foreign_sortby' => 'iri_sorting',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => true,
                    'expandSingle' => true,
                    'levelLinksPosition' => 'bottom',
                    'newRecordLinkAddTitle' => true,
                    'useSortable' => true,
                ],
                'behaviour' => [
                    'disableMovingChildrenWithParent' => true,
                ],
                'overrideChildTca' => [
                    'types' => [
                        '1' => [
                            'showitem' => '--palette--;;PredicateObject, reference_statements, graph, --palette--;;flags'
                        ],
                    ],
                ],
            ],
        ],
    ],
];
