<?php

declare(strict_types=1);

namespace Effectra\HtmlRender;

use Effectra\HtmlRender\Factory\HtmlElementFactory;

/**
 * Class Render
 * @package Effectra\HtmlRender
 */
class Render
{
    protected HtmlElementFactory $htmlElement;

    /**
     * Render constructor.
     */
    public function __construct()
    {
        $this->htmlElement = new HtmlElementFactory();
    }

    /**
     * Returns the HTML doctype declaration.
     * @return string
     */
    public static function start(): string
    {
        return '<!DOCTYPE html>';
    }

    /**
     * Generates the HTML <html> tag with the specified content and language.
     * @param string $content The content within the <html> tag.
     * @param string $lang The language attribute.
     * @return string
     */
    public static function tagHtml(string $content, string $lang = 'en'): string
    {
        return sprintf('<html lang="%s">%s</html>', $lang, $content);
    }

    /**
     * Generates the HTML <head> tag with the specified content.
     * @param string $content The content within the <head> tag.
     * @return string
     */
    public static function tagHead(string $content): string
    {
        return sprintf('<head>%s</head>', $content);
    }

    /**
     * Generates the HTML <body> tag with the specified content.
     * @param string $content The content within the <body> tag.
     * @return string
     */
    public static function tagBody(string $content): string
    {
        return sprintf('<body>%s</body>', $content);
    }

    /**
     * Generates the HTML <title> tag with the specified content.
     * @param string $content The content within the <title> tag.
     * @return string
     */
    public static function tagTitle(string $content): string
    {
        return sprintf('<title>%s</title>', $content);
    }

    /**
     * Generates an HTML element with the specified tag, content, and attributes.
     * @param string $tag The HTML tag.
     * @param string $content The content within the HTML element.
     * @param array|string $attributes The attributes of the HTML element.
     * @return string
     */
    public static function htmlElement(string $tag = 'div', string $content = '', array|string $attributes)
    {
        $attributes_string = "";

        if (is_string($attributes)) {
            $attributes_string = $attributes;
        }
        if (is_array($attributes) && !is_string($attributes)) {
            if (is_countable($attributes) && count($attributes) > 1) {
                foreach ($attributes as $attribute) {
                    $attributes_string .= sprintf('%s="%s"', key($attribute), $attribute[key($attribute)]);
                }
            } else {
                $attributes_string = sprintf('%s="%s"', key($attributes), $attributes[key($attributes)]);
            }
        }

        return sprintf('<%s %s>%s</%s>', $tag, $attributes_string, $content, $tag);
    }
}
