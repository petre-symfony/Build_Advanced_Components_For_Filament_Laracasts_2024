<?php

namespace App\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

class TextInput implements Htmlable {
	protected string | \Closure $label;

	public function __construct(
		protected string $name,

	) {

	}

	public static function make(string $name): self {
		return new self($name);
	}

	public function label(string | \Closure $label ): self {
		$this->label = $label;

		return $this;
	}

	public function getLabel(): string {
		return $this->evaluate($this->label ?? null) ?? str($this->name)->title();
	}

	public function evaluate($value) {
		if ($value instanceof \Closure) {
			return $value();
		}

		return $value;
	}

	public function extractPublicMethods(): array {
		$reflection = new \ReflectionClass($this);

		$methods = [];
		foreach ($reflection->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
			$methods[$method->getName()] = \Closure::fromCallable([$this, $method->getName()]);
		}

		return $methods;
	}

	public function getName(): string {
		return  $this->name;
	}

	public function render(): View{
		return view('components.text-input', $this->extractPublicMethods());
	}

	public function toHtml(): string {
		return $this->render()->render();
	}
}