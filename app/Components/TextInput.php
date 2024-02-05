<?php

namespace App\Components;

use Illuminate\Contracts\View\View;

class TextInput {

	public function __construct(
		protected string $name
	) {

	}

	public static function make(string $name): self {
		return new self($name);
	}

	public function render(): View{
		return view('components.text-input');
	}
}