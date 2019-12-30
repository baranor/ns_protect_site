<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[NITSAN] Protect site',
    'description' => 'This extension will help you to quickly password protected TYPO3 pages without frontend users management, Check manual for more details. Live-Demo: https://demo.t3terminal.com/t3t-extensions/ You can download PRO version for more-features & free-support at https://t3terminal.com/password-protect-site-typo3-plugin/',
    'category' => 'plugin',
    'author' => 'T3: Milan Rathod, QA: Siddharth Sheth',
    'author_company' => 'NITSAN Technologies Pvt Ltd',
    'author_email' => 'sanjay@nitsan.in',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '6.0.0-10.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];