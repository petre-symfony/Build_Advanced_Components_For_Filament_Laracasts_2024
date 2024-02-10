<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Component;

class Section extends Component {
	protected string $view = 'forms.components.section';
	protected \Closure|string|null $description = null;

	public function __construct(
		protected string | \Closure $heading
	) {
	}

	public function description(string | \Closure | null $description = null): static {
		$this->description = $description;

		return $this;
	}

	public function getDescription(): ?string {
		return $this->evaluate($this->description);
	}

	public function getHeading(): string {
		return $this->evaluate($this->heading);
	}

	public static function make(string | \Closure $heading): static {
		return app(static::class, [
			'heading' => $heading
		]);
	}
}