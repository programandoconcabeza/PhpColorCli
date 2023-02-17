<?php

declare(strict_types=1);

namespace ProgramandoConCabeza;

final class PHPColorCli
{
    use Colors;

    // Returns colored string
    public static function getColoredString($string, $foreground_color = null, $background_color = null, $option = null): string
    {
        $colored_string = "";

        // Check if given foreground color found
        if ($foreground_color && self::returnColor($foreground_color) !== null) {
            $colored_string .= "\033[" . self::returnColor($foreground_color) . "m";
        }
        // Check if given background color found
        if ($background_color && self::returnBackground($background_color) !== null) {
            $colored_string .= "\033[" . self::returnBackground($background_color) . "m";
        }

        // Check if given option found
        if ($option && self::returnOption($option) !== null) {
            $colored_string .= "\033[" . self::returnOption($option) . "m";
        }

        // Add string and end coloring
        $colored_string .=  $string . "\033[0m";
        return $colored_string;
    }

    // Returns all foreground color names
    public static function getForegroundColors(): array
    {
        return array_keys(self::arrayColors());
    }

    // Returns all background color names
    public static function getBackgroundColors(): array
    {
        return array_keys(self::arrayBackground());
    }

    // Returns all background color names
    public static function getOptions(): array
    {
        return array_keys(self::arrayOptions());
    }
}