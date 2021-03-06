# Add-on to the TYPO3 schema extension, providing VirtualLocation

This extension is an add-on for the TYPO3
[schema extension](https://github.com/brotkrueml/schema) and provides the
[VirtualLocation](https://schema.org/VirtualLocation) type. It can be assigned
as location to the Event type. As it is a pending type by now it is not provided
by the schema extension. When this type is taken into the core vocabulary this
extension is obsolete.

Also this extension serves as a blueprint for extending the schema extension
with own type models and view helpers.

## Requirements

The extension works with TYPO3 v9 LTS, TYPO3 v10 LTS and TYPO3 v11. It requires
at least the schema extension version 1.7 or version 2.0.

## Installation

With composer:

    composer req brotkrueml/schema-virtuallocation

## Usage

### Using the API

    $location = \Brotkrueml\Schema\Type\TypeFactory::createType('VirtualLocation');
    $location->setProperty('url', 'https://example.org/join/12345');

    $event = \Brotkrueml\Schema\Type\TypeFactory::createType('Event');
    $event
        ->setProperty('name' 'A virtual event')
        ->setProperty('location', $location)
    ;

### Using the View Helpers

    <schema:type.event name="A virtual event">
        <schema:type.virtualLocation
            -as="location"
            url="https://example.org/join/12345"
        />
    </schema:type.event>

Both cases produce the following JSON-LD ouput:

    {
        "@context": "http://schema.org",
        "@type": "Event",
        "location": {
            "@type": "VirtualLocation",
            "url": "https://example.org/join/12345"
        },
        "name": "A virtual event"
    }

For more information have a look into the
[schema documentation](https://docs.typo3.org/p/brotkrueml/schema/master/en-us/).
