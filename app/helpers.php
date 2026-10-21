<?php

use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\MarkdownConverter;

if (! function_exists('markdown')) {
    /**
     * Convert some text to Markdown...
     */
    function markdown(string $text): string
    {
        static $converter;

        $converter ??= new MarkdownConverter(
            (new Environment)
                ->addExtension(new CommonMarkCoreExtension)
                ->addExtension(new TableExtension)
        );

        return $converter->convert($text)->getContent();
    }
}
