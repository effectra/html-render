<?php

declare(strict_types=1);

namespace Effectra\HtmlRender\Contracts;

/**
 * Interface HtmlElementInterface
 *
 * This interface defines the methods for interacting with an HTML element.
 */
interface HtmlElementInterface
{
    /**
     * Get the content of the HTML element.
     *
     * @return string The content of the HTML element.
     */
    public function getContent(): string;

    /**
     * Get the value of a specific attribute of the HTML element.
     *
     * @param string $attribute The name of the attribute.
     * @return string The value of the attribute.
     */
    public function getAttribute(string $attribute): string;

    /**
     * Get an array of all attributes of the HTML element.
     *
     * @return array An array containing all attributes of the HTML element.
     */
    public function getAttributes(): array;

    /**
     * Get the tag name of the HTML element.
     *
     * @return string The tag name of the HTML element.
     */
    public function getTag(): string;

    /**
     * Set the content of the HTML element.
     *
     * @param string $content The content to set.
     * @return HtmlElementInterface A new instance of the HTML element with the updated content.
     */
    public function withContent(string $content): self;

    /**
     * Set a specific attribute of the HTML element.
     *
     * @param array $attribute An associative array representing the attribute(s) to set.
     *                        The array keys are attribute names, and the array values are attribute values.
     * @return HtmlElementInterface A new instance of the HTML element with the updated attribute.
     */
    public function withAttribute(array $attribute): self;

    /**
     * Set multiple attributes of the HTML element.
     *
     * @param array $attributes An associative array representing the attributes to set.
     *                         The array keys are attribute names, and the array values are attribute values.
     * @return HtmlElementInterface A new instance of the HTML element with the updated attributes.
     */
    public function withAttributes(array $attributes): self;

    /**
     * Set the tag name of the HTML element.
     *
     * @param string $tag The tag name to set.
     * @return HtmlElementInterface A new instance of the HTML element with the updated tag name.
     */
    public function withTag(string $tag): self;
}

