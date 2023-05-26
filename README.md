# Effectra HTML Render

Effectra HTML Render is a PHP library that provides a set of classes for generating and manipulating HTML elements in an object-oriented manner.

## Installation

You can install the package via Composer. Run the following command in your terminal:

```bash
composer require effectra/html-render
```

## Usage

### Creating HTML Elements

The `HtmlElement` class allows you to create HTML elements with different tags, content, and attributes. Here's an example of how to create an HTML element:

```php
use Effectra\HtmlRender\HtmlElement;

// Create an HTML element with a <div> tag and some content
$element = new HtmlElement('This is a div element', 'div');

// Get the content of the HTML element
$content = $element->getContent();
echo $content; // Output: This is a div element

// Get the tag name of the HTML element
$tag = $element->getTag();
echo $tag; // Output: div

// Get all attributes of the HTML element
$attributes = $element->getAttributes();
print_r($attributes); // Output: []

// Set the content of the HTML element and create a new instance
$newElement = $element->withContent('New content');
```

### Generating HTML Tags

The `Render` class provides static methods for generating common HTML tags. Here are some examples:

```php
use Effectra\HtmlRender\Render;

// Generate the HTML <html> tag
$htmlTag = Render::tagHtml('Content', 'en');

// Generate the HTML <head> tag
$headTag = Render::tagHead('Head content');

// Generate the HTML <body> tag
$bodyTag = Render::tagBody('Body content');

// Generate the HTML <title> tag
$titleTag = Render::tagTitle('Page Title');
```

### Using the HTML Element Factory

The `HtmlElementFactory` class is a factory for creating instances of the `HtmlElement` class. Here's an example:

```php
use Effectra\HtmlRender\Factory\HtmlElementFactory;

$factory = new HtmlElementFactory();

// Create an HTML element using the factory
$element = $factory->createHtmlElement('Element content', 'span', ['class' => 'highlight']);

// Get the content of the created element
$content = $element->getContent();
echo $content; // Output: Element content
```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This package is open-source and licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
