<?php

declare(strict_types=1);


namespace ProgramandoConCabeza;


final class OptionsManagement
{
    public function underline(): string
    {
        return 'underline';
    }

    public function blink(): string
    {
        return 'blink';
    }

    public function reverse(): string
    {
        return 'reverse';
    }

    public function hidden(): string
    {
        return 'hidden';
    }
}