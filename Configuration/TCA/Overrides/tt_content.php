<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$extensionKey = 'ot_timeline';
$ll = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => $ll . 'wizard.title',
        'value' => $extensionKey,
        'icon' => 'ot-icon-fas-timeline',
        'group' => 'extras',
        'description' => $ll . 'wizard.description',
    ],
    'textmedia',
    'after',
);

$tempColumns = [
    'timeline_items' => [
        'label' => $ll . 'timeline_item.label',
        'description' => $ll . 'timeline_item.description',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_ottimeline_timeline_item',
            'foreign_field' => 'parent_id',
            'foreign_sortby' => 'sorting',
            'foreign_table_field' => 'parent_table',
            'appearance' => [
                'showSynchronizationLink' => true,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => true,
                'collapseAll' => true,
                'useSortable' => true,
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

$GLOBALS['TCA']['tt_content']['types'][$extensionKey] = [
    // The general, language, access and notes tabs are added by the core.
    'showitem' => '
            --palette--;;headers,
            timeline_items,
        --div--;core.form.tabs:appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;core.form.tabs:categories,
            categories,
        --div--;core.form.tabs:extended,
    ',
];
