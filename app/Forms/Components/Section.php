<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Component;

class Section extends Component {
	protected string $view = 'forms.components.section';

	public static function make(): static {
		return app(static::class);
	}
}
