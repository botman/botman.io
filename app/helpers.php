<?php

use League\CommonMark\Converter;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use Webuni\CommonMark\TableExtension\TableExtension;

/**
 * Convert some text to Markdown...
 */
if (!function_exists('markdown')) {
    function markdown($text)
    {
        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new TableExtension());

        $converter = new Converter(new DocParser($environment), new HtmlRenderer($environment));

        return $converter->convertToHtml($text);
    }
}
