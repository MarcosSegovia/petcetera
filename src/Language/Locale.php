<?php

namespace MarcosSegovia\Petcetera\Language;

class Locale implements LocaleInterface
{
    protected $raw_locale_value;

    protected $raw_terminator;

    private function __construct(
        $a_raw_locale,
        $a_raw_terminator
    )
    {
        $this->raw_locale_value = $a_raw_locale;
        $this->raw_terminator   = $a_raw_terminator;
    }

    protected static function throughRaw(
        $a_raw_locale,
        $a_raw_terminator
    )
    {
        return new static($a_raw_locale, $a_raw_terminator);
    }

    public function locale()
    {
        return $this->raw_locale_value;
    }

    public function terminator()
    {
        return $this->raw_terminator;
    }
}
