<?php

declare(strict_types=1);

namespace BbApp\Result;

/**
 * Represents a failed Result containing an error.
 *
 * @template-covariant E The type of the error value
 * @extends Result<never,E>
 */
final class Failure extends Result
{
    /**
     * @param E $value
     */
    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Extracts the error value.
     *
     * @return E The error value
     */
    function unwrap()
    {
        return $this->value;
    }
}
