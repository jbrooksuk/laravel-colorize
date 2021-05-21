<?php

namespace JamesBrooks\Colorize\Tests;

use JamesBrooks\Colorize\ColorizeString;
use Symfony\Component\Console\Exception\InvalidArgumentException;

class ColorizeStringTest extends TestCase
{
    /** @test */
    public function it_can_create_new_instances()
    {
        $colorizeString = new ColorizeString('Hey James');

        $this->assertInstanceOf(ColorizeString::class, $colorizeString);
        $this->assertSame('Hey James', $colorizeString->value);
    }

    /** @test */
    public function it_can_create_strings_with_foreground_color()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->setForegroundColor('red');
        });

        $this->assertSame('red', $colorizeString->fgColor);
        $this->assertSame("\e[31;49mHey James\e[39;49m", (string) $colorizeString);
    }

    /** @test */
    public function it_can_create_strings_with_background_color()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->setBackgroundColor('red');
        });

        $this->assertSame('red', $colorizeString->bgColor);
        $this->assertSame("\e[39;41mHey James\e[39;49m", (string) $colorizeString);
    }

    /** @test */
    public function it_can_create_bold_strings()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->bold();
        });

        $this->assertEquals(['bold'], $colorizeString->options);
        $this->assertSame("\e[39;49;1mHey James\e[39;49;22m", (string) $colorizeString);
    }

    /** @test */
    public function it_can_create_underscored_strings()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->underscore();
        });

        $this->assertEquals(['underscore'], $colorizeString->options);
        $this->assertSame("\e[39;49;4mHey James\e[39;49;24m", (string) $colorizeString);
    }

    /** @test */
    public function it_can_create_blinking_strings()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->blink();
        });

        $this->assertEquals(['blink'], $colorizeString->options);
        $this->assertSame("\e[39;49;5mHey James\e[39;49;25m", (string) $colorizeString);
    }

    /** @test */
    public function it_can_create_reversed_strings()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->setForegroundColor('red')->setBackgroundColor('yellow')->reverse();
        });

        $this->assertEquals(['reverse'], $colorizeString->options);
        $this->assertEquals('red', $colorizeString->fgColor);
        $this->assertEquals('yellow', $colorizeString->bgColor);
    }

    /** @test */
    public function it_can_create_concealed_strings()
    {
        $colorizeString = tap(new ColorizeString('Hey James'), function ($cs) {
            $cs->conceal();
        });

        $this->assertEquals(['conceal'], $colorizeString->options);
        $this->assertSame("\e[39;49;8mHey James\e[39;49;28m", (string) $colorizeString);
    }
}
