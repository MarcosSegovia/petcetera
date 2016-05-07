<?php

namespace MarcosSegovia\Petcetera\Language;

final class EnUs extends Locale
{
    const LANGUAGE_LOCALE     = 'en_US';
    const LANGUAGE_TERMINATOR_TERM = 'and';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
