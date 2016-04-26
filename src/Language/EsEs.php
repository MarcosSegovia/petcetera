<?php

namespace MarcosSegovia\Petcetera\Language;

final class EsEs extends Locale
{
    const SPANISH_LOCALE     = 'es_ES';
    const SPANISH_TERMINATOR = 'y';

    public static function create()
    {
        return parent::throughRaw(self::SPANISH_LOCALE, self::SPANISH_TERMINATOR);
    }
}
