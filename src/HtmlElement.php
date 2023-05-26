<?php

declare(strict_types=1);

namespace Effectra\HtmlRender;

use Effectra\HtmlRender\Contracts\HtmlElementInterface;

/**
 * Class HtmlElement
 *
 * This class represents an HTML element and implements the HtmlElementInterface.
 */
class HtmlElement implements HtmlElementInterface
{
    protected string $content;
    protected string $tag;
    protected array $attributes;

    /**
     * HtmlElement constructor.
     *
     * @param string $content The content of the HTML element. Default is 'div'.
     * @param string $tag The tag name of the HTML element. Default is an empty string.
     * @param array $attributes An associative array representing the attributes of the HTML element.
     *                          The array keys are attribute names, and the array values are attribute values.
     *                          Default is an empty array.
     */
    public function __construct(string $content = 'div', string $tag = '', array $attributes = [])
    {
        $this->content = $content;
        $this->tag = $tag;
        $this->attributes = $attributes;
    }

    /**
     * Get the content of the HTML element.
     *
     * @return string The content of the HTML element.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Get the value of the specified attribute.
     *
     * @param string $attribute The attribute name.
     * @return string The value of the specified attribute.
     */
    public function getAttribute(string $attribute): string
    {
        return $this->attributes[$attribute];
    }

    /**
     * Get all the attributes of the HTML element.
     *
     * @return array An associative array representing the attributes of the HTML element.
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * Get the tag name of the HTML element.
     *
     * @return string The tag name of the HTML element.
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set the content of the HTML element and return a new instance.
     *
     * @param string $content The new content for the HTML element.
     * @return HtmlElementInterface A new instance of HtmlElement with the updated content.
     */
    public function withContent(string $content): self
    {
        $clone = clone $this;
        $clone->content = $content;
        return $clone;
    }

    /**
     * Add a new attribute to the HTML element and return a new instance.
     *
     * @param array $attribute An associative array representing the attribute to add.
     * @return HtmlElementInterface A new instance of HtmlElement with the added attribute.
     */
    public function withAttribute(array $attribute): self
    {
        $clone = clone $this;
        $clone->attributes[] = $attribute;
        return $clone;
    }

    /**
     * Set the attributes of the HTML element and return a new instance.
     *
     * @param array $attributes An associative array representing the attributes to set.
     * @return HtmlElementInterface A new instance of HtmlElement with the updated attributes.
     */
    public function withAttributes(array $attributes): self
    {
        $clone = clone $this;
        $clone->attributes = $attributes;
        return $clone;
    }

    /**
     * Set the tag name of the HTML element and return a new instance.
     *
     * @param string $tag The new tag name for the HTML element.
     * @return HtmlElementInterface A new instance of HtmlElement with the updated tag name.
     */
    public function withTag(string $tag): self
    {
        $clone = clone $this;
        $clone->tag = $tag;
        return $clone;
    }
}
