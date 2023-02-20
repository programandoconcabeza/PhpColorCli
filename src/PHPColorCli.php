<?php

declare(strict_types=1);

namespace ProgramandoConCabeza;

final class PHPColorCli
{
    use ColorsTrait;

    public static function getColoredString($string, $text_color = null, $background_color = null, $option = null): string
    {
        $colored_string = "";

        if ($text_color && self::returnColor($text_color) !== null) {
            $colored_string .= "\033[" . self::returnColor($text_color) . "m";
        }
        if ($background_color && self::returnBackground($background_color) !== null) {
            $colored_string .= "\033[" . self::returnBackground($background_color) . "m";
        }

        if ($option && self::returnOption($option) !== null) {
            $colored_string .= "\033[" . self::returnOption($option) . "m";
        }

        $colored_string .=  $string . "\033[0m";
        return $colored_string;
    }

    public static function getForegroundColors(): array
    {
        return array_keys(self::arrayColors());
    }

    public static function getBackgroundColors(): array
    {
        return array_keys(self::arrayBackground());
    }

    public static function getOptions(): array
    {
        return array_keys(self::arrayOptions());
    }
}