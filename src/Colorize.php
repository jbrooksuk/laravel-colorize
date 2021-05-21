<?php

namespace JamesBrooks\Colorize;

/** @mixin \Illuminate\Support\Stringable */
class Colorize
{
    public function colorize()
    {
        return function ($fgColor = 'default', $bgColor = 'default') {
            $colorizeString = new ColorizeString($this->value);

            return new self($colorizeString->setForegroundColor($fgColor)->setBackgroundColor($bgColor));
        };
    }

    public function underscore()
    {
        return function () {
            $colorizeString = new ColorizeString($this->value);

            return new self($colorizeString->underscore());
        };
    }

    public function bold()
    {
        return function () {
            $colorizeString = new ColorizeString($this->value);

            return new self($colorizeString->bold());
        };
    }

    public function conceal()
    {
        return function () {
            $colorizeString = new ColorizeString($this->value);

            return new self($colorizeString->conceal());
        };
    }

    public function reverse()
    {
        return function () {
            $colorizeString = new ColorizeString($this->value);

            return new self($colorizeString->reverse());
        };
    }

    public function blink()
    {
        return function () {
            $colorizeString = new ColorizeString($this->value);

            return new self($colorizeString->blink());
        };
    }
}
