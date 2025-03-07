<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_literal',
        'label' => 'value',
        'default_sortby' => 'value',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'type,value,lang,datatype,',
        'iconfile' => 'EXT:lod/Resources/Public/Icons/tx_lod_domain_model_literal.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, --palette--;;value'],
    ],
    'palettes' => [
        'value' => [
            'showitem' => 'value, language, datatype'
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_literal.value',
            'config' => [
                'type' => 'text',
                'cols' => '25',
                'rows' => '5',
                'eval' => 'trim',
                'required' => true
            ],
        ],
        'language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_literal.language',
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
        'datatype' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_literal.datatype',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => '', 'value' => ''],
                    ['label' => 'Core types', 'value' => '--div--'],
                    ['label' => 'string', 'value' => 'http://www.w3.org/2001/XMLSchema#string'],
                    ['label' => 'boolean', 'value' => 'http://www.w3.org/2001/XMLSchema#boolean'],
                    ['label' => 'decimal', 'value' => 'http://www.w3.org/2001/XMLSchema#decimal'],
                    ['label' => 'integer', 'value' => 'http://www.w3.org/2001/XMLSchema#integer'],
                    ['label' => 'IEEE floating-point numbers', 'value' => '--div--'],
                    ['label' => 'double', 'value' => 'http://www.w3.org/2001/XMLSchema#double'],
                    ['label' => 'float', 'value' => 'http://www.w3.org/2001/XMLSchema#float'],
                    ['label' => 'Time and date', 'value' => '--div--'],
                    ['label' => 'date', 'value' => 'http://www.w3.org/2001/XMLSchema#date'],
                    ['label' => 'time', 'value' => 'http://www.w3.org/2001/XMLSchema#time'],
                    ['label' => 'dateTime', 'value' => 'http://www.w3.org/2001/XMLSchema#dateTime'],
                    ['label' => 'dateTimeStamp', 'value' => 'http://www.w3.org/2001/XMLSchema#dateTimeStamp'],
                    ['label' => 'Recurring and partial dates', 'value' => '--div--'],
                    ['label' => 'gYear', 'value' => 'http://www.w3.org/2001/XMLSchema#gYear'],
                    ['label' => 'gMonth', 'value' => 'http://www.w3.org/2001/XMLSchema#gYear'],
                    ['label' => 'gDay', 'value' => 'http://www.w3.org/2001/XMLSchema#gDay'],
                    ['label' => 'gYearMonth', 'value' => 'http://www.w3.org/2001/XMLSchema#gYearMonth'],
                    ['label' => 'gMonthDay', 'value' => 'http://www.w3.org/2001/XMLSchema#gMonthDay'],
                    ['label' => 'duration', 'value' => 'http://www.w3.org/2001/XMLSchema#duration'],
                    ['label' => 'yearMonthDuration', 'value' => 'http://www.w3.org/2001/XMLSchema#yearMonthDuration'],
                    ['label' => 'dayTimeDuration', 'value' => 'http://www.w3.org/2001/XMLSchema#dayTimeDuration'],
                    ['label' => 'Limited-range integer numbers', 'value' => '--div--'],
                    ['label' => 'byte', 'value' => 'http://www.w3.org/2001/XMLSchema#byte'],
                    ['label' => 'short', 'value' => 'http://www.w3.org/2001/XMLSchema#short'],
                    ['label' => 'int', 'value' => 'http://www.w3.org/2001/XMLSchema#int'],
                    ['label' => 'long', 'value' => 'http://www.w3.org/2001/XMLSchema#long'],
                    ['label' => 'unsignedByte', 'value' => 'http://www.w3.org/2001/XMLSchema#unsignedByte'],
                    ['label' => 'unsignedShort', 'value' => 'http://www.w3.org/2001/XMLSchema#unsignedShort'],
                    ['label' => 'unsignedInt', 'value' => 'http://www.w3.org/2001/XMLSchema#unsignedInt'],
                    ['label' => 'unsignedLong', 'value' => 'http://www.w3.org/2001/XMLSchema#unsignedLong'],
                    ['label' => 'positiveInteger', 'value' => 'http://www.w3.org/2001/XMLSchema#positiveInteger'],
                    ['label' => 'nonNegativeInteger', 'value' => 'http://www.w3.org/2001/XMLSchema#nonNegativeInteger'],
                    ['label' => 'negativeInteger', 'value' => 'http://www.w3.org/2001/XMLSchema#negativeInteger'],
                    ['label' => 'nonPositiveInteger', 'value' => 'http://www.w3.org/2001/XMLSchema#nonPositiveInteger'],
                    ['label' => 'Encoded binary data', 'value' => '--div--'],
                    ['label' => 'hexBinary', 'value' => 'http://www.w3.org/2001/XMLSchema#hexBinary'],
                    ['label' => 'base64Binary', 'value' => 'http://www.w3.org/2001/XMLSchema#base64Binary'],
                    ['label' => 'Miscellaneous XSD types', 'value' => '--div--'],
                    ['label' => 'anyURI', 'value' => 'http://www.w3.org/2001/XMLSchema#anyURI'],
                    ['label' => 'language', 'value' => 'http://www.w3.org/2001/XMLSchema#language'],
                    ['label' => 'normalizedString', 'value' => 'http://www.w3.org/2001/XMLSchema#normalizedString'],
                    ['label' => 'token', 'value' => 'http://www.w3.org/2001/XMLSchema#token'],
                    ['label' => 'NMTOKEN', 'value' => 'http://www.w3.org/2001/XMLSchema#NMTOKEN'],
                    ['label' => 'Name', 'value' => 'http://www.w3.org/2001/XMLSchema#Name'],
                    ['label' => 'NCName', 'value' => 'http://www.w3.org/2001/XMLSchema#NCName'],
                    ['label' => 'HTML and XML', 'value' => '--div--'],
                    ['label' => 'html', 'value' => 'http://www.w3.org/1999/02/22-rdf-syntax-ns#HTML'],
                    ['label' => 'xml', 'value' => 'http://www.w3.org/1999/02/22-rdf-syntax-ns#XMLLiteral'],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
    ],
];
