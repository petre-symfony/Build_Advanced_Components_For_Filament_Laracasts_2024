<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;

class ColorPicker extends Field {
	protected string $view = 'forms.components.color-picker';
	protected \Closure|int|null $width = null;

	public function width(int | \Closure | null $width): static {
		$this->width = $width;

		return $this;
	}

	public function getWidth(): int | \Closure | null {

	}
}
