<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'schema.org VirtualLocation',
    'description' => 'Add-on to the schema extension, providing VirtualLocation',
    'category' => 'fe',
    'state' => 'beta',
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'schema' => '1.7.0-'
        ],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\SchemaVirtualLocation\\' => 'Classes']
    ],
];
