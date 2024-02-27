<?php

namespace DanHarrin\FilamentToolkit\Concerns;

trait CanBeSection {
	protected \Closure|string|null $description = null;
	protected \Closure|string|null $icon = null;

	public function __construct(
		protected string | \Closure $heading
	) {
	}

	public function description(string | \Closure | null $description = null): static {
		$this->description = $description;

		return $this;
	}

	public function icon(string | \Closure | null $icon = null): static {
		$this->icon = $icon;

		return $this;
	}

	public function getDescription(): ?string {
		return $this->evaluate($this->description);
	}

	public function getIcon(): ?string {
		return $this->evaluate($this->icon);
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