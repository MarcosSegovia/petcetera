<?php

namespace MarcosSegovia\Petcetera\Language;

final class EnUk extends Locale
{
    const SPANISH_LOCALE     = 'en_UK';
    const SPANISH_TERMINATOR = 'and';

    public static function create()
    {
        return parent::throughRaw(self::SPANISH_LOCALE, self::SPANISH_TERMINATOR);
    }
}
