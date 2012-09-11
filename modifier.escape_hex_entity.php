<?php

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * hex entity
 * @param type $string
 * @param type $char_set
 * @return string 
 */
function smarty_modifier_escape_hex_entity($input_string, $char_set = 'UTF-8') {
    $output_string = "";

    $string_length = mb_strlen($input_string, $char_set);

    for ($i = 0; $i < $string_length; $i++) {
        $char = mb_substr($input_string, $i, 1, $char_set);
        $dec_entity = mb_convert_encoding($char, "HTML-ENTITIES", $char_set);

        preg_match("/(&#)?(.*)/", $dec_entity, $matches);
        if ($matches[1]) {
            $dec = $matches[2];
        } else {
            $dec = ord($matches[2]);
        }

        $hex = dechex($dec);

        $output_string .= "&#x" . $hex . ";";
    }

    return $output_string;
}

/* vim: set expandtab: */
?>
