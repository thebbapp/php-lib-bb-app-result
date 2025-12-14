<?php

declare(strict_types=1);

namespace BbApp\Result;

/**
 * Abstract Result monad base class for representing success or failure states.
 *
 * @template R The type of the success value
 * @template E of \Throwable The type of the error value
 * @var (R|null)|E $value
 */
abstract class Result
{
	protected $value;

	/**
	 * @param R|E $value
	 */
	protected function __construct($value)
	{
		$this->value = $value;
	}

    /**
     * Extracts the wrapped value (either success or error).
     *
     * @return R|E The wrapped value
     */
	abstract function unwrap();
}
