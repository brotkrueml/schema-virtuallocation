<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'schema.org VirtualLocation',
    'description' => 'Add-on to the schema extension, providing VirtualLocation',
    'category' => 'fe',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.3.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.11-12.4.99',
            'schema' => '1.7.0-2.99.99'
        ],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaVirtualLocation\\' => 'Classes']
    ],
];
