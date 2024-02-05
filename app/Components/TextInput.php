<?php

namespace App\Components;

class TextInput {

	public function __construct(
		protected string $name
	) {

	}

	public static function make(string $name): self {
		return new self($name);
	}
}