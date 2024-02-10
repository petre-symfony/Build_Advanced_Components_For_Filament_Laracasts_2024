<?php

namespace App\Infolists\Components;

use Filament\Infolists\Components\Entry;

class ColorEntry extends Entry {

	protected \Closure|int|null $width = null;

	public function width(int | \Closure | null $width): static {
		$this->width = $width;

		return $this;
	}

	public function getWidth(string $state): ?int {
		return $this->evaluate($this->width, [
			'state' => $state
		]);
	}

	protected string $view = 'infolists.components.color-entry';
}
