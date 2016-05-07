<?php

namespace MarcosSegovia\Petcetera\Language;

final class CatEs extends Locale
{
    const LANGUAGE_LOCALE     = 'cat_ES';
    const LANGUAGE_TERMINATOR_TERM = 'i';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
