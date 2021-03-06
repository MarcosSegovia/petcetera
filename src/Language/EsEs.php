<?php

namespace MarcosSegovia\Petcetera\Language;

final class EsEs extends Locale
{
    const LANGUAGE_LOCALE     = 'es_ES';
    const LANGUAGE_TERMINATOR_TERM = 'y';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
