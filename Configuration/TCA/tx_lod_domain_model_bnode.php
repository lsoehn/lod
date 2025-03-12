<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_bnode',
        'label' => 'label',
        'label_alt' => 'value',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'origUid' => 't3_origuid',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'label,comment,value',
        'iconfile' => 'EXT:lod/Resources/Public/Icons/tx_lod_domain_model_bnode.svg',
        'security' => [
            'ignorePageTypeRestriction' => true
        ]
    ],
    'types' => [
        '1' => ['showitem' => '
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_bnode.divBnode,
                hidden, 
                value, 
                label, 
                comment, 
            --div--;LLL:EXT:lod/Resources/Private/Language/locallang_db.xld:tx_lod_domain_model_bnode.divStatements,
                statements
        '],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_bnode.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'comment' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_bnode.comment',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ],
        ],
        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_bnode.value',
            'config' => [
                'type' => 'input',
                'readOnly' => true,
                'size' => 30,
                'eval' => 'trim,unique',
                'required' => true
            ],
        ],
        'statements' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_bnode.statements',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_lod_domain_model_statement',
                'foreign_field' => 'subject_uid',
                'foreign_table_field' => 'subject_type',
                'foreign_sortby' => 'bnode_sorting',
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
