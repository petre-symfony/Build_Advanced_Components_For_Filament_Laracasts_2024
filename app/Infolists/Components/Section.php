<?php

namespace App\Infolists\Components;

use DanHarrin\FilamentToolkit\Concerns\CanBeSection;
use Filament\Infolists\Components\Component;

class Section extends Component {
	use CanBeSection;

	protected string $view = 'section';
}
