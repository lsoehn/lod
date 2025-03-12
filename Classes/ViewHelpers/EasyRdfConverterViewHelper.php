<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2019 Torsten Schrade <Torsten.Schrade@adwmainz.de>
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

namespace Digicademy\Lod\ViewHelpers;

use Digicademy\Lod\Domain\Model\IriNamespace;
use EasyRdf\{
    Graph,
    RdfNamespace
};
use Psr\Container\ContainerInterface;
use TYPO3\CMS\Extbase\Exception;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class EasyRdfConverterViewHelper extends AbstractViewHelper
{
    public function __construct(protected readonly ContainerInterface $container) {}

    /**
     * Initialize ViewHelper arguments
     */
    public function initializeArguments(): void
    {
        $this->registerArgument(
            'inputFormat',
            'string',
            'Input format (php, json, jsonld, ntriples, turtle, rdfxml, rdfa)',
            true
        );
        $this->registerArgument(
            'outputFormat',
            'string',
            'Output format (php, json, jsonld, ntriples, turtle, rdfxml)',
            true
        );
        $this->registerArgument(
            'options',
            'array',
            'Serialiser-specific options, for fine-tuning the output',
            false
        );
        $this->registerArgument(
            'data',
            'mixed',
            'RDF data to convert',
            false
        );
    }

    /**
     * @return string
     */
    public function render(): string
    {
        if (class_exists('\EasyRdf\Graph')) {
            // set data
            $data = isset($this->arguments['data'])
                ? $this->arguments['data']
                : $this->renderChildren();

            // set options
            $options = isset($this->arguments['options'])
                ? $this->arguments['options']
                : [];

            $graph = $this->container->get(Graph::class);

            // parse rendered data into EasyRdf graph
            $graph->parse($data, $this->arguments['inputFormat'], '#');

            // set options for conversion and convert data
            if (count($options) > 0) {
                if ($options['registerNamespace']) {
                    // purge all default namespaces
                    if ($options['purgeDefaultNamespaces']) {
                        foreach (
                            RdfNamespace::namespaces() as $prefix => $namespace
                        ) {
                            RdfNamespace::delete($prefix);
                        }
                    }

                    // register given namespaces
                    foreach ($options['registerNamespace'] as $namespace) {
                        if ($namespace instanceof IriNamespace) {
                            RdfNamespace::set(
                                $namespace->getPrefix(),
                                $namespace->getIri()
                            );
                        }
                    }
                }
                $convertedData = $graph->serialise(
                    $this->arguments['outputFormat'],
                    $this->arguments['options']
                );
            } else {
                $convertedData = $graph->serialise(
                    $this->arguments['outputFormat']
                );
            }
        } else {
            throw new Exception(
                'The EasyRdf library is needed but seems not to be available',
                1577942008
            );
        }

        return $convertedData;
    }
}
