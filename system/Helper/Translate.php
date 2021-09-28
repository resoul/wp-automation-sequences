<?php
namespace AutomationSequences\Helper;

use AutomationSequences\Model\TextDomain;

class Translate
{
    public static function text($text)
    {
        return __($text, TextDomain::DOMAIN);
    }

    public static function escape($text)
    {
        return esc_html__($text,TextDomain::DOMAIN);
    }
}