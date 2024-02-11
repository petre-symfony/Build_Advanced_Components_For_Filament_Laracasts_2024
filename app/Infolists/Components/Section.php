<?php

namespace App\Infolists\Components;

use Filament\Infolists\Components\Component;

class Section extends Component {
	protected string $view = 'infolists.components.section';

	public static function make(): static {
		return app(static::class);
	}
}
