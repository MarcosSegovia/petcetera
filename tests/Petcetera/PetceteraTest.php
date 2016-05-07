<?php

namespace MarcosSegovia\PetceteraTests\Petcetera;

use MarcosSegovia\Petcetera\Petcetera;

final class PetceteraTest extends \PHPUnit_Framework_TestCase
{
    private $all_words;
    private $result;

    public function tearDown()
    {
        $this->result = null;
    }

    /**
     * @test
     */
    public function givenAnArrayOfWordsReturnAWholeRawString()
    {
        $this->givenAnArrayOfRandomWords();
        $this->whenCallingThePetcetera();
        $this->thenShouldGetARawString();
    }

    /**
     * @test
     */
    public function givenAnArrayOfWordsReturnTheSameWordsInStringSeparatedByCommasAndTerminatorInEnglish()
    {
        $this->givenAnArrayOfRandomWords();
        $this->whenCallingThePetcetera();
        $this->thenShouldGetARawStringWithArrayValuesSeparatedByCommasAndTerminatorInEnglish();
    }

    /**
     * @test
     * @dataProvider localeProvider
     */
    public function givenAnArrayOfWordsAndAnSpecificLocaleReturnTheSameWordsInStringSeparatedByCommasAndLocaleTerminator(
        $an_specific_locale_input,
        $an_specific_locale_terminator
    )
    {
        $this->givenAnArrayOfRandomWords();
        $this->whenCallingThePetceteraWithAnSpecificLocale($an_specific_locale_input);
        $this->thenShouldGetARawStringWithArrayValuesSeparatedByCommasAndLocaleTerminator($an_specific_locale_terminator
        );
    }

    private function givenAnArrayOfRandomWords()
    {
        $this->all_words = [
            'Natsu',
            'Erza',
            'Happy',
            'Lucy',
            'Laxus'
        ];
    }

    public function localeProvider()
    {
        return [
            ['cat_ES', 'i'],
            ['de_DE', 'und'],
            ['en_GB', 'and'],
            ['en_US', 'and'],
            ['es_ES', 'y'],
            ['fr_FR', 'et'],
            ['it_IT', 'e'],
            ['ja_JA', 'そして'],
            ['pt_PT', 'e'],
            ['ru_RU', 'а также'],
        ];
    }

    private function thenShouldGetARawString()
    {
        $this->assertInternalType('string', $this->result);
    }

    private function thenShouldGetARawStringWithArrayValuesSeparatedByCommasAndTerminatorInEnglish()
    {
        $this->assertEquals('Natsu, Erza, Happy, Lucy and Laxus', $this->result);
    }

    private function whenCallingThePetcetera()
    {
        $petcetera    = new Petcetera();
        $this->result = $petcetera->__invoke($this->all_words);
    }

    private function whenCallingThePetceteraWithAnSpecificLocale($an_specific_locale_input)
    {
        $petcetera    = new Petcetera();
        $this->result = $petcetera->__invoke($this->all_words, $an_specific_locale_input);
    }

    private function thenShouldGetARawStringWithArrayValuesSeparatedByCommasAndLocaleTerminator(
        $an_specific_locale_terminator
    )
    {
        $this->assertEquals("Natsu, Erza, Happy, Lucy $an_specific_locale_terminator Laxus", $this->result);
    }
}
