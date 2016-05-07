<?php

namespace MarcosSegovia\Petcetera\Language;

final class CatEs extends Locale
{
    const SPANISH_LOCALE     = 'cat_ES';
    const SPANISH_TERMINATOR = 'i';

    public static function create()
    {
        return parent::throughRaw(self::SPANISH_LOCALE, self::SPANISH_TERMINATOR);
    }
}
