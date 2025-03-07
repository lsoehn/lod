<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation',
        'label' => 'content_type',
        'default_sortby' => 'ORDER BY parent',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'content_type, content_language, parameters',
        'iconfile' => 'EXT:lod/Resources/Public/Icons/tx_lod_domain_model_representation.svg'
    ],
    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                parent,
                scheme,
                authority,
                path,
                query,
                fragment,
                content_type,
                content_language,
            '
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => ''],
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
        'parent' => [
            'config' => [
/*
                'type' => 'passthrough'
*/
                'type' => 'group',
                'allowed' => 'tx_lod_domain_model_iri',
                // prevent http://wiki.typo3.org/Exception/CMS/1353170925
                'foreign_table' => 'tx_lod_domain_model_iri',
                'prepend_tname' => 0,
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'default' => 0,
            ],
        ],
        'scheme' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.scheme',
            'config' => [
                'type' => 'input',
                'size' => 10,
                'eval' => 'trim',
                'required' => true
            ],
        ],
        'authority' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.authority',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
                'required' => true
            ],
        ],
        'path' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.path',
            'config' => [
                'type' => 'text',
                'cols' => '50',
                'rows' => '5',
                'eval' => 'trim'
            ],
        ],
        'query' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.query',
            'config' => [
                'type' => 'text',
                'cols' => '50',
                'rows' => '5',
                'eval' => 'trim'
            ],
        ],
        'fragment' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.fragment',
            'config' => [
                'type' => 'text',
                'cols' => '50',
                'rows' => '5',
                'eval' => 'trim'
            ],
        ],
        'content_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.content_type',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ],
        ],
        'content_language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_representation.content_language',
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
    ],
];
