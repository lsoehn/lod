<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:lod/Configuration/TSConfig/setup.tsconfig">
');

// ICONS

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);

$iconRegistry->registerIcon(
    'tx_lod_actions_add_iri',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:lod/Resources/Public/Icons/tx_lod_actions_add_iri.svg']
);

$iconRegistry->registerIcon(
    'tx_lod_actions_add_bnode',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:lod/Resources/Public/Icons/tx_lod_actions_add_bnode.svg']
);

$iconRegistry->registerIcon(
    'tx_lod_actions_add_literal',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:lod/Resources/Public/Icons/tx_lod_actions_add_literal.svg']
);

$iconRegistry->registerIcon(
    'tx_lod_domain_model_iri',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:lod/Resources/Public/Icons/tx_lod_domain_model_iri.svg']
);

$iconRegistry->registerIcon(
    'tx_lod_type_entity',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:lod/Resources/Public/Icons/tx_lod_type_entity.svg']
);

$iconRegistry->registerIcon(
    'tx_lod_type_property',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:lod/Resources/Public/Icons/tx_lod_type_property.svg']
);
