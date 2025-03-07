<?php

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) Torsten Schrade <Torsten.Schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

namespace Digicademy\Lod\Domain\Model;

use Digicademy\Lod\Domain\Model\Iri;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Page extends AbstractEntity
{

    /**
     * Iri of the page
     *
     * @var Iri
     */
    protected $iri;

    /**
     * Returns the page iri
     *
     * @return Iri $iri
     */
    public function getIri(): Iri
    {
        return $this->iri;
    }

    /**
     * Sets the page iri
     *
     * @param Iri $iri
     *
     * @return void
     */
    public function setIri(Iri $iri): void
    {
        $this->iri = $iri;
    }

}
