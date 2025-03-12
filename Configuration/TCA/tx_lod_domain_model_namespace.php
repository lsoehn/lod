<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_namespace',
        'label' => 'prefix',
        'label_alt' => 'iri',
        'label_alt_force' => 1,
        'default_sortby' => 'prefix',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'prefix,iri,comment',
        'iconfile' => 'EXT:lod/Resources/Public/Icons/tx_lod_domain_model_namespace.svg',
        'security' => [
            'ignorePageTypeRestriction' => true
        ]
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, prefix, iri'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'prefix' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_namespace.prefix',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true
            ],
        ],
        'iri' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_namespace.iri',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true
            ],
        ],
    ],
];
