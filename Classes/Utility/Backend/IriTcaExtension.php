<?php

/***************************************************************
 *  Copyright notice
 *
 *  Copyright (C) 2026 Academy of Sciences and Literature | Mainz
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace Digicademy\Lod\Utility\Backend;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class IriTcaExtension
{

    /**
     * Can be used to add the IRI field to a TCA table.
     *
     * @param string $table The name of the table
     * @param string|null $afterField Optional: the field after which the IRI field should appear
     *
     * @author Linnaea Söhn <linnaea.soehn@adwmainz.de>
     */
    public static function addIriField(string $table, ?string $afterField = null): void
    {
        $fields = [
            'iri' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:lod/Resources/Private/Language/locallang_db.xlf:tx_lod_domain_model_iri',
                'displayCond' => 'FIELD:sys_language_uid:<=:0',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_lod_domain_model_iri',
                    'foreign_field' => 'record_uid',
                    'foreign_table_field' => 'record_tablename',
                    'maxitems' => 1,
                    'appearance' => [
                        'collapseAll' => 1,
                        'expandSingle' => 1,
                        'levelLinksPosition' => 'bottom',
                        'newRecordLinkAddTitle' => 1,
                    ],
                    'behaviour' => [
                        'disableMovingChildrenWithParent' => 1,
                    ],
                ],
            ],
        ];

        // Register the column
        ExtensionManagementUtility::addTCAcolumns($table, $fields);

        // Insert the field into TCA
        $position = $afterField ? 'after:' . $afterField : '';
        ExtensionManagementUtility::addToAllTCAtypes($table, 'iri', '', $position);
    }
}
