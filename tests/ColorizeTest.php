<?php

namespace JamesBrooks\Colorize\Tests;

use Illuminate\Support\Str;

class ColorizeTest extends TestCase
{
    /** @test */
    public function it_can_mixin_stringable_class()
    {
        $this->assertSame("\e[31;49mHey James\e[39;49m", (string) Str::of('Hey James')->colorize('red'));
    }
}
