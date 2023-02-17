<?php

declare(strict_types=1);

namespace ProgramandoConCabeza;


trait Colors
{
    public static function bold(): string
    {
        return 'bold';
    }

    public static function black(): string
    {
        return 'black';
    }

    public static function blue(): string
    {
        return 'blue';
    }

    public static function green(): string
    {
        return 'green';
    }

    public static function cyan(): string
    {
        return 'cyan';
    }

    public static function red(): string
    {
        return 'red';
    }

    public static function purple(): string
    {
        return 'purple';
    }

    public static function brown(): string
    {
        return 'brown';
    }

    public static function lightGray(): string
    {
        return 'lightGray';
    }

    public static function normal(): string
    {
        return 'normal';
    }

    public static function dim(): string
    {
        return 'dim';
    }

    public static function darkGray(): string
    {
        return 'darkGray';
    }

    public static function lightBlue(): string
    {
        return 'lightBlue';
    }

    public static function lightGreen(): string
    {
        return 'lightGreen';
    }

    public static function lightCyan(): string
    {
        return 'lightCyan';
    }

    public static function lightRed(): string
    {
        return 'lightRed';
    }

    public static function lightPurple(): string
    {
        return 'lightPurple';
    }

    public static function yellow(): string
    {
        return 'yellow';
    }

    public static function white(): string
    {
        return 'white';
    }


    public static function backgroundBlack(): string
    {
        return 'backgroundBlack';
    }

    public static function backgroundRed(): string
    {
        return 'backgroundRed';
    }

    public static function backgroundGreen(): string
    {
        return 'backgroundGreen';
    }

    public static function backgroundYellow(): string
    {
        return 'backgroundYellow';
    }

    public static function backgroundBlue(): string
    {
        return 'backgroundBlue';
    }

    public static function backgroundMagenta(): string
    {
        return 'backgroundMagenta';
    }

    public static function backgroundCyan(): string
    {
        return 'backgroundCyan';
    }

    public static function backgroundLightGray(): string
    {
        return 'backgroundLightGray';
    }

    public static function underline(): string
    {
        return 'underline';
    }

    public static function blink(): string
    {
        return 'blink';
    }

    public static function reverse(): string
    {
        return 'reverse';
    }

    public static function hidden(): string
    {
        return 'hidden';
    }


    private static function returnColor(string $color)
    {
        if (array_key_exists($color, self::arrayColors())) {
            return self::arrayColors()[$color];
        }
        return null;
    }

    private static function returnBackground(string $color)
    {
        if (array_key_exists($color, self::arrayBackground())) {
            return self::arrayBackground()[$color];
        }
        return null;
    }

    private static function returnOption(string $option)
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