<?php

namespace App\Livewire;

use App\Infolists\Components\ColorEntry;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Livewire\Component;

class DemoInfolist extends Component implements HasForms, HasInfolists {
	use InteractsWithForms;
	use InteractsWithInfolists;

	public function infolist(Infolist $infolist) {
		return $infolist
			->schema([
				ColorEntry::make('color')
					->width(function($state) {
						return 3 or 4 or 5 or 6
					})
			])
			->state([
				'color' => ['#ff0000', '#00ff00']
			]);
	}

	public function render() {
		return view('livewire.demo-infolist');
	}
}
