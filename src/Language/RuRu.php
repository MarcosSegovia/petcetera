<?php

namespace MarcosSegovia\Petcetera\Language;

final class RuRu extends Locale
{
    const LANGUAGE_LOCALE     = 'ru_RU';
    const LANGUAGE_TERMINATOR_TERM = 'а также';

    public static function create()
    {
        return parent::throughRaw(self::LANGUAGE_LOCALE, self::LANGUAGE_TERMINATOR_TERM);
    }
}
