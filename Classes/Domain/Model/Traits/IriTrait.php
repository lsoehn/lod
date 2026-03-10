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

namespace Digicademy\Lod\Domain\Model\Traits;

use Digicademy\Lod\Domain\Model\Iri;

/**
 * Provides all necessary variables and methods for extending domain models with IRI.
 *
 * @author Linnaea Söhn <linnaea.soehn@adwmainz.de>
 *
 */
trait IriTrait
{
    /**
     * @var Iri|null
     */
    protected ?Iri $iri;


    /**
     * Returns the iri
     *
     * @return Iri|null $iri
     */
    public function getIri(): ?Iri
    {
        return $this->iri;
    }

    /**
     * Sets the iri
     *
     * @param Iri $iri
     */
    public function setIri(Iri $iri): void
    {
        $this->iri = $iri;
    }
}
