<?php

namespace App\Infolists\Components;

use Filament\Infolists\Components\Entry;

class ColorEntry extends Entry {

	protected \Closure|int|null $width = null;

	public function width(int | \Closure | null $width): static {
		$this->width = $width;

		return $this;
	}

	public function getWidth(): ?int {
		return $this->evaluate($this->width);
	}

	protected string $view = 'infolists.components.color-entry';
}
