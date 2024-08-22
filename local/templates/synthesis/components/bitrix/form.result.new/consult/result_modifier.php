<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['funcGetInputHtml'] = function($question, $arrVALUES) {
    $id = $question['STRUCTURE'][0]['ID'];
    $type = $question['STRUCTURE'][0]['FIELD_TYPE'];
    $name = "form_{$type}_{$id}";
    $value = isset($arrVALUES[$name]) ? htmlentities($arrVALUES[$name]) : '';
    $required = $question['REQUIRED'] === 'Y' ? 'required' : '';

    switch ($name) {
        case 'form_text_29':
            $input = "<input 
                        class=\"commercial-form\" 
                        type=\"text\" 
                        name=\"{$name}\" 
                        value=\"{$value}\" 
                        placeholder=\"Укажите ваше имя\" 
                        {$required}>";
            break;

        case 'form_text_30':
            $input = "<input 
                        class=\"commercial-form\" 
                        type=\"email\" 
                        name=\"{$name}\" 
                        value=\"{$value}\" 
                        placeholder=\"Укажите Email\" 
                        {$required}>";
            break;

        case 'form_text_31':
            $input = "<input 
                        class=\"commercial-form\" 
                        id=\"opt-phone-input\"
                        type=\"tel\" name=\"{$name}\" 
                        value=\"{$value}\" 
                        placeholder=\"+7 (_ _ _) _ _ _ - _ _ - _ _\" 
                        {$required}>";
            break;



        default:
            $input = "<input 
                        class=\"commercial-form\" 
                        type=\"text\" 
                        name=\"{$name}\" 
                        value=\"{$value}\" 
                        {$required}>";
            break;
    }

    return $input;
};
?>