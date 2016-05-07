<?php

namespace MarcosSegovia\Petcetera\Language;

final class FrFr extends Locale
{
    const LANGUAGE_LOCALE     = 'fr_FR';
    const LANGUAGE_TERMINATOR_TERM = 'et';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
