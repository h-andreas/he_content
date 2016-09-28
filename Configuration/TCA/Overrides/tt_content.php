<?php
$tempColumns = array(
    'content_elements' =>
        array(
            'config' =>
                array(
                    'type' => 'inline',
                    'foreign_table' => 'tx_hecontent_domain_model_hecontent',
                    'foreign_field' => 'tt_content',
                    'foreign_sortby' => 'sorting',
                    'minitems' => 0,
                    'maxitems' => 10,
                ),
            'exclude' => '1',
            'label' => 'Content-Element',
        ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'teaser_single',
    'teaser_single',
);

$tempTypes = array(
    'teaser_single' =>
        array(
            'columnsOverrides' =>
                array(
                    'bodytext' =>
                        array(
                            'defaultExtras' => 'richtext:rte_transform[mode=ts_css]',
                        ),
                ),
            'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,content_elements,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories',
        ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;