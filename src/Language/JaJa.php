<?php

namespace MarcosSegovia\Petcetera\Language;

final class JaJa extends Locale
{
    const LANGUAGE_LOCALE     = 'ja_JA';
    const LANGUAGE_TERMINATOR_TERM = 'そして';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
