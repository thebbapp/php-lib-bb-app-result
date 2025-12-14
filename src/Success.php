<?php

declare(strict_types=1);

namespace BbApp\Result;

/**
 * Represents a successful Result containing a value.
 *
 * @template-covariant R The type of the success value
 * @extends Result<R,never>
 */
final class Success extends Result
{
	/**
	 * @param R $value
	 */
	public function __construct($value = null)
	{
        parent::__construct($value);
	}

    /**
     * Extracts the success value.
     *
     * @return R The success value
     */
    function unwrap()
    {
        return $this->value;
    }
}
