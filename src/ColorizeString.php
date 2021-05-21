<?php

namespace JamesBrooks\Colorize;

use Symfony\Component\Console\Color;

class ColorizeString
{
    public Color $color;
    public string $value;
    public string $fgColor = 'default';
    public string $bgColor = 'default';
    public array $options = [];

    /**
     * Create a new colorize string instance.
     *
     * @param  string  $value
     * @return string
     */
    public function __construct(string $value)
    {
       $this->value = $value;
    }

    /**
     * Get the foreground color.
     *
     * @return string
     */
    public function fgColor(): string
    {
        return $this->fgColor;
    }

    /**
     * Set the foreground color.
     *
     * @param  string  $color
     * @return string
     */
    public function setForegroundColor(string $color): self
    {
        $this->fgColor = $color;

        return $this;
    }

    /**
     * Get the foreground color.
     *
     * @return string
     */
    public function bgColor(): string
    {
        return $this->bgColor;
    }

    /**
     * Set the background color.
     *
     * @param  string  $color
     * @return string
     */
    public function setBackgroundColor($color): self
    {
        $this->bgColor = $color;

        return $this;
    }

    /**
     * Set the options.
     *
     * @param  array  $options
     * @return string
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Underscore the value.
     *
     * @return string
     */
    public function underscore(): string
    {
        $this->options[] = 'underscore';

        return (string) $this;
    }

    /**
     * Bold the value.
     *
     * @return string
     */
    public function bold(): string
    {
        $this->options[] = 'bold';

        return (string) $this;
    }

    /**
     * Conceal the value.
     *
     * @return string
     */
    public function conceal(): string
    {
        $this->options[] = 'conceal';

        return (string) $this;
    }

    /**
     * Blink the value.
     *
     * @return string
     */
    public function blink(): string
    {
        $this->options[] = 'blink';

        return (string) $this;
    }

    /**
     * Reverse the colors.
     *
     * @return string
     */
    public function reverse(): string
    {
        $this->options[] = 'reverse';

        return (string) $this;
    }

    /**
     * Create a new string instance of the Color.
     *
     * @return string
     */
    public function __toString(): string
    {
        $color = new Color($this->fgColor, $this->bgColor, $this->options);

        return $color->apply($this->value);
    }
}
