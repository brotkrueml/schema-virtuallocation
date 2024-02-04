# Add-on to the TYPO3 schema extension, providing VirtualLocation

This extension is an add-on for the TYPO3
[schema extension](https://github.com/brotkrueml/schema) and provides the
[VirtualLocation](https://schema.org/VirtualLocation) type. It can be assigned
as location to the Event type. As it is a pending type by now it is not provided
by the schema extension. When this type is taken into the core vocabulary this
extension is obsolete.

Also, this extension serves as a blueprint for extending the schema extension
with own type models and view helpers.

## Requirements

The extension in the latest version supports TYPO3 v11 LTS, TYPO3 v12 LTS and
TYPO3 v13. Use older version for compatibility with TYPO3 v9 LTS or TYPO3 v10
LTS.

## Installation

With Composer:

```bash
composer req brotkrueml/schema-virtuallocation
```

## Usage

### Using the API

```php
<?php

declare(strict_types=1);

namespace MyVendor\MyExtension\Controller;

use Brotkrueml\Schema\Type\TypeFactory;

final class MyController
{
    public function __construct(
        private readonly TypeFactory $typeFactory,
    ) {}

    public function doSomething(): void
    {
        // ...

        $location = $this->typeFactory->create('VirtualLocation');
        $location->setProperty('url', 'https://example.org/join/12345');

        $event = $this->typeFactory->create('Event');
        $event
            ->setProperty('name' 'A virtual event')
            ->setProperty('location', $location)
        ;

        // ...
    }
}
```

### Using the view helper

```xml
<schema:type.event name="A virtual event">
    <schema:type.virtualLocation
        -as="location"
        url="https://example.org/join/12345"
    />
</schema:type.event>
```

Both cases produce the following JSON-LD ouput:

```json
{
    "@context": "http://schema.org",
    "@type": "Event",
    "location": {
        "@type": "VirtualLocation",
        "url": "https://example.org/join/12345"
    },
    "name": "A virtual event"
}
```

For more information have a look into the
[schema documentation](https://docs.typo3.org/p/brotkrueml/schema/main/en-us/).

## Versions and support

| Latest release | TYPO3       | PHP   | EXT:schema | Updates will contain             |
|----------------|-------------|-------|------------|----------------------------------|
| 2.x            | 11.5 - 13.4 | ≥ 8.1 | 3.x        | Features, security and bug fixes |
| 1.x            | 10.4 - 12.4 | ≥ 7.2 | 1.x - 2.x  | Security and bug fixes           |

[Changelog](https://github.com/brotkrueml/schema-virtuallocation/blob/main/CHANGELOG.md) |
[TYPO3 Extension Repository](https://extensions.typo3.org/extension/schema_virtuallocation)
