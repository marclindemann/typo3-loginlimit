<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:loginlimit/Resources/Private/Language/locallang.xlf:tx_loginlimit_domain_model_loginattempt',
        'label' => 'tstamp',
        'label_userFunc' => 'WebentwicklerAt\\Loginlimit\\Userfuncs\\Tca->loginAttemptTitle',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('loginlimit') . 'Resources/Public/Icons/tx_loginlimit_domain_model_loginattempt.png',
        'default_sortby' => 'tstamp DESC',
        'tstamp' => 'tstamp',
        'rootLevel' => 1,
        'dividers2tabs' => true,
        'adminOnly' => true,
        'searchFields' => 'ip,username'
    ],
    'interface' => [
        'showRecordFieldList' => 'tstamp,username,ip'
    ],
    'columns' => [
        'tstamp' => [
            'label' => 'LLL:EXT:loginlimit/Resources/Private/Language/locallang.xlf:tstamp',
            'config' => [
                'type' => 'input',
                'size' => '13',
                'eval' => 'datetime',
                'readOnly' => true
            ]
        ],
        'ip' => [
            'label' => 'LLL:EXT:loginlimit/Resources/Private/Language/locallang.xlf:ip',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'readOnly' => true
            ]
        ],
        'username' => [
            'label' => 'LLL:EXT:loginlimit/Resources/Private/Language/locallang.xlf:username',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'readOnly' => true
            ]
        ]
    ],
    'types' => [
        '0' => [
            'showitem' => 'tstamp,ip,username'
        ]
    ]
];
