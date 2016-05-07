<?php

namespace MarcosSegovia\Petcetera\Language;

final class PtPt extends Locale
{
    const LANGUAGE_LOCALE     = 'pt_PT';
    const LANGUAGE_TERMINATOR_TERM = 'e';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
