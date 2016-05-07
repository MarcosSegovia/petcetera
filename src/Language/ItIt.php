<?php

namespace MarcosSegovia\Petcetera\Language;

final class ItIt extends Locale
{
    const LANGUAGE_LOCALE     = 'it_IT';
    const LANGUAGE_TERMINATOR_TERM = 'e';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
