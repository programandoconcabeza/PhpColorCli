<?php

declare(strict_types=1);

namespace ProgramandoConCabeza;


trait ColorsTrait
{

    public static function colors(): ColorsManagement
    {
        return (new ColorsManagement());
    }

    public static function background(): BackgroundManagement
    {
        return (new BackgroundManagement());
    }

    public static function options(): OptionsManagement
    {
        return (new OptionsManagement());
    }


    private static function returnColor(string $color): ?string
    {
        if (array_key_exists($color, self::arrayColors())) {
            return self::arrayColors()[$color];
        }
        return null;
    }

    private static function returnBackground(string $color): ?string
    {
        if (array_key_exists($color, self::arrayBackground())) {
            return self::arrayBackground()[$color];
        }
        return null;
    }

    private static function returnOption(string $option): ?string
    {
        if (array_key_exists($option, self::arrayOptions())) {
            return self::arrayOptions()[$option];
        }
        return null;
    }


    private static function arrayColors(): array
    {
        return [
            'bold'        => '1',
            'black'       => '0;30',
            'blue'        => '0;34',
            'green'       => '0;32',
            'cyan'        => '0;36',
            'red'         => '0;31',
            'purple'      => '0;35',
            'brown'       => '0;33',
            'lightGray'   => '0;37',
            'normal'      => '0;39',
            'dim'         => '2',
            'darkGray'    => '1;30',
            'lightBlue'   => '1;34',
            'lightGreen'  => '1;32',
            'lightCyan'   => '1;36',
            'lightRed'    => '1;31',
            'lightPurple' => '1;35',
            'yellow'      => '1;33',
            'white'       => '1;37',
        ];
    }

    private static function arrayBackground(): array
    {
        return [
            'backgroundBlack'     => '40',
            'backgroundRed'       => '41',
            'backgroundGreen'     => '42',
            'backgroundYellow'    => '43',
            'backgroundBlue'      => '44',
            'backgroundMagenta'   => '45',
            'backgroundCyan'      => '46',
            'backgroundLightGray' => '47',
        ];
    }

    private static function arrayOptions(): array
    {
        return [
            'underline' => '4',
            'blink'     => '5',
            'reverse'   => '7',
            'hidden'    => '8'
        ];
    }

}