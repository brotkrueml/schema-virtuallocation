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
    'version' => '2.2.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-0.0.0',
            'typo3' => '11.5.19-13.4.99',
            'schema' => '3.0.0-3.99.99'
        ],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaVirtualLocation\\' => 'Classes']
    ],
];
