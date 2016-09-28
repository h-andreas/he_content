config.tx_extbase {
    persistence{
        enableAutomaticCacheClearing = 1
        updateReferenceIndex = 0
        classes {
            HSE\HeContent\Domain\Model\TtContent {
                mapping {
                    tableName = tt_content
                }
            }
        }
    }
}

tt_content.teaser_single = FLUIDTEMPLATE
tt_content.teaser_single {
    file = EXT:he_content/Resources/Private/Templates/HeContent/List.html

    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
        table = tx_hecontent_domain_model_hecontent
        pidInList.field = pid
        where = deleted=0 AND hidden=0
        markers {
            uid.field = uid
        }
        as = data_elements

        dataProcessing.2 = TYPO3\CMS\Frontend\DataProcessing\SplitProcessor
        dataProcessing.2 {
            if.isTrue.field = content_elements
            delimiter = ,
            fieldName = content_elements
            as = test
        }

        dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        dataProcessing.10 {
            if.isTrue.field = media
            references {
                fieldName = media
                table = tx_hecontent_domain_model_hecontent
            }
            as = data_media
        }
        dataProcessing.20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        dataProcessing.20 {
            if.isTrue.field = preview
            references {
                fieldName = preview
                table = tx_hecontent_domain_model_hecontent
            }
            as = data_preview
        }

    }

}