<?php

namespace App;

use Illuminate\Support\HtmlString;

class Svg
{
    /**
     * Render an inline SVG from resources/assets/svg with the given attributes on its root element.
     *
     * @param  array<string, string>  $attributes
     */
    public static function render(string $name, array $attributes = []): HtmlString
    {
        $svg = trim(file_get_contents(resource_path("assets/svg/{$name}.svg")));

        $html = collect($attributes)
            ->map(fn ($value, $key) => sprintf('%s="%s"', $key, e($value)))
            ->implode(' ');

        return new HtmlString($html === '' ? $svg : preg_replace('/^<svg\s/', "<svg {$html} ", $svg, 1));
    }
}
