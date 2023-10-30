<?php

/**
 * This file is part of wild-garlic/hello-world
 *
 * @copyright Copyright (c) Ben Ramsey <ben@ramsey.dev>
 * @license https://opensource.org/license/mit/ MIT License
 */

declare(strict_types=1);

namespace WildGarlic\HelloWorld;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
