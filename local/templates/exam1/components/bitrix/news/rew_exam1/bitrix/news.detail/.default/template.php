<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult["DETAIL_TEXT"];?>
        </div>
        <div class="review-autor">
            <?=$arResult["NAME"]?>,
            <?=$arResult["DISPLAY_ACTIVE_FROM"];?>
            <?=$arResult["PROPERTIES"]['POSITION']['VALUE']?>,
            <?=$arResult["PROPERTIES"]['COMPANY']['VALUE']?>.
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap">
        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
    </div>
</div>

<?php if($arResult['DISPLAY_PROPERTIES']['FIELS']):?>
    <div class="exam-review-doc">
        <p><?=GetMessage('DOCUMENT_TITLE')?>:</p>

        <?if(count($arResult["DISPLAY_PROPERTIES"]["FIELS"]["FILE_VALUE"]["SRC"]) == 1):?>

            <div  class="exam-review-item-doc">
                <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH;?>/img/icons/pdf_ico_40.png">
                <a href="<?=$arResult["DISPLAY_PROPERTIES"]["FIELS"]["FILE_VALUE"]["SRC"]?>">
                    <?=$arResult["DISPLAY_PROPERTIES"]["FIELS"]["FILE_VALUE"]["ORIGINAL_NAME"];?>
                </a>
            </div>
        <?else:
            foreach ($arResult["DISPLAY_PROPERTIES"]["FIELS"]["FILE_VALUE"] as $arFile => $idFile):
        ?>
            <div  class="exam-review-item-doc">
                <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH;?>/img/icons/pdf_ico_40.png">
                <a href="<?=$idFile["SRC"]?>">
                    <?=$idFile["ORIGINAL_NAME"];?>
                </a>
            </div>
            <?endforeach;?>
        <?endif;?>
    </div>
<hr>
<?endif;?>
