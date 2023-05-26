<?php

declare(strict_types=1);

namespace Effectra\HtmlRender\Factory;

use Effectra\HtmlRender\Contracts\HtmlElementInterface;
use Effectra\HtmlRender\HtmlElement;

/**
 * Class HtmlElementFactory
 *
 * This factory class is responsible for creating instances of the HtmlElement class.
 */
class HtmlElementFactory
{
    /**
     * Create an instance of HtmlElement with the provided content, tag, and attributes.
     *
     * @param string $content The content of the HTML element. Default is 'div'.
     * @param string $tag The tag name of the HTML element. Default is an empty string.
     * @param array $attributes An associative array representing the attributes of the HTML element.
     *                          The array keys are attribute names, and the array values are attribute values.
     *                          Default is an empty array.
     * @return HtmlElementInterface An instance of the HtmlElement class.
     */
    public function createHtmlElement(string $content = 'div', string $tag = '', array $attributes = []): HtmlElementInterface
    {
        return new HtmlElement($content, $tag, $attributes);
    }
}
