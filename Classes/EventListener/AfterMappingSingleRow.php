<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) Torsten Schrade <torsten.schrade@adwmainz.de>, Academy of Sciences and Literature | Mainz
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

namespace Digicademy\Lod\EventListener;

use Digicademy\Lod\Service\ItemMappingService;
use TYPO3\CMS\Extbase\Event\Persistence\AfterObjectThawedEvent;

class AfterMappingSingleRow
{
    protected const MAPPABLE_CLASSES = [
        'Digicademy\Lod\Domain\Model\Iri',
        'Digicademy\Lod\Domain\Model\Statement'
    ];

    public function __construct(
        protected ItemMappingService $itemMappingService
    ) {}

    /**
     * @param  AfterObjectThawedEvent $event The event class.
     * @return void
     */
    public function __invoke(AfterObjectThawedEvent $event): void
    {
        $object = $event->getObject();
        $class = get_class($object);
        if (in_array($class, self::MAPPABLE_CLASSES)) {
            $this->itemMappingService->mapGenericProperty($object);
        }
    }
}
