# Linked Open Data for TYPO3

Provides a semantic layer for a TYPO3 instance with LOD API, terminology service,
RDF serializer and URI resolver.

This is the development repository for the LOD extension. The extension has not yet been
officially released to the TYPO3 extension repository but is fully usable.

**TYPO3 version compatibility**:

| Branch | TYPO3    | PHP     | Support                              |
|--------|----------|---------|--------------------------------------|
| main   | 11.5     | 7.4-8.2 | Features, Bugfixes, Security Updates |
| 10.4   | 9.5-10.4 | 7.2-7.4 | None                                 |
| 7.6    | 7.6      | 7.0-7.2 | None                                 |

## Tests, Upgrades, Fixes

This extension comes with a range configurations for analyses, tests, and automatic fixes that work with the tools listed in its Composer dev requirements. All dev requirements should be installed at project level.

All examples given here assume that tests are executed from the root folder of a TYPO3 project and this extension is located in the `packages` folder for development purposes.

### PHPStan

```bash
vendor/bin/phpstan analyse -c packages/lod/phpstan.neon --memory-limit 2G
```

### TYPO3 Rector
 ```bash
 vendor/bin/rector process --config packages/lod/rector.php
 ```

### PHP-CS Fixer
```bash
composer exec php-cs-fixer fix packages/lod
```

## Research Software Engineering

This software is licensed under the terms of the GNU General Public License v2
as published by the Free Software Foundation.

Copyright <a href="https://orcid.org/0000-0002-0953-2818">Torsten Schrade</a> | <a href="http://www.adwmainz.de">Academy of Sciences and Literature | Mainz</a>

