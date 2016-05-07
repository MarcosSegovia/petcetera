<?php

namespace MarcosSegovia\Petcetera;

final class Petcetera
{
    const COMMON_SPACE = ' ';
    const COMMON_COMMA = ',';

    private $all_locales;

    public function __construct()
    {
        $this->all_locales = [
            'cat_ES' => Language\CatEs::create(),
            'de_DE' => Language\DeDe::create(),
            'en_GB' => Language\EnGb::create(),
            'en_US' => Language\EnUs::create(),
            'es_ES' => Language\EsEs::create(),
            'fr_FR' => Language\FrFr::create(),
            'it_IT' => Language\ItIt::create(),
            'ja_JA' => Language\JaJa::create(),
            'pt_PT' => Language\PtPt::create(),
            'ru_RU' => Language\RuRu::create(),
        ];
    }

    public function __invoke(array $all_input_words, $current_locale = 'en_GB')
    {
        $whole_string_to_return = '';
        $size_of_input_array    = count($all_input_words);
        foreach ($all_input_words as $key => $word_to_concatenate)
        {
            if ($key === $size_of_input_array - 1)
            {
                $whole_string_to_return .= $this->all_locales[$current_locale]->terminator() . self::COMMON_SPACE . $word_to_concatenate;
                return $whole_string_to_return;
            }
            if($key === $size_of_input_array - 2)
            {
                $whole_string_to_return .= $word_to_concatenate . self::COMMON_SPACE;
                continue;
            }
            $whole_string_to_return .= $word_to_concatenate . self::COMMON_COMMA . self::COMMON_SPACE;
        }
    }
}
