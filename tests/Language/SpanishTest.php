<?php

namespace MarcosSegovia\PetceteraTests\Language;

use MarcosSegovia\Petcetera\Language\EsEs;

final class SpanishTest extends \PHPUnit_Framework_TestCase
{
    private $spanish_locale_instance;

    /**
     * @test
     */
    public function shouldReturnSpanishLocaleWhenCreatingIt()
    {
        $this->whenCreatingTheSpanishInstanceLocale();
        $this->thenShouldGetAnInstanceOfSpanishLocaleAndSpanishAsLocaleRaw();
    }

    /**
     * @test
     */
    public function shouldReturnYAsTerminatorWhenCreatingASpanishLocale()
    {
        $this->whenCreatingTheSpanishInstanceLocale();
        $this->thenShouldReturnAnYAsTerminator();
    }

    private function whenCreatingTheSpanishInstanceLocale()
    {
        $this->spanish_locale_instance = EsEs::create();
    }

    private function thenShouldGetAnInstanceOfSpanishLocaleAndSpanishAsLocaleRaw()
    {
        $this->assertInstanceOf(EsEs::class, $this->spanish_locale_instance);
        $this->assertEquals('es_ES', $this->spanish_locale_instance->locale());

    }

    private function thenShouldReturnAnYAsTerminator()
    {
        $this->assertEquals('y', $this->spanish_locale_instance->terminator());
    }
}
