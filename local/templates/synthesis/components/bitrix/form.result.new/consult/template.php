<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<? if ($arResult["isFormNote"] === "Y"): ?>
    <h2 class="font-synthesis" style="color: #fffff;">Запроос отправлен<br>
        ожидайте ответа</h2>
<? else: ?>
    <?=$arResult["FORM_HEADER"]?>
    <div class="error-msg"></div>
    <input type="hidden" name="web_form_submit" value="Y">

    <? if ($arResult["isFormErrors"] === "Y"): ?>
        <div class="errors">
            <?=$arResult["FORM_ERRORS_TEXT"]?>
        </div>
    <? endif; ?>
    <h2 class="font-synthesis">проконсультируем<br>
        по любым вопросам</h2>
    <div class="consult-inputs">
        <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['NAME'], $arResult['arrVALUES'])?>
        <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['EMAIL'], $arResult['arrVALUES'])?>
        <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['PHONE'], $arResult['arrVALUES'])?>
    </div>
    <input type="submit" class="transparent-button consult-button font-synthesis" value="<?=$arResult["arForm"]["BUTTON"]?>">
    <div class="submit-condition">
        <input type="checkbox">
        <label class="font-synthesis">согласен с политикой конфиденциальности сайта</label>
    </div>
    <?=$arResult["FORM_FOOTER"]?>
<? endif; ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $("#opt-phone-input").mask("+7(999)999-99-99");

        $("#opt-phone-input").on('focus', function () {
            var input = $(this);
            if (input.val() === "") {
                input.val('+7(');
            }
            setTimeout(function() {
                input[0].setSelectionRange(3, 3);
            }, 10);
        });
    });
</script>
