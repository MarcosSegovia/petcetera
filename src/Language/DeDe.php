<?php

namespace MarcosSegovia\Petcetera\Language;

final class DeDe extends Locale
{
    const LANGUAGE_LOCALE     = 'de_DE';
    const LANGUAGE_TERMINATOR_TERM = 'und';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
