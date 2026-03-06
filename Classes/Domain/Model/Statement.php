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

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Statement extends AbstractEntity
{
    /**
     * graph
     *
     * @var \Digicademy\Lod\Domain\Model\Graph
     */
    protected $graph;

    /**
     * subject
     *
     * @var string
     */
    protected $subject;

    /**
     * predicate
     *
     * @var string
     */
    protected $predicate;

    /**
     * object
     *
     * @var string
     */
    protected $object;

    /**
     * reference statements
     *
     * @var ObjectStorage<Statement> $referenceStatements
     */
    #[Lazy]
    protected $referenceStatements;

    /**
     * objectRecursion
     *
     * @var int
     */
    protected $objectRecursion;

    /**
     * objectInversion
     *
     * @var int
     */
    protected $objectInversion;

    /**
     * Returns the named graph
     *
     * @return Graph|null $graph
     */
    public function getGraph(): ?Graph
    {
        return $this->graph;
    }

    /**
     * Sets the graph
     *
     * @param Graph $graph
     */
    public function setGraph(Graph $graph): void
    {
        $this->graph = $graph;
    }

    /**
     * Returns the subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets the subject
     *
     * @param $subject
     */
    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    /**
     * Returns the predicate
     * @return string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * Sets the predicate
     *
     * @param $predicate
     */
    public function setPredicate($predicate): void
    {
        $this->predicate = $predicate;
    }

    /**
     * Returns the object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets the object
     *
     * @param $object
     */
    public function setObject($object): void
    {
        $this->object = $object;
    }

    /**
     * Returns the objectRecursion
     *
     * @return int
     */
    public function getObjectRecursion(): int
    {
        return $this->objectRecursion;
    }

    /**
     * Sets the objectRecursion
     *
     * @param int $objectRecursion
     */
    public function setObjectRecursion(int $objectRecursion): void
    {
        $this->objectRecursion = $objectRecursion;
    }

    /**
     * Returns the objectInversion
     *
     * @return int
     */
    public function getObjectInversion(): int
    {
        return $this->objectInversion;
    }

    /**
     * Sets the objectInversion
     *
     * @param int $objectInversion
     */
    public function setObjectInversion(int $objectInversion): void
    {
        $this->objectInversion = $objectInversion;
    }

    /**
     * Returns valid reference statements (RDF*)
     *
     * @return ObjectStorage<Statement> $referenceStatements
     */
    public function getReferenceStatements(): ObjectStorage
    {
        $statementObjectStorage = GeneralUtility::makeInstance(ObjectStorage::class);

        foreach ($this->referenceStatements as $statement) {
            if ($statement->getPredicate() !== null &&
                $statement->getObject() !== null) {
                $statementObjectStorage->attach($statement);
            }
        }

        $this->referenceStatements = $statementObjectStorage;

        return $this->referenceStatements;
    }

    /**
     * Sets the referenceStatements
     *
     * @param ObjectStorage<Statement> $referenceStatements
     */
    public function setReferenceStatements(ObjectStorage $referenceStatements): void
    {
        $this->referenceStatements = $referenceStatements;
    }
}
